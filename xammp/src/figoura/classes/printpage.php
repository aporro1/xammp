<?php
class PrintPage extends RunnerPage
{
	public $allPagesMode = false;
	public $recordset = null;

	public $fetchedRecordCount = 0;
	public $splitByRecords = 0;
	public $detailTables;

	public $pageBody = array();


	protected $recordsRenderData = array();

	/**
	 * Array of field names that used for totals
	 * @type array
	 * totalsFields = array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	public $totalsFields = array();

	/**
	 * Temporary totals results
	 * @type array
	 */
	public $totals = array();

	/**
	 *	Total number of records in the query
	 */
	public $totalRowCount = false;

	public $queryPageNo = 1;
	public $queryPageSize = 0;

	public $_eof = false;
	public $nextRecord = null;

	public $customFieldForSort = array();
	public $customHowFieldSort = array();

	public $pageNo = 1;

	public $hideColumns = array();

	protected $_notEmptyFieldColumns = array();

	protected $queryCommand = null;

	/**
	 * @constructor
	 */
	function __construct(&$params = "")
	{
		parent::__construct($params);
		$this->pSetEdit = new ProjectSettings($this->tName, PAGE_SEARCH);

		if( $this->selection )
			$this->allPagesMode = true;

		if( !$this->detailTables )
			$this->detailTables = array();

		if( !is_array( $this->detailTables ) )
			$this->detailTables = array( $this->detailTables );

		//	save selected records and detail tables in session in normal mode
		$this->pageData["printSelection"] = $this->selection;
		$this->pageData["printDetails"] = $this->detailTables;
		$this->pageData["printAll"] = $this->allPagesMode;

		$this->printGridLayout = $this->pSet->getPrintGridLayout();
		$this->recsPerRowPrint = $this->pSet->getRecordsPerRowPrint();
		if ( !$this->recsPerRowPrint )
			$this->recsPerRowPrint = 1;

		$this->totalsFields = $this->pSet->getTotalsFields();

		if( !$this->splitByRecords )
			$this->splitByRecords = $this->pSet->getPrinterSplitRecords();

		$this->pageData["printRecords"] = $this->splitByRecords;

		if( $this->showHideFieldsFeatureEnabled() )
		{
			$hideColumns = $this->getColumnsToHide();
			$this->hideColumns = $hideColumns[DESKTOP];

			if( !is_array( $this->hideColumns ) )
				$this->hideColumns = array();

			foreach( $this->hideColumns  as $f ) {
				$this->hideField( $this->pSet->getFieldByGoodFieldName($f) );
			}
		}
	}

	/**
	 * @param String table
	 * @return Array
	 */
	public static function readSelectedRecordsFromRequest( $table )
	{
		if( !postvalue( "selection" ) )
			return array();

		$pSet = new ProjectSettings( $table );
		$keyFields = $pSet->getTableKeys();

		$selected_recs = array();
		foreach( postvalue( "selection" ) as $keyblock)
		{
			$arr = explode("&", refine($keyblock));
			if( count($arr) < count($keyFields) )
				continue;

			$keys = array();
			foreach($arr as $i => $value)
			{
				$keys[ $keyFields[$i] ] = urldecode( $value );
			}
			$selected_recs[] = $keys;
		}

		return $selected_recs;
	}

	/**
	 *
	 */
	protected function prepareCustomListQueryLegacySorting()
	{
		if( !$this->eventsObject->exists("ListQuery") )
			return;

		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');

		$fieldList = unserialize( $_SESSION[ $this->sessionPrefix . "_orderFieldsList" ] );
		for($i = 0; $fieldList && $i < count($fieldList); $i++)
		{
			$this->customFieldForSort[] = $fieldList[$i]->fieldIndex;
			$this->customHowFieldSort[] = $fieldList[$i]->orderDirection;
		}
	}

	/**
	 *
	 */
	protected function calcPageSizeAndNumber()
	{
		if( $this->allPagesMode )
			return;

		$this->queryPageNo = (integer)$_SESSION[ $this->sessionPrefix . "_pagenumber" ];
		if( !$this->queryPageNo )
			$this->queryPageNo = 1;

		//	page size
		$this->queryPageSize = (integer)$_SESSION[$this->sessionPrefix . "_pagesize"];
		if(!$this->queryPageSize)
			$this->queryPageSize = $this->pSet->getInitialPageSize();

		if($this->queryPageSize < 0)
			$this->allPagesMode = true;
	}

	/**
	 *
	 */
	protected function setMapParams()
	{
		$fieldsArr = array();
		foreach( $this->pSet->getPrinterFields() as $f )
		{
			$fieldsArr[] = array( 'fName' => $f, 'viewFormat' => $this->pSet->getViewFormat($f) );
		}
		$this->setGoogleMapsParams( $fieldsArr );
	}

	/**
	 * Process the page
	 */
	public function process()
	{
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessPrint") )
			$this->eventsObject->BeforeProcessPrint( $this );

		//	prepare maps
		loadMaps( $this->pSet );


		// build tabs
		$this->processGridTabs();

		$this->setMapParams();

		RunnerContext::pushSearchContext( $this->searchClauseObj );
		//	call SQL events, calculate record count
		$this->calcPageSizeAndNumber();
		$this->calculateRecordCount();

		$this->recordset = $this->dataSource->getList( $this->queryCommand );
		if( !$this->recordset ) {
			showError( $this->dataSource->lastError() );
		}

		$this->doFirstPageAssignments();
		if( !$this->splitByRecords )
		{
			$this->fillGridPage();
			$this->assignTotals();

			// display the 'Back to Master' link and master table info
			$this->displayMasterTableInfo();
			$this->addPage();
		}
		else
		{
			$masterAdded = false;
			while( true )
			{
				if( !$masterAdded )
				{
					$this->displayMasterTableInfo();
					$masterAdded = true;
				}
				else
				{
					//	hide master table info everywhere except the first page
					$this->pageBody["container_master"] = false;
					$this->pageBody["container_pdf"] = false;
				}

				$this->fillGridPage();
				if($this->EOF())
					break;

				$this->wrapPageBody();

				$this->addPage();
				++$this->pageNo;
				$this->pageBody = array();
			}
			
			//	add totals to the last page
			$this->assignTotals();
			
			$this->wrapPageBody();
			$this->addPage();
		}

		$this->hideEmptyFields();

		$this->prepareJsSettings();
		$this->addButtonHandlers();
		$this->addCommonJs();

		$this->commonAssign();
		$this->fillAdvancedMapData();


		$this->doCommonAssignments();
		$this->addCustomCss();
		$this->addDetailsCss();

		$this->displayPrintPage();
	}

	protected function calcAllDataTotals() {
		$currentPageSize = $this->queryPageSize;
		if ( !$this->allPagesMode && $this->pSet->getRecordsLimit() )
			$currentPageSize = $this->pSet->getRecordsLimit() - ( $this->queryPageSize * ($this->queryPageNo - 1) );
	
		
		return $this->pSet->calcTotalsFor() == TOTALS_ALL_DATA 
			&& !$this->allPagesMode && $this->queryPageSize < $this->totalRowCount;
	}

	protected function hideEmptyFields()
	{
		if(  $this->printGridLayout == gltHORIZONTAL )
		{
			foreach( $this->pSet->getFieldsToHideIfEmpty() as $f )
			{
				if( !$this->_notEmptyFieldColumns[ $f ] )
					$this->hideField( $f );
			}
		}
	}

	function addPage() {
		$this->body["data"][] = $this->pageBody;

		// put into recordsRenderData links to all records
		$pageIdx = count( $this->body["data"] ) - 1;
		$pageRows = &$this->body["data"][ $pageIdx ]["grid_row"]["data"];

		$this->fillRenderedData( $pageRows );
	}

	/**
	 * put into recordsRenderData links to all records
	 */
	protected function fillRenderedData( &$pageRows )
	{
		for( $rowIdx = 0; $rowIdx < count( $pageRows ); ++$rowIdx )
		{
			if( !$this->manyRecordsInRow() )
				$this->recordsRenderData[ $pageRows[ $rowIdx ]['recId'] ] = &$pageRows[ $rowIdx ];
			else
			{
				$records = &$pageRows[ $rowIdx ]["grid_record"]["data"];
				for( $recordIdx = 0; $recordIdx < count( $records ); ++$recordIdx ) {
					$this->recordsRenderData[ $records[ $recordIdx ]['recId'] ] = &$records[ $recordIdx ];
				}
			}
		}
	}

	protected function wrapPageBody()
	{
		$this->pageBody["begin"] = "<div class=\"rp-presplitpage rp-page\">";
		$this->pageBody["end"] = "</div>";
	}

	/**
	 *
	 */
	protected function assignTotals() {
		if( !$this->totalsFields )
			return;
		
		if( $this->calcAllDataTotals() )
			$this->buildAllDataTotals();
		else
			$this->buildTotals( $this->totals );
	}
	
	
	function buildTotals( &$totals ) {		
		$record = array();
		$this->pageBody["totals_record"] = true;
		foreach( $this->totalsFields as $tf ) {
			$total = GetTotals( $tf["fName"],
				$totals[ $tf["fName"] ],
				$tf[ "totalsType" ],
				$tf["numRows"],
				$tf[ "viewFormat" ],
				PAGE_PRINT,
				$this->pSet,
				false,
				$this );

			$this->pageBody[ GoodFieldName( $tf['fName'] ) . "_total" ] = $total;
			$this->pageBody[ GoodFieldName( $tf['fName'] ) . "_showtotal"] = true;
			$record[ GoodFieldName( $tf['fName'] ) . "_showtotal"] = true;
		}

		$this->pageBody[ "totals_row" ] = array("data" => array(0 => $record));		
	}

	/**
	 * @return Boolean
	 */
	protected function EOF()
	{
		$currentPageSize = $this->queryPageSize;
		if ( !$this->allPagesMode && $this->pSet->getRecordsLimit() )
		{
			$currentPageSize = $this->pSet->getRecordsLimit() - ($this->queryPageSize * ($this->queryPageNo - 1));
		}
		else if ( $this->allPagesMode )
		{
			$currentPageSize = $this->limitRowCount($this->totalRowCount);
		}

		if ( $this->fetchedRecordCount >= $currentPageSize )
			return true;

		$this->readNextRecordInternal();
		if( $this->_eof )
			return true;

		return false;
	}

	/**
	 * reads the next record and fills in $this->nextRecord
	 */
	protected function readNextRecordInternal()
	{
		//	no more data
		if( $this->_eof )
			return;

		//	next record already read
		if( $this->nextRecord )
			return;

		//	read the record and store it in $this->nextRecord
		while(true)
		{
			if( $this->eventsObject->exists("ListFetchArray") )
				$data = $this->eventsObject->ListFetchArray($this->recordset, $this);
			else
				$data = $this->cipherer->DecryptFetchedArray( $this->recordset->fetchAssoc() );

			if( !$data )
			{
				$this->_eof = true;
				return;
			}

			if( $this->eventsObject->exists("BeforeProcessRowPrint") )
			{
				if( !$this->eventsObject->BeforeProcessRowPrint($data, $this) )
				{
					continue;
				}
			}

			$this->nextRecord = $data;
			return;
		}
	}

	/**
	 * @return Mixed
	 */
	protected function readNextRecord()
	{
		if($this->EOF())
			return false;
		++$this->fetchedRecordCount;
		$data = $this->nextRecord;
		$this->nextRecord = false;
		return $data;
	}

	/**
	 * @param Array data
	 * @param &Array row
	 * @return Array
	 */
	protected function buildGridRecord( $data, &$row )
	{
		$this->genId();

		$record = array();
		$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";
		$record["recId"] = $this->recId;

		if( !$this->calcAllDataTotals() )
			$this->countTotals( $this->totals , $data );

		$keyFields = $this->pSet->getTableKeys();
		$keylink = "";
		$keys = array();
		for($i = 0; $i < count( $keyFields ); $i ++)
		{
			$keylink.= "&key".($i + 1) . "=" . runner_htmlspecialchars( rawurlencode( @$data[ $keyFields[$i] ] ) );
			$keys[$i] = $data[ $keyFields[$i] ];
		}

		if( $this->eventsObject->exists("BeforeMoveNextPrint") )
			$this->eventsObject->BeforeMoveNextPrint($data, $row, $record, $record["recId"], $this);

		$fieldsToHideIfEmpty = $this->pSet->getFieldsToHideIfEmpty();

		$printFields = &$this->pSet->getPrinterFields();
		for($i = 0; $i < count($printFields); $i++)
		{
			$dbValue = $this->showDBValue( $printFields[$i], $data, $keylink );
			if( !$this->pdfJsonMode() ) {
				$record[GoodFieldName($printFields[$i])."_value"] = $dbValue;
			} else {
				$record[GoodFieldName($printFields[$i])."_pdfvalue"] = $dbValue;
			}

			$isEmptyValue = $this->pdfJsonMode() && $dbValue == "''" || !$this->pdfJsonMode() && $dbValue == "";

			if( in_array( $printFields[$i], $fieldsToHideIfEmpty ) )
			{
				if( $this->printGridLayout != gltHORIZONTAL && $isEmptyValue )
					$this->hideField( $printFields[$i], $this->recId );
				else if( $this->printGridLayout == gltHORIZONTAL && !$isEmptyValue )
				{
					$this->_notEmptyFieldColumns[ $printFields[$i] ] = true;
				}
			}

			$this->setRowClassNames($record, $printFields[$i]);
		}

		$this->spreadRowStyles($data, $row, $record);
		$this->setRowCssRules($record);

		$record["grid_recordheader"] = true;
		$record["grid_vrecord"] = true;

		if( $this->pSet->hasMap() )
			$this->addBigGoogleMapMarkers( $data, $keys );

		return $record;
	}

	/**
	 * @param Array columns
	 */
	protected function showGridHeader( $columns )
	{

		$this->pageBody[ "record_header" ] = array("data"=>array());
		$this->pageBody[ "record_footer" ] = array("data"=>array());

		for($i = 0; $i < $columns; $i++)
		{
			$rheader = array();
			$rfooter = array();
			if($i < $columns - 1)
			{
				$rheader["endrecordheader_block"] = true;
				$rfooter["endrecordheader_block"] = true;
			}
			$this->pageBody[ "record_header" ]["data"][] = $rheader;
			$this->pageBody[ "record_footer" ]["data"][] = $rfooter;
		}
		$this->pageBody[ "grid_header" ] = true;
		$this->pageBody[ "grid_footer" ] = true;
	}

	protected function manyRecordsInRow() {
		return $this->printGridLayout == gltVERTICAL || $this->recsPerRowPrint != 1;
	}

	/**
	 *
	 */
	protected function fillGridPage()
	{
		$this->pageBody["grid_row"] = array();
		$this->pageBody["grid_row"]["data"] = array();
		$recno = 0;

		$recordsPrinted = 0;

		$row = array();
		while( $data = $this->readNextRecord() )
		{
			RunnerContext::pushRecordContext( $data, $this );

			$row["details"] = array();
			//	create new row
			$row = array();
			$row["grid_record"] = array();
			$row["grid_record"]["data"] = array();
			$row["details_record"] = array();
			$row["details_record"]["data"] = array();

			//	add the record to the row
			if( $this->manyRecordsInRow() )
			{
				$builtrow = $this->buildGridRecord( $data, $row );

				foreach( $this->detailTables as $dt ) {
					$assignmentMethod = $this->buildDetailsXtMethod($dt, $data);
					if ( $assignmentMethod ) {
						$this->showItemType("details_preview");
						$builtrow["details_" . $dt] = true;
						$builtrow["displayDetailTable_" . $dt] = $assignmentMethod;
					}
				}

				$row["grid_record"]["data"][] = $builtrow;
			}
			else
			{
				// simplify row/record structure - put everything to $row
				$builtrow = $this->buildGridRecord( $data, $row );
				foreach( $builtrow as $index => $value)
				{
					$row[ $index ] = $value;
				}
				$row["grid_record"] = true;

				foreach( $this->detailTables as $dt ) {
					$assignmentMethod = $this->buildDetailsXtMethod($dt, $data);
					if ( $assignmentMethod ) {
						$this->showItemType("details_preview");
						$row["details_" . $dt] = true;
						$row["displayDetailTable_" . $dt] = $assignmentMethod;
					}
				}
			}

			RunnerContext::pop();

			// hide group fields
			if ( $prevData )
			{
				$grFields = $this->pSet->getGroupFields();
				foreach( $grFields as $grF )
				{
					if ( $data[ $grF ] != $prevData[ $grF ] )
						break;

					foreach ( $this->pSet->getFieldItems( $grF ) as $fItemId )
					{
						$this->hideItem( $fItemId, $builtrow['recId'] );
					}
				}
			}
			$prevData = $data;

			//	finalize row if needed
			++$recno;
			$this->pageBody["grid_row"]["data"][] = $row;

			if( $this->splitByRecords && $recno >= $this->splitByRecords )
				break;
		}
		$this->showGridHeader( $this->recsPerRowPrint < $recno ? $this->recsPerRowPrint : $recno);
		$this->pageBody["pageno"] = $this->pageNo;

		if ( $this->allPagesMode )
		{
			$this->xt->assign( "print_pages", true );
			foreach ( $this->pSet->printPagesLabelsData() as $itemId => $mLString )
			{
				$label = str_replace( "%current%", $this->pageNo, GetMLString( $mLString ) );
				$this->pageBody[ "print_pages_label".$itemId ] = $label;
			}
		}
	}

	/**
	 *
	 */
	public function doCommonAssignments()
	{
		$this->xt->assign( "pagecount", $this->pageNo );

		$this->body['begin'].= GetBaseScriptsForPage( false );

		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this );

		if ( $this->allPagesMode && !!$this->body["data"] )
		{
			// update %total% value
			$total = count( $this->body["data"] );
			foreach ( $this->pSet->printPagesLabelsData() as $itemId => $mLString )
			{
				foreach( $this->body["data"] as $idx => $pageBody )
				{
					$this->body["data"][$idx][ "print_pages_label".$itemId ] = str_replace( "%total%", $total, $pageBody[ "print_pages_label".$itemId ] );
				}
			}
		}

		if( $this->mode == PRINT_PDFJSON ) {
			$pdfBody = &$this->body;
			unset( $pdfBody["begin"] );
			unset( $pdfBody["end"] );
			for( $p = 0; $pdfBody["data"] && $p < count( $pdfBody["data"] ); ++$p ) {
				unset( $pdfBody["data"][$p]["begin"] );
				unset( $pdfBody["data"][$p]["end"] );
			}
			$this->xt->assignbyref('body', $pdfBody );
			
			$this->xt->assign( "pdfFonts", my_json_encode( getPdfFonts() ) );
		} else
			$this->xt->assignbyref('body', $this->body);

		$this->xt->assign("grid_block", true);
		$this->xt->assign("page_number",true);


		//	display Prepare for printing or PDF buttons
		if( !$this->splitByRecords || $this->pSet->isPrinterPagePDF() )
		{
			$this->xt->assign("printbuttons", true);
		}

		$this->xt->assign("printheader",true);

		if ( count($this->gridTabs) > 1 )
		{
			$curTabId = $this->getCurrentTabId();
			$this->xt->assign("printtabheader",true);
			$this->xt->assign("printtabheader_text", $this->getTabTitle($curTabId));
		}
		foreach( $this->pSet->getPrinterFields() as $f )
		{
			$gf = GoodFieldName($f);
			$this->xt->assign( $gf . "_fieldheadercolumn", true );
			$this->xt->assign( $gf . "_fieldheader", true);
			$this->xt->assign( $gf . "_class", $this->fieldClass( $f ));
			$this->xt->assign( $gf . "_align", $this->fieldAlign( $f ));
			$this->xt->assign( $gf . "_fieldcolumn", true );
			$this->xt->assign( $gf . "_fieldfootercolumn", true );
		}

		if( $this->pSet->hasMap() ) {
			foreach( $this->googleMapCfg['mainMapIds'] as $mapId ) {
				$this->xt->assign_event( $mapId, $this, 'createMap', array('mapId' => $mapId ) );
			}
		}
	}

	function createMap( &$params )
	{
		$provider = getMapProvider();
		
		$mapId = $params['mapId'];

		$apiKey = $this->googleMapCfg["APIcode"];
		$zoom = $this->googleMapCfg['mapsData'][ $mapId ]['zoom'];
		$markers = $this->googleMapCfg['mapsData'][ $mapId ]['markers'];
		//$icon = $markers[0]['mapIcon'];

		$masData = $this->pSet->mapsData();

		// designer width
		$width = $masData[ $mapId ]['width'];
		if( !$width )
			$width = $this->googleMapCfg['mapsData'][ $mapId ]['width'] ? $this->googleMapCfg['mapsData'][ $mapId ]['width'] : 400;

		// designer height
		$height = $masData[ $mapId ]['height'];
		if( !$height )
			$height = $this->googleMapCfg['mapsData'][ $mapId ]['height'] ?  $this->googleMapCfg['mapsData'][ $mapId ]['height'] : 300;

		$locations = array();
		foreach( $markers as $marker )
		{
			if( $marker['lat'] == "" && $marker['lng'] == "" )
			{
				if( $provider == GOOGLE_MAPS )
					$locations[] = $marker['address'];
				else
				{
					$locationByAddress = getLatLngByAddr( $marker['address'] );
					$locations[] = $locationByAddress['lat'].','.$locationByAddress['lng'];
				}
			}
			else
				$locations[] = $marker['lat'].','.$marker['lng'];
		}

		switch( $provider )
		{
			case GOOGLE_MAPS:
				$src = 'https://maps.googleapis.com/maps/api/staticmap?size='.$width.'x'.$height.'&key='.$apiKey.'&';

				if( !( $markers ) )
					$src.= "center=0,0&zoom=".( $zoom ? $zoom : 5 );
				else
					$src.= ( $zoom ? "zoom=".$zoom."&" : "" )."markers=".rawurlencode( implode( '|', $locations ) );
			break;
			case OPEN_STREET_MAPS:
				$src = 'https://staticmap.openstreetmap.de/staticmap.php?size='.$width.'x'.$height.'&';

				if( !( $markers ) )
					$src.= "center=0,0&zoom=".( $zoom ? $zoom : 3 );
				else
					$src.= "center=".$locations[0]."&zoom=".( $zoom ? $zoom : 3 )."&markers=".rawurlencode( implode( '|', $locations ) );
			break;
			case BING_MAPS:
				if( !( $markers ) )
					$src = 'https://dev.virtualearth.net/REST/v1/Imagery/Map/Road/0,0/'.( $zoom ? $zoom : 5 )
						.'/?key='.$apiKey.'&mapSize='.$width.','.$height;
				else
				{
					// You can specify up to 18 pushpins within a URL
					$mParams = 'pp='.rawurlencode( implode( '&pp=',  array_slice( $locations, 0, 17 ) ));
					$src = 'https://dev.virtualearth.net/REST/v1/Imagery/Map/Road?'.$mParams
						.'&key='.$apiKey.'&mapSize='.$width.','.$height;
					if( $zoom )
						$src.= '&zoomLevel='.$zoom;
				}
			break;
			case HERE_MAPS:
				$src = 'https://image.maps.ls.hereapi.com/mia/1.6/mapview?'
					.'apiKey='.$apiKey
					.'&w='.$width
					.'&h='.$height
					.'&poi='.rawurlencode( implode( ',', $locations ) );

				if( $zoom )
					$src.= '&z='.$zoom;

			case MAPQUEST_MAPS:
				$src = 'https://www.mapquestapi.com/staticmap/v5/map?'
					.'key='.$apiKey
					.'&locations='.rawurlencode( implode( '||', $locations ) )
					.'&size='.$width.','.$height;

				if( $zoom )
					$src.= '&zoom='.$zoom;		
				
			break;
			default:
				$src = '';
		}

		if( $this->pdfJsonMode() )
		{
			$content = myurl_get_contents_binary( $src );

			$imageType = SupposeImageType( $content );
			if( $imageType == "image/jpeg" || $imageType == "image/png" )
			{
				echo '{
					image: "' . jsreplace( 'data:'. $imageType . ';base64,' . base64_bin2str( $content ) ) . '",
					width: '. $width .',
					height:'. $height .',
				}';
				return;
			}

			echo '""';
			return;
		}

		echo '<img id="'.$params['mapId'].'" src="'.$src.'">';
	}

	/**
	 *
	 */
	protected function prepareJsSettings()
	{
		if( isRTL() )
			$this->jsSettings['tableSettings'][ $this->tName ]['isRTL'] = true;

		if( $this->pSet->isPrinterPagePDF() )
			$this->jsSettings['tableSettings'][ $this->tName ]['printerPagePDF'] = true;

		$this->jsSettings['tableSettings'][ $this->tName ]['printerPageOrientation'] = $this->pSet->getPrinterPageOrientation();
		$this->jsSettings['tableSettings'][ $this->tName ]['printerPageScale'] = $this->pSet->getPrinterPageScale();
		$this->jsSettings['tableSettings'][ $this->tName ]['isPrinterPageFitToPage'] = $this->pSet->isPrinterPageFitToPage();
		$this->jsSettings['tableSettings'][ $this->tName ]['printerSplitRecords'] = $this->pSet->getPrinterSplitRecords();
		$this->jsSettings['tableSettings'][ $this->tName ]['printerPDFSplitRecords'] = $this->pSet->getPrinterPDFSplitRecords();

		if( $this->printGridLayout )
			$this->jsSettings['tableSettings'][$this->tName]['printGridLayout'] = $this->printGridLayout;

		if( $this->showHideFieldsFeatureEnabled() )
			$this->jsSettings['tableSettings'][ $this->tName ]['isAllowShowHideFields'] = true;
		$this->prepareColumnOrderSettings();
	}

	protected function reorderFieldsFeatureEnabled() {
		return parent::reorderFieldsFeatureEnabled() && $this->pSet->listColumnsOrderOnPrint();
	}
	
	protected function prepareColumnOrderSettings()
	{
		if( $this->reorderFieldsFeatureEnabled() && $this->printGridLayout == gltHORIZONTAL && $this->recsPerRowPrint == 1 )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['isAllowFieldsReordering'] = true;

			include_once getabspath("classes/paramsLogger.php");
			$logger = new paramsLogger( $this->tName, FORDER_PARAMS_TYPE );

			$columnOrder = $logger->getData();
			if( $columnOrder )
				$this->jsSettings['tableSettings'][ $this->tName ]['columnOrder'] = $columnOrder;
		}
	}

	/**
	 *
	 */
	public function displayPrintPage()
	{
		$templateFile = $this->templatefile;
		if($this->eventsObject->exists("BeforeShowPrint"))
			$this->eventsObject->BeforeShowPrint($this->xt, $templateFile, $this);

		if( $this->mode == PRINT_PDFJSON )
		{
			$this->preparePDFBackground();
			$this->xt->assign( "standalone_page", true );
			$this->xt->displayJSON($this->templatefile);
			return;
		}

		$this->display( $this->templatefile );
	}


	public function doFirstPageAssignments()
	{
		$this->hideItemType("details_preview");

		foreach( $this->googleMapCfg['mainMapIds'] as $mapId ) {
			$this->pageBody[ "map_".$mapId ] = true;
		}

		if( $this->pSet->isPrinterPagePDF() ) {
			$this->pageBody["pdflink_block"] = true;
		} else {
			$this->hideItemType("print_pdf");
		}
	}

	/**
	 * Show the field on the page
	 * @param String fieldName
	 */
	function showField($fieldName)
	{
		$gf = GoodFieldName($fieldName);
		foreach ($this->body["data"] as $key => $value)
		{
			$this->body["data"][$key][ $gf . "_fieldheadercolumn"] = true;
			$this->body["data"][$key][ $gf . "_fieldcolumn"] = true;
			$this->body["data"][$key][ $gf . "_fieldfootercolumn"] = true;
		}
	}

	protected function addDetailsCss() {
		foreach( $this->detailTables as $dt )
		{
			$dtName = GetTableByShort( $dt );

			$tSet = $this->pSet->getTable( $dtName );
			$tType = $tSet->getTableType();
			$pageType = $tType == PAGE_REPORT ? PAGE_RPRINT : PAGE_PRINT;

			$pageName = $this->pSet->detailsPageId( $dtName );
			$dpSet = new ProjectSettings( $dtName, $pageType, $pageName );

			$pageLayout = GetPageLayout( $dtName, $dpSet->pageName() );
			$templatefile = GetTemplateName( GetTableURL( $dtName ), $dpSet->pageName() );

			$cssFiles = $pageLayout->getCSSFiles( isRTL(), isPageLayoutMobile( $templatefile ), false );
			$this->AddCSSFile( $cssFiles );

			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer(new ProjectSettings($dtName, $pageType), $pageType);
			$viewControls->addControlsJSAndCSS();
			$this->AddCSSFile( $viewControls->includes_css );
		}
	}

	/**
	 * @param Array data
	 * @return Array
	 */
	protected function buildDetails( $data )
	{
		$details = array();
		foreach( $this->detailTables as $dt )
		{
			$assignmentMethod = $this->buildDetailsXtMethod($dt,  $data);
			if ( $assignmentMethod )
				$details[] = array( "details" => $assignmentMethod );
		}

		return $details;
	}

	protected function buildDetailsXtMethod($dt, $data)
	{
		$dTable = GetTableByShort( $dt );
		$mkeys = $this->pSet->getMasterKeysByDetailTable( $dTable );
		if( !$mkeys )
			return false;

		$tSet = $this->pSet->getTable( $dTable );
		$tType = $tSet->getTableType();

		$dtableArrParams = array();
		$dtableArrParams = array();
		$dtableArrParams["id"] = $this->genId() + 1;	//	it may rewrite pageData
		$dtableArrParams["xt"] = new Xtempl();
		$dtableArrParams["tName"] = $dTable;
		$dtableArrParams["multipleDetails"] = count($this->detailTables) > 1;

		$dtableArrParams["pageName"] = $this->pSet->detailsPageId( $dTable );
		
		$dtableArrParams["masterTable"] = $this->tName;
		$dtableArrParams["masterKeysReq"] = array();
		$i = 0;
		foreach( $mkeys as $mkey )
		{
			$i++;
			$dtableArrParams["masterKeysReq"][$i] = $data[$mkey] ;
		}

		if ( $tType == PAGE_REPORT )
		{
			$dtableArrParams["pageType"] = PAGE_RPRINT;
			$dtableArrParams["isDetail"] = true;
		}
		else
		{
			$dtableArrParams["pageType"] = PAGE_PRINT;
		}

		if( $this->pdfJsonMode() )
			$dtableArrParams["mode"] = PRINT_PDFJSON;

		return XTempl::create_method_assignment( "showDetails", $this, $dtableArrParams );
	}

	/**
	 * @param Array params
	 */
	public function showDetails( $params )
	{
		if ( $params["pageType"] == PAGE_RPRINT )
		{
			$detailsObject = new ReportPrintPage( $params );
			$detailsObject->init();
			$detailsObject->processDetailPrint();
		}
		else
		{
			$detailsObject = new PrintPage_Details( $params );
			$detailsObject->init();
			$detailsObject->process();

			$this->includes_js = array_merge($this->includes_js, $detailsObject->includes_js);

			$this->viewControlsMap["dViewControlsMap"][ $params["tName"] ] = $detailsObject->viewControlsMap;
			$this->viewControlsMap["dViewControlsMap"][ $params["tName"] ]["id"] = $detailsObject->id;
		}
	}

	protected function getColumnsToHide()
	{
		return $this->getCombinedHiddenColumns();
	}

	function fieldClass($f) {
		$ret = parent::fieldClass($f);
		if( $ret && $this->printGridLayout == gltVERTICAL || $this->printGridLayout == gltCOLUMNS )
			$ret = '';
		return $ret;
	}

	function getDataSourceFilterCriteria( $ignoreFilterField = "" )
	{
		$filter = parent::getDataSourceFilterCriteria();
		$selectedRecords = $this->getSelectedRecords();
		if( $selectedRecords !== null ) {

			$keyFields = $this->pSet->getTableKeys();
			$recConditions = array();
			foreach( $selectedRecords as $keys ) {
				$recConditions[] = DataCondition::FieldsEqual( $keyFields, $keys );
			}
			$filter = DataCondition::_And( array(
				$filter,
				DataCondition::_Or( $recConditions )
			));

		}
		return $filter;
	}

	function callBeforeQueryEvent( $dc ) {
		if( !$this->eventsObject->exists("BeforeQueryPrint") ) {
			return;
		}
		$prep = $this->dataSource->prepareSQL( $dc );
		$where = $prep["where"];
		$order = $prep["order"];
		$sql = $prep["sql"];
		$this->eventsObject->BeforeQueryPrint($sql, $where, $order, $this);

		if( $sql != $prep["sql"] )
			$this->dataSource->overrideSQL( $dc, $sql );
		else {
			if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
			if( $order != $prep["order"] ) 
				$this->dataSource->overrideOrder( $dc, $order );
		}
	} 

	function calculateRecordCount()
	{
		$this->queryCommand = $this->getSubsetDataCommand();
		$this->callBeforeQueryEvent( $this->queryCommand );
		$this->totalRowCount = $this->dataSource->getCount( $this->queryCommand );

	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {

		$dc = parent::getSubsetDataCommand( $ignoreFilterField );
		
		$this->reoderCommandForReoderedRows( $this->getListPSet(), $dc );
		
		if( !$this->allPagesMode ) {
			$dc->reccount = $this->queryPageSize;
			$dc->startRecord = $this->queryPageSize * ( $this->queryPageNo - 1 );
		}
		return $dc;
	}


	function pdfJsonMode() {
		return $this->mode == PRINT_PDFJSON;
	}

	function &findRecordAssigns( $recordId ) {
		return $this->recordsRenderData[ $recordId ];
	}

	public function getSecurityCondition() {
		return Security::SelectCondition( "P", $this->pSet );
	}
	
	protected function getTotalDataCommand() {
		return parent::getSubsetDataCommand();
	}
}
?>