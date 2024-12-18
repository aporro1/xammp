<?php
class PrintPage_Details extends PrintPage
{	
	public $multipleDetails = false;
	
	
	/**
	 * @constructor
	 */
	function __construct(&$params = "")
	{
		parent::__construct($params);
		//details
	}

	/**
	 * Process the page 
	 */
	public function process()
	{
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessPrint") )
			$this->eventsObject->BeforeProcessPrint( $this );
			
		$this->commonAssign();
		$this->setMapParams();

		$this->splitByRecords = 0; // show all details in master list print page
		$this->allPagesMode = true;
		$this->queryCommand = $this->getSubsetDataCommand();
		$this->callBeforeQueryEvent( $this->queryCommand );
		$this->recordset = $this->dataSource->getList( $this->queryCommand );
		if( !$this->recordset ) {
			showError( $this->dataSource->lastError() );
		}

		//	hide details
		$this->doFirstPageAssignments();
		
		$this->fillGridPage();
		$this->fillRenderedData( $this->pageBody["grid_row"]["data"] );
		
		$this->assignTotals();

		$this->hideEmptyFields();
		
		$this->addCommonJs();
		
		$this->doCommonAssignments();
		$this->addCustomCss();
		$this->displayPrintPage();		
	}

	/**
	 *
	 */
	public function displayPrintPage() {
		if( !$this->fetchedRecordCount )
			return;

		$this->xt->bulk_assign( $this->pageBody );
		
		if( $this->pdfJsonMode() ) {
			$this->xt->assign( "body", true );
			$this->xt->assign( "embedded_grid", true );
			$this->xt->assign("embedded_page_title", true );
			
			$this->xt->load_templateJSON( $this->templatefile );
			echo  $this->xt->fetch_loadedJSON("body");
			return;
		}
			
		$this->xt->assign("grid_block", true);
		//	show table name only when several details are printed
		$this->xt->assign( "printheader", $this->multipleDetails );

		$this->xt->load_template($this->templatefile);

		echo '<div class="panel panel-info details-grid">
			<div class="panel-heading">
				<h4 class="panel-title">' . $this->getPageTitle( $this->pageName, GoodFieldName($this->tName) ) . '</h4>
			</div>
			<div class="panel-body">';
		echo $this->fetchForms( array( "grid" ) );	
		echo '</div>
		</div>';
	}
	
	/**
	 * returns where clause for active master-detail relationship
	 *
	 * @return string
	 */
	function getMasterTableSQLClause() 
	{
		$where = "";
		$dKeys = $this->pSet->getDetailKeysByMasterTable( $this->masterTable );
		if( !$dKeys )
			return "1=0";
		
		foreach( $dKeys as $i => $key ) 
		{
			if($i != 0) 
				$where.= " and ";
				
			if($this->cipherer && $this->cipherer->isEncryptionByPHPEnabled())
				$mValue = $this->cipherer->MakeDBValue( $key, $this->masterKeysReq[$i + 1] );
			else 
				$mValue = make_db_value( $key, $this->masterKeysReq[$i + 1], "", "", $this->tName);
				
			if(strlen($mValue) != 0)
				$where.= $this->getFieldSQLDecrypt( $key ) . "=" . $mValue;
			else 
				$where.= "1=0";
		}
		return $where;
	}

	protected function EOF()
	{

		$recordLimit = $this->pSet->getRecordsLimit();
		if ( $recordLimit && $this->fetchedRecordCount >= $recordLimit )
			return true;

		$this->readNextRecordInternal();
		if( $this->_eof )
			return true;

		return false;
	}

	
	protected function prepareColumnOrderSettings() 
	{
	}
}
?>