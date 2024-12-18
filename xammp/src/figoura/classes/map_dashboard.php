<?php
class MapPage_Dashboard extends ListPage_Dashboard
{
	/**
	 * @type Boolean
	 */
	protected $gridBased = false;

	/**
	 * Constructor, set initial params
	 * @param array $params
	 */
	function __construct(&$params)
	{
		parent::__construct( $params );

		$this->gridBased = !$this->dashElementData["updateMoved"] && $this->hasTableDashGridElement();
	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = parent::getSubsetDataCommand();

		if( $this->mapRefresh ) {
			$dc->filter = DataCondition::_And( array(
				$dc->filter,
				$this->getLatLngCondition( $this->dashElementData['latF'], $this->dashElementData['lonF'] )
			));
		}

		return $dc;
	}

	/**
	 *
	 */
	public function setGoogleMapsParams( $params )
	{
		$this->googleMapCfg['tName'] = $this->tName;
		$this->googleMapCfg['isUseMainMaps'] = true;
		$this->googleMapCfg['isUseGoogleMap'] = true;
		$this->googleMapCfg['isUseFieldsMaps'] = false;

		$mapId = GoodFieldName($this->dashTName).'_'.$this->dashElementName.'_dashMap';
		$this->googleMapCfg['mainMapIds'][] = $mapId;

		$this->googleMapCfg['mapsData'][ $mapId ]['type'] = 'DASH_MAP';
		$this->googleMapCfg['mapsData'][ $mapId ]['latField'] = $this->dashElementData['latF'];
		$this->googleMapCfg['mapsData'][ $mapId ]['lngField'] = $this->dashElementData['lonF'];
		$this->googleMapCfg['mapsData'][ $mapId ]['descField'] = $this->dashElementData['descF'];
		$this->googleMapCfg['mapsData'][ $mapId ]['addressField'] = $this->dashElementData['addressF'];

		$this->googleMapCfg['mapsData'][ $mapId ]['dashMap'] = true;

		$this->googleMapCfg['mapsData'][ $mapId ]['heatMap'] = $this->dashElementData['heatMap'];
		$this->googleMapCfg['mapsData'][ $mapId ]['clustering'] = $this->dashElementData['clustering'];
		$this->googleMapCfg['mapsData'][ $mapId ]['showAllMarkers'] = ( $this->dashElementData['heatMap'] || $this->dashElementData['clustering'] );

		$this->googleMapCfg['mapsData'][ $mapId ]['showCurrentLocation'] = !!$this->dashElementData['showCurrentLocation'];
		$this->googleMapCfg['mapsData'][ $mapId ]['currentLocationIcon'] = $this->dashSet->getDashMapLocationIcon( $this->dashElementName );

		if( !$this->gridBased )
			$this->googleMapCfg['mapsData'][ $mapId ]['zoom'] = "auto";
		else if( isset($this->dashElementData['zoom']) )
			$this->googleMapCfg['mapsData'][ $mapId ]['zoom'] = $this->dashElementData['zoom'];

		if( isset($this->dashElementData['APIkey']) )
			$this->googleMapCfg['APIcode'] = $this->dashElementData['APIkey'];

		if( $this->dashElementData['clustering'] )
			$this->AddJSFile("include/markerclusterer.js");
	}

	/**
	 *
	 */
	function fillGridData()
	{
		if( $this->gridBased )
			return;

		$data = $this->beforeProccessRow();
		$tKeys = $this->pSet->getTableKeys();

		$recNum = $this->hasTableDashGridElement() || strlen($this->masterTable) ? $this->pageSize : GetGlobalData( "mapMarkerCount" );

		if( !$this->mapRefresh && ( $this->dashElementData['clustering'] || $this->dashElementData['heatMap'] ) )
		{
			//	fetch as much records as we can
			$recNum = 10000;
		}

		while($data && ($this->recNo <= $recNum || $recNum == -1))
		{
			// update $this->recId value
			$this->genId();

			$keys = array();
			$params = array();
			foreach( $tKeys as $i => $fKey )
			{
				$keys[ 0 ] = $data[ $fKey ];
				$params[] = "editid".($i + 1)."=".runner_htmlspecialchars(rawurlencode( $data[ $fKey ] ));
			}
			$editlink = implode("&", $params);

			$this->addBigGoogleMapMarkers($data, $keys, $editlink);

			$data = $this->beforeProccessRow();
			$this->recNo ++;
		}
	}

	/**
	 *
	 */
	function fillControlsHTMLMap()
	{
		$this->controlsHTMLMap[ $this->tName ] = array();
		$this->controlsHTMLMap[ $this->tName ][ PAGE_DASHMAP ] = array();
		$this->controlsHTMLMap[ $this->tName ][ PAGE_DASHMAP ][ $this->id ] = array();
		$this->controlsHTMLMap[ $this->tName ][ PAGE_DASHMAP ][ $this->id ]["gMaps"] = $this->googleMapCfg;
	}

	/**
	 * @return String
	 */
	protected function getMapDiv()
	{
		$mapId = GoodFieldName($this->dashTName).'_'.$this->dashElementName.'_dashMap';
//		$width = $this->dashElementData['width'] ? $this->dashElementData['width'] : 600;
//		$height = $this->dashElementData['height'] ? $this->dashElementData['height'] : 400;
		$width = "100%";
		$height = "100%";
		$style = "@media print, (min-width: 768px) { #".$mapId." { width: ".$width."; } }";
		return '<style>'.$style.'</style><div id="'.$mapId.'" style="height: '.$height.';"></div>';
	}

	/**
	 * Show the page.
	 * It's supposed to be displayed in resonce on an ajax-like request
	 */
	public function showPage()
	{
		$this->fillSetCntrlMaps();

		$response = array();
		global $pagesData;
		$response["pagesData"] = $pagesData;
		$response['settings'] = $this->jsSettings;
		$response['controlsMap'] = $this->controlsHTMLMap;

		$response['html'] = $this->getMapDiv();
		$response['success'] = true;
		$response['id'] = $this->id;

		$response["additionalJS"] = $this->grabAllJsFiles();
		$response['headerCont'] = '<span class="rnr-dbebrick">' . $this->getPageTitle($this->pageName, GoodFieldName($this->tName)) . "</span>";
		$icon = getIconHTML( $this->dashElementData["item"]["icon"] );
		if( $icon )
			$response["iconHtml"] = $icon;

		echo printJSON($response);
	}

	/**
	 * A stub
	 * @return Boolean
	 */
	protected function checkIfSearchPanelActivated() {
		return false;
	}

	function deleteAvailable() {
		return ListPage_Embed::deleteAvailable() && $this->dashElementData["details"][$this->tName]["delete"];
	}

	function editAvailable() {
		return ListPage_Embed::editAvailable() && $this->dashElementData["details"][$this->tName]["edit"];
	}

	function addAvailable() {
		return ListPage_Embed::addAvailable() && $this->dashElementData["details"][$this->tName]["add"];
	}

	function viewAvailable() {
		return ListPage_Embed::viewAvailable() && $this->dashElementData["details"][$this->tName]["view"];
	}

	function inlineEditAvailable() {
		return false;
	}
	function inlineAddAvailable() {
		return false;
	}

	function addCommonJs()
	{
		$this->initGmaps();
	}

	/**
	 * A stub
	 */
	function addCommonHtml() {}

	/**
	 * A stub
	 */
	function commonAssign() {}

	/**
	 * A stub
	 */
	function addCustomCss() {}

	/**
	 * A stub
	 */
	function buildPagination() {}

	function fetchMapMarkersInSeparateQuery( $mapId )
	{
		return false;
	}

	protected function hasBigMap()
	{
		return true;
	}

	public function fillAdvancedMapData()
	{
	}

}
?>
