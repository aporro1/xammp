<?php
/**
 * Class for list page with mode simple
 */
class ListPage_Simple extends ListPage 
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */	
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);	
		$this->pSetEdit = new ProjectSettings($this->tName, PAGE_SEARCH);
	}
	
	/**
	 * Add common assign for simple mode on list page
	 */	
	function commonAssign() 
	{
		parent::commonAssign();

		$this->importLinksAttrs();

		$this->xt->assign("left_block", true);
		
		$this->addAssignTopLinks();
		
		$this->addAssignPageDetails();	
		
		$this->xt->assign("moreButtons", $this->exportAvailable() || $this->printAvailable() || $this->importAvailable() || $this->advSearchAvailable() );		
		$this->xt->assign("withSelected", $this->exportAvailable() || $this->printAvailable() || $this->inlineEditAvailable() || $this->deleteAvailable() );
		
		if( $this->exportAvailable() )
		{
			$this->xt->assign("exportselected_link", true);
			$this->xt->assign("exportselectedlink_span", $this->buttonShowHideStyle());
			$this->xt->assign("exportselectedlink_attrs", $this->getPrintExportLinkAttrs('export'));
		}

		if( $this->pSet->isAllowShowHideFields() )
		{
			$this->xt->assign("field_hide_panel", true);
		}
		
		if( $this->printAvailable() )
		{
			// new print panel
			if ( !$this->recordsOnPage )
			{
				$this->hideItemType("print_panel");
			}
			
			$this->xt->assign("print_friendly", true);
			$this->xt->assign("print_friendly_all", true);
			$this->xt->assign("print_recspp", $this->pSet->getPrinterSplitRecords() );

			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				$detTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
				$dPset = new ProjectSettings( $detTable );
				
				if( $dPset->hasPrintPage() && $this->permis[ $detTable ]["export"] )
				{
					$this->xt->assign("print_details", true);
					$this->xt->assign("print_details_" . GetTableURL( $detTable ), true);
				}
			}
					
			// end new print panel
			$this->xt->assign("printselected_link", true);
			$this->xt->assign("printselectedlink_attrs", $this->getPrintExportLinkAttrs('print'));
			$this->xt->assign("printselectedlink_span", $this->buttonShowHideStyle());
		}
		
		//advanced search and attr
		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");
				
		$this->xt->assign('menu_block', $this->isShowMenu() || $this->isAdminTable());
		
		if( $this->mobileTemplateMode() )
		{
			$this->xt->assign('morelinkmobile_block', true);
			$this->xt->assign('tableinfomobile_block', true);
		}
		
		//$this->setupBreadcrumbs();
		
	}

	
	/**
	 * set Grid User Params
	 */
	protected function setGridUserParams()
	{
		include_once getabspath("classes/paramsLogger.php");
		
		if( $this->pSet->isAllowShowHideFields() ) 
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['isAllowShowHideFields'] = true;
			$hideColumns = $this->getColumnsToHide();
			$this->jsSettings['tableSettings'][ $this->tName ]['hideColumns'] = $hideColumns;

			if( !$this->recordsOnPage )
				$this->hideItemType("columns_control");
			
			$fieldsClasses = array();

			foreach( $hideColumns as $d => $fields)
			{
				$dm = RunnerPage::deviceClassToMacro( $d );
				if( getMediaType() == 0 && $dm == 0 ||
					( getMediaType() == 2 || getMediaType() == 1 ) &&  $dm == 2  ) {
					foreach( $fields as $f )
					{
						$this->hideField( $f );
					}
				}
			}
		}

		if( $this->reorderFieldsFeatureEnabled() ) 
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['isAllowFieldsReordering'] = true;
			
			$logger = new paramsLogger( $this->tName, FORDER_PARAMS_TYPE );
			$columnOrder = $logger->getData();
			if( $columnOrder )
				$this->jsSettings['tableSettings'][ $this->tName ]['columnOrder'] = $columnOrder;
		}
	}

	function getBreadcrumbMenuId() {
		if( $this->isAdminTable() )
			return "adminarea";
		else
			return "main";
	}
	

	
	/**
	 * Add assign for top links, blocks and more button links
	 *
	 * @param boolean $exportPermis
	 */
	function addAssignTopLinks()
	{
		if( !$this->isDispGrid() && !$this->pSetEdit->ajaxBasedListPage() )
			return;
		
		if( $this->printAvailable() )
		{
			// print links and attrs
			$this->xt->assign("prints_block", true );
			$this->xt->assign("print_link", $this->recordsOnPage );
			$this->xt->assign("printlink_attrs", "id='print_".$this->id."' name='print_".$this->id."'".(!$this->recordsOnPage && $needShowLinkForAdd ? " style='display:none;'" : ""));
			//print all link and attr
			$this->xt->assign("printall_link", true );
			$this->xt->assign("printalllink_attrs","id='printAll_".$this->id."' name='printAll_".$this->id."'". (!$this->recordsOnPage ? " style='display:none;'" : ""));
		}
		
		if( $this->exportAvailable() )
		{
			//export link and attr
			$this->xt->assign("export_link", true );
			$this->xt->assign("exportlink_attrs", "id='export_".$this->id."'".(!$this->recordsOnPage ? " style='display:none;'" : ""));
							 
		}
	}
	
	/**
	 * Add assign for details_ found, page_of and recsperpage blocks
	 * If found 0 recs display this blocks hidden
	 */
	function addAssignPageDetails() 
	{
		$searchPermis = $this->permis[ $this->tName ]['search'];
		if( !$this->recordsOnPage && !$this->inlineAddAvailable() && !$this->showAddInPopup )
			return;
		
		$this->xt->assign("details_block", $searchPermis );
		
		$this->xt->assign("pages_block", $searchPermis);
		$this->xt->assign("pages_attrs","id=\"pageOf".$this->id."\" name=\"pageOf".$this->id."\"");
		
		if( $searchPermis && count($this->arrRecsPerPage) )
		{
			$this->xt->assign("recordspp_block", true);
			$this->createPerPage();
		}
	}
	
	/**
	 * Add common html code for simple mode on list page
	 */	
	function addCommonHtml() 
	{
		$this->body ["begin"] .= GetBaseScriptsForPage($this->isDisplayLoading); 
		
		//add parent common html code
		parent::addCommonHtml();
		
		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this);
	}
	
	function buildSearchPanel() {
		if( !$this->permis[ $this->tName ]["search"] ) {
			return;
		}
		
		$this->xt->enable_section("searchPanel");
		
		$params = array();
		$params['pageObj'] = &$this;
		$params['panelSearchFields'] = $this->panelSearchFields;
		$params['allSearchFields'] = array_diff( 
			$this->pSet->getAllSearchFields(), 
			$this->pSet->getDetailKeysByMasterTable( $this->masterTable ) 
		);
		
		$this->searchPanel = new SearchPanelSimple( $params );
		$this->searchPanel->buildSearchPanel();
	}

	/**
	 * If use resizable columns
	 * Prepare for resize main table
	 */
	function prepareForResizeColumns()
	{
		parent::prepareForResizeColumns();
		if(  !$this->isBootstrap() )
			return;
		include_once getabspath("classes/paramsLogger.php");	
		$logger = new paramsLogger( $this->tName, CRESIZE_PARAMS_TYPE );
		$columnsData = $logger->getData();
		if( $columnsData )
			$this->pageData[ "resizableColumnsData" ] = $columnsData;
	}
	
	protected function getColumnsToHide()  
	{
		return $this->getCombinedHiddenColumns();
	}

	/**
	 * Add data-brick=filterpanel container
	 */
	protected function prepareEmptyFPMarkup()
	{
		if( $this->listAjax && $this->pSetEdit->isSearchRequiredForFiltering() && !$this->isRequiredSearchRunning() && $this->isBootstrap() )
		{
			$this->xt->enable_section("filterPanel");
			$this->hideElement("filterpanel");
		}		
	}
}
?>