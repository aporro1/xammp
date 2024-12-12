<?php
$tdatastatuses = array();
$tdatastatuses[".searchableFields"] = array();
$tdatastatuses[".ShortName"] = "statuses";
$tdatastatuses[".OwnerID"] = "";
$tdatastatuses[".OriginalTable"] = "statuses";


$tdatastatuses[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatastatuses[".originalPagesByType"] = $tdatastatuses[".pagesByType"];
$tdatastatuses[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatastatuses[".originalPages"] = $tdatastatuses[".pages"];
$tdatastatuses[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatastatuses[".originalDefaultPages"] = $tdatastatuses[".defaultPages"];

//	field labels
$fieldLabelsstatuses = array();
$fieldToolTipsstatuses = array();
$pageTitlesstatuses = array();
$placeHoldersstatuses = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsstatuses["Greek"] = array();
	$fieldToolTipsstatuses["Greek"] = array();
	$placeHoldersstatuses["Greek"] = array();
	$pageTitlesstatuses["Greek"] = array();
	$fieldLabelsstatuses["Greek"]["Status"] = "Status";
	$fieldToolTipsstatuses["Greek"]["Status"] = "";
	$placeHoldersstatuses["Greek"]["Status"] = "";
	$fieldLabelsstatuses["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipsstatuses["Greek"]["displayOrder"] = "";
	$placeHoldersstatuses["Greek"]["displayOrder"] = "";
	$fieldLabelsstatuses["Greek"]["forReception"] = "For Reception";
	$fieldToolTipsstatuses["Greek"]["forReception"] = "";
	$placeHoldersstatuses["Greek"]["forReception"] = "";
	if (count($fieldToolTipsstatuses["Greek"]))
		$tdatastatuses[".isUseToolTips"] = true;
}


	$tdatastatuses[".NCSearch"] = true;



$tdatastatuses[".shortTableName"] = "statuses";
$tdatastatuses[".nSecOptions"] = 0;

$tdatastatuses[".mainTableOwnerID"] = "";
$tdatastatuses[".entityType"] = 0;
$tdatastatuses[".connId"] = "figura_at_10_101_125_22";


$tdatastatuses[".strOriginalTableName"] = "statuses";

	



$tdatastatuses[".showAddInPopup"] = false;

$tdatastatuses[".showEditInPopup"] = false;

$tdatastatuses[".showViewInPopup"] = false;

$tdatastatuses[".listAjax"] = false;
//	temporary
//$tdatastatuses[".listAjax"] = false;

	$tdatastatuses[".audit"] = false;

	$tdatastatuses[".locking"] = false;


$pages = $tdatastatuses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastatuses[".edit"] = true;
	$tdatastatuses[".afterEditAction"] = 1;
	$tdatastatuses[".closePopupAfterEdit"] = 1;
	$tdatastatuses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastatuses[".add"] = true;
$tdatastatuses[".afterAddAction"] = 1;
$tdatastatuses[".closePopupAfterAdd"] = 1;
$tdatastatuses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastatuses[".list"] = true;
}



$tdatastatuses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastatuses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastatuses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastatuses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastatuses[".printFriendly"] = true;
}



$tdatastatuses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastatuses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastatuses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastatuses[".isUseAjaxSuggest"] = true;



						

$tdatastatuses[".ajaxCodeSnippetAdded"] = false;

$tdatastatuses[".buttonsAdded"] = false;

$tdatastatuses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatuses[".isUseTimeForSearch"] = false;


$tdatastatuses[".badgeColor"] = "778899";


$tdatastatuses[".allSearchFields"] = array();
$tdatastatuses[".filterFields"] = array();
$tdatastatuses[".requiredSearchFields"] = array();

$tdatastatuses[".googleLikeFields"] = array();
$tdatastatuses[".googleLikeFields"][] = "Status";
$tdatastatuses[".googleLikeFields"][] = "forReception";



$tdatastatuses[".tableType"] = "list";

$tdatastatuses[".printerPageOrientation"] = 0;
$tdatastatuses[".nPrinterPageScale"] = 100;

$tdatastatuses[".nPrinterSplitRecords"] = 40;

$tdatastatuses[".geocodingEnabled"] = false;










$tdatastatuses[".pageSize"] = 20;

$tdatastatuses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastatuses[".strOrderBy"] = $tstrOrderBy;

$tdatastatuses[".orderindexes"] = array();


$tdatastatuses[".sqlHead"] = "SELECT Status,  	displayOrder,  	forReception";
$tdatastatuses[".sqlFrom"] = "FROM statuses";
$tdatastatuses[".sqlWhereExpr"] = "";
$tdatastatuses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatuses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatuses[".arrGroupsPerPage"] = $arrGPP;

$tdatastatuses[".highlightSearchResults"] = true;

$tableKeysstatuses = array();
$tableKeysstatuses[] = "Status";
$tdatastatuses[".Keys"] = $tableKeysstatuses;


$tdatastatuses[".hideMobileList"] = array();




//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "statuses";
	$fdata["Label"] = GetFieldLabel("statuses","Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatastatuses["Status"] = $fdata;
		$tdatastatuses[".searchableFields"][] = "Status";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "statuses";
	$fdata["Label"] = GetFieldLabel("statuses","displayOrder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "displayOrder";

		$fdata["sourceSingle"] = "displayOrder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayOrder";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatastatuses["displayOrder"] = $fdata;
		$tdatastatuses[".searchableFields"][] = "displayOrder";
//	forReception
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "forReception";
	$fdata["GoodName"] = "forReception";
	$fdata["ownerTable"] = "statuses";
	$fdata["Label"] = GetFieldLabel("statuses","forReception");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "forReception";

		$fdata["sourceSingle"] = "forReception";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forReception";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatastatuses["forReception"] = $fdata;
		$tdatastatuses[".searchableFields"][] = "forReception";


$tables_data["statuses"]=&$tdatastatuses;
$field_labels["statuses"] = &$fieldLabelsstatuses;
$fieldToolTips["statuses"] = &$fieldToolTipsstatuses;
$placeHolders["statuses"] = &$placeHoldersstatuses;
$page_titles["statuses"] = &$pageTitlesstatuses;


changeTextControlsToDate( "statuses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["statuses"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["statuses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_statuses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Status,  	displayOrder,  	forReception";
$proto0["m_strFrom"] = "FROM statuses";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "statuses",
	"m_srcTableName" => "statuses"
));

$proto6["m_sql"] = "Status";
$proto6["m_srcTableName"] = "statuses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "statuses",
	"m_srcTableName" => "statuses"
));

$proto8["m_sql"] = "displayOrder";
$proto8["m_srcTableName"] = "statuses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "forReception",
	"m_strTable" => "statuses",
	"m_srcTableName" => "statuses"
));

$proto10["m_sql"] = "forReception";
$proto10["m_srcTableName"] = "statuses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "statuses";
$proto13["m_srcTableName"] = "statuses";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Status";
$proto13["m_columns"][] = "displayOrder";
$proto13["m_columns"][] = "forReception";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "statuses";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "statuses";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="statuses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_statuses = createSqlQuery_statuses();


	
		;

			

$tdatastatuses[".sqlquery"] = $queryData_statuses;



$tdatastatuses[".hasEvents"] = false;

?>