<?php
$tdatastatushistory = array();
$tdatastatushistory[".searchableFields"] = array();
$tdatastatushistory[".ShortName"] = "statushistory";
$tdatastatushistory[".OwnerID"] = "";
$tdatastatushistory[".OriginalTable"] = "statushistory";


$tdatastatushistory[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastatushistory[".originalPagesByType"] = $tdatastatushistory[".pagesByType"];
$tdatastatushistory[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastatushistory[".originalPages"] = $tdatastatushistory[".pages"];
$tdatastatushistory[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastatushistory[".originalDefaultPages"] = $tdatastatushistory[".defaultPages"];

//	field labels
$fieldLabelsstatushistory = array();
$fieldToolTipsstatushistory = array();
$pageTitlesstatushistory = array();
$placeHoldersstatushistory = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsstatushistory["Greek"] = array();
	$fieldToolTipsstatushistory["Greek"] = array();
	$placeHoldersstatushistory["Greek"] = array();
	$pageTitlesstatushistory["Greek"] = array();
	$fieldLabelsstatushistory["Greek"]["id"] = "Id";
	$fieldToolTipsstatushistory["Greek"]["id"] = "";
	$placeHoldersstatushistory["Greek"]["id"] = "";
	$fieldLabelsstatushistory["Greek"]["reservationid"] = "ID Κράτησης";
	$fieldToolTipsstatushistory["Greek"]["reservationid"] = "";
	$placeHoldersstatushistory["Greek"]["reservationid"] = "";
	$fieldLabelsstatushistory["Greek"]["prevStatus"] = "Προηγούμενη Κατάσταση";
	$fieldToolTipsstatushistory["Greek"]["prevStatus"] = "";
	$placeHoldersstatushistory["Greek"]["prevStatus"] = "";
	$fieldLabelsstatushistory["Greek"]["curStatus"] = "Νέα Κατάσταση";
	$fieldToolTipsstatushistory["Greek"]["curStatus"] = "";
	$placeHoldersstatushistory["Greek"]["curStatus"] = "";
	$fieldLabelsstatushistory["Greek"]["updatedAt"] = "Ενημέρωση";
	$fieldToolTipsstatushistory["Greek"]["updatedAt"] = "";
	$placeHoldersstatushistory["Greek"]["updatedAt"] = "";
	$pageTitlesstatushistory["Greek"]["list"] = "Ιστορικό Μεταβολών";
	if (count($fieldToolTipsstatushistory["Greek"]))
		$tdatastatushistory[".isUseToolTips"] = true;
}


	$tdatastatushistory[".NCSearch"] = true;



$tdatastatushistory[".shortTableName"] = "statushistory";
$tdatastatushistory[".nSecOptions"] = 0;

$tdatastatushistory[".mainTableOwnerID"] = "";
$tdatastatushistory[".entityType"] = 0;
$tdatastatushistory[".connId"] = "figura_at_10_101_125_22";


$tdatastatushistory[".strOriginalTableName"] = "statushistory";

	



$tdatastatushistory[".showAddInPopup"] = false;

$tdatastatushistory[".showEditInPopup"] = false;

$tdatastatushistory[".showViewInPopup"] = false;

$tdatastatushistory[".listAjax"] = false;
//	temporary
//$tdatastatushistory[".listAjax"] = false;

	$tdatastatushistory[".audit"] = false;

	$tdatastatushistory[".locking"] = false;


$pages = $tdatastatushistory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastatushistory[".edit"] = true;
	$tdatastatushistory[".afterEditAction"] = 1;
	$tdatastatushistory[".closePopupAfterEdit"] = 1;
	$tdatastatushistory[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatastatushistory[".add"] = true;
$tdatastatushistory[".afterAddAction"] = 0;
$tdatastatushistory[".closePopupAfterAdd"] = 1;
$tdatastatushistory[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatastatushistory[".list"] = true;
}



$tdatastatushistory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastatushistory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastatushistory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastatushistory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastatushistory[".printFriendly"] = true;
}



$tdatastatushistory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastatushistory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastatushistory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastatushistory[".isUseAjaxSuggest"] = true;



																		

$tdatastatushistory[".ajaxCodeSnippetAdded"] = false;

$tdatastatushistory[".buttonsAdded"] = false;

$tdatastatushistory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatushistory[".isUseTimeForSearch"] = false;


$tdatastatushistory[".badgeColor"] = "6493ea";


$tdatastatushistory[".allSearchFields"] = array();
$tdatastatushistory[".filterFields"] = array();
$tdatastatushistory[".requiredSearchFields"] = array();

$tdatastatushistory[".googleLikeFields"] = array();
$tdatastatushistory[".googleLikeFields"][] = "id";
$tdatastatushistory[".googleLikeFields"][] = "reservationid";
$tdatastatushistory[".googleLikeFields"][] = "prevStatus";
$tdatastatushistory[".googleLikeFields"][] = "curStatus";
$tdatastatushistory[".googleLikeFields"][] = "updatedAt";



$tdatastatushistory[".tableType"] = "list";

$tdatastatushistory[".printerPageOrientation"] = 0;
$tdatastatushistory[".nPrinterPageScale"] = 100;

$tdatastatushistory[".nPrinterSplitRecords"] = 40;

$tdatastatushistory[".geocodingEnabled"] = false;





$tdatastatushistory[".isResizeColumns"] = true;





$tdatastatushistory[".pageSize"] = 20;

$tdatastatushistory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastatushistory[".strOrderBy"] = $tstrOrderBy;

$tdatastatushistory[".orderindexes"] = array();


$tdatastatushistory[".sqlHead"] = "SELECT id,  	reservationid,  	prevStatus,  	curStatus,  	updatedAt";
$tdatastatushistory[".sqlFrom"] = "FROM statushistory";
$tdatastatushistory[".sqlWhereExpr"] = "";
$tdatastatushistory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatushistory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatushistory[".arrGroupsPerPage"] = $arrGPP;

$tdatastatushistory[".highlightSearchResults"] = true;

$tableKeysstatushistory = array();
$tableKeysstatushistory[] = "id";
$tdatastatushistory[".Keys"] = $tableKeysstatushistory;


$tdatastatushistory[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "statushistory";
	$fdata["Label"] = GetFieldLabel("statushistory","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatastatushistory["id"] = $fdata;
		$tdatastatushistory[".searchableFields"][] = "id";
//	reservationid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reservationid";
	$fdata["GoodName"] = "reservationid";
	$fdata["ownerTable"] = "statushistory";
	$fdata["Label"] = GetFieldLabel("statushistory","reservationid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "reservationid";

		$fdata["sourceSingle"] = "reservationid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reservationid";

	
	
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


	$tdatastatushistory["reservationid"] = $fdata;
		$tdatastatushistory[".searchableFields"][] = "reservationid";
//	prevStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "prevStatus";
	$fdata["GoodName"] = "prevStatus";
	$fdata["ownerTable"] = "statushistory";
	$fdata["Label"] = GetFieldLabel("statushistory","prevStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "prevStatus";

		$fdata["sourceSingle"] = "prevStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prevStatus";

	
	
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


	$tdatastatushistory["prevStatus"] = $fdata;
		$tdatastatushistory[".searchableFields"][] = "prevStatus";
//	curStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "curStatus";
	$fdata["GoodName"] = "curStatus";
	$fdata["ownerTable"] = "statushistory";
	$fdata["Label"] = GetFieldLabel("statushistory","curStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "curStatus";

		$fdata["sourceSingle"] = "curStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "curStatus";

	
	
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


	$tdatastatushistory["curStatus"] = $fdata;
		$tdatastatushistory[".searchableFields"][] = "curStatus";
//	updatedAt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updatedAt";
	$fdata["GoodName"] = "updatedAt";
	$fdata["ownerTable"] = "statushistory";
	$fdata["Label"] = GetFieldLabel("statushistory","updatedAt");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updatedAt";

		$fdata["sourceSingle"] = "updatedAt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updatedAt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatastatushistory["updatedAt"] = $fdata;
		$tdatastatushistory[".searchableFields"][] = "updatedAt";


$tables_data["statushistory"]=&$tdatastatushistory;
$field_labels["statushistory"] = &$fieldLabelsstatushistory;
$fieldToolTips["statushistory"] = &$fieldToolTipsstatushistory;
$placeHolders["statushistory"] = &$placeHoldersstatushistory;
$page_titles["statushistory"] = &$pageTitlesstatushistory;


changeTextControlsToDate( "statushistory" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["statushistory"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["statushistory"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="reservations";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="reservations";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reservations";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["statushistory"][0] = $masterParams;
				$masterTablesData["statushistory"][0]["masterKeys"] = array();
	$masterTablesData["statushistory"][0]["masterKeys"][]="reservation_id";
				$masterTablesData["statushistory"][0]["detailKeys"] = array();
	$masterTablesData["statushistory"][0]["detailKeys"][]="reservationid";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="reservations";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="reservationsReception";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reservationsreception";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["statushistory"][1] = $masterParams;
				$masterTablesData["statushistory"][1]["masterKeys"] = array();
	$masterTablesData["statushistory"][1]["masterKeys"][]="reservation_id";
				$masterTablesData["statushistory"][1]["detailKeys"] = array();
	$masterTablesData["statushistory"][1]["detailKeys"][]="reservationid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_statushistory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	reservationid,  	prevStatus,  	curStatus,  	updatedAt";
$proto0["m_strFrom"] = "FROM statushistory";
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
	"m_strName" => "id",
	"m_strTable" => "statushistory",
	"m_srcTableName" => "statushistory"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "statushistory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "reservationid",
	"m_strTable" => "statushistory",
	"m_srcTableName" => "statushistory"
));

$proto8["m_sql"] = "reservationid";
$proto8["m_srcTableName"] = "statushistory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "prevStatus",
	"m_strTable" => "statushistory",
	"m_srcTableName" => "statushistory"
));

$proto10["m_sql"] = "prevStatus";
$proto10["m_srcTableName"] = "statushistory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "curStatus",
	"m_strTable" => "statushistory",
	"m_srcTableName" => "statushistory"
));

$proto12["m_sql"] = "curStatus";
$proto12["m_srcTableName"] = "statushistory";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updatedAt",
	"m_strTable" => "statushistory",
	"m_srcTableName" => "statushistory"
));

$proto14["m_sql"] = "updatedAt";
$proto14["m_srcTableName"] = "statushistory";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "statushistory";
$proto17["m_srcTableName"] = "statushistory";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "reservationid";
$proto17["m_columns"][] = "prevStatus";
$proto17["m_columns"][] = "curStatus";
$proto17["m_columns"][] = "updatedAt";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "statushistory";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "statushistory";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="statushistory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_statushistory = createSqlQuery_statushistory();


	
		;

					

$tdatastatushistory[".sqlquery"] = $queryData_statushistory;



$tdatastatushistory[".hasEvents"] = false;

?>