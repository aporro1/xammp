<?php
$tdataservicehours = array();
$tdataservicehours[".searchableFields"] = array();
$tdataservicehours[".ShortName"] = "servicehours";
$tdataservicehours[".OwnerID"] = "";
$tdataservicehours[".OriginalTable"] = "servicehours";


$tdataservicehours[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataservicehours[".originalPagesByType"] = $tdataservicehours[".pagesByType"];
$tdataservicehours[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataservicehours[".originalPages"] = $tdataservicehours[".pages"];
$tdataservicehours[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataservicehours[".originalDefaultPages"] = $tdataservicehours[".defaultPages"];

//	field labels
$fieldLabelsservicehours = array();
$fieldToolTipsservicehours = array();
$pageTitlesservicehours = array();
$placeHoldersservicehours = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsservicehours["Greek"] = array();
	$fieldToolTipsservicehours["Greek"] = array();
	$placeHoldersservicehours["Greek"] = array();
	$pageTitlesservicehours["Greek"] = array();
	$fieldLabelsservicehours["Greek"]["id"] = "Id";
	$fieldToolTipsservicehours["Greek"]["id"] = "";
	$placeHoldersservicehours["Greek"]["id"] = "";
	$fieldLabelsservicehours["Greek"]["timeFrom"] = "Time From";
	$fieldToolTipsservicehours["Greek"]["timeFrom"] = "";
	$placeHoldersservicehours["Greek"]["timeFrom"] = "";
	$fieldLabelsservicehours["Greek"]["timeTo"] = "Time To";
	$fieldToolTipsservicehours["Greek"]["timeTo"] = "";
	$placeHoldersservicehours["Greek"]["timeTo"] = "";
	$fieldLabelsservicehours["Greek"]["locationId"] = "Location Id";
	$fieldToolTipsservicehours["Greek"]["locationId"] = "";
	$placeHoldersservicehours["Greek"]["locationId"] = "";
	$fieldLabelsservicehours["Greek"]["active"] = "Active";
	$fieldToolTipsservicehours["Greek"]["active"] = "";
	$placeHoldersservicehours["Greek"]["active"] = "";
	$fieldLabelsservicehours["Greek"]["timeslot"] = "Timeslot";
	$fieldToolTipsservicehours["Greek"]["timeslot"] = "";
	$placeHoldersservicehours["Greek"]["timeslot"] = "";
	if (count($fieldToolTipsservicehours["Greek"]))
		$tdataservicehours[".isUseToolTips"] = true;
}


	$tdataservicehours[".NCSearch"] = true;



$tdataservicehours[".shortTableName"] = "servicehours";
$tdataservicehours[".nSecOptions"] = 0;

$tdataservicehours[".mainTableOwnerID"] = "";
$tdataservicehours[".entityType"] = 0;
$tdataservicehours[".connId"] = "figura_at_10_101_125_22";


$tdataservicehours[".strOriginalTableName"] = "servicehours";

	



$tdataservicehours[".showAddInPopup"] = false;

$tdataservicehours[".showEditInPopup"] = false;

$tdataservicehours[".showViewInPopup"] = false;

$tdataservicehours[".listAjax"] = false;
//	temporary
//$tdataservicehours[".listAjax"] = false;

	$tdataservicehours[".audit"] = false;

	$tdataservicehours[".locking"] = false;


$pages = $tdataservicehours[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataservicehours[".edit"] = true;
	$tdataservicehours[".afterEditAction"] = 1;
	$tdataservicehours[".closePopupAfterEdit"] = 1;
	$tdataservicehours[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataservicehours[".add"] = true;
$tdataservicehours[".afterAddAction"] = 1;
$tdataservicehours[".closePopupAfterAdd"] = 1;
$tdataservicehours[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataservicehours[".list"] = true;
}



$tdataservicehours[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataservicehours[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataservicehours[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataservicehours[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataservicehours[".printFriendly"] = true;
}



$tdataservicehours[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataservicehours[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataservicehours[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataservicehours[".isUseAjaxSuggest"] = true;



						

$tdataservicehours[".ajaxCodeSnippetAdded"] = false;

$tdataservicehours[".buttonsAdded"] = false;

$tdataservicehours[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicehours[".isUseTimeForSearch"] = false;


$tdataservicehours[".badgeColor"] = "DC143C";


$tdataservicehours[".allSearchFields"] = array();
$tdataservicehours[".filterFields"] = array();
$tdataservicehours[".requiredSearchFields"] = array();

$tdataservicehours[".googleLikeFields"] = array();
$tdataservicehours[".googleLikeFields"][] = "id";
$tdataservicehours[".googleLikeFields"][] = "timeFrom";
$tdataservicehours[".googleLikeFields"][] = "timeTo";
$tdataservicehours[".googleLikeFields"][] = "locationId";
$tdataservicehours[".googleLikeFields"][] = "active";
$tdataservicehours[".googleLikeFields"][] = "timeslot";



$tdataservicehours[".tableType"] = "list";

$tdataservicehours[".printerPageOrientation"] = 0;
$tdataservicehours[".nPrinterPageScale"] = 100;

$tdataservicehours[".nPrinterSplitRecords"] = 40;

$tdataservicehours[".geocodingEnabled"] = false;










$tdataservicehours[".pageSize"] = 20;

$tdataservicehours[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataservicehours[".strOrderBy"] = $tstrOrderBy;

$tdataservicehours[".orderindexes"] = array();


$tdataservicehours[".sqlHead"] = "SELECT id,  	timeFrom,  	timeTo,  	locationId,  	active,  	timeslot";
$tdataservicehours[".sqlFrom"] = "FROM servicehours";
$tdataservicehours[".sqlWhereExpr"] = "";
$tdataservicehours[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicehours[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicehours[".arrGroupsPerPage"] = $arrGPP;

$tdataservicehours[".highlightSearchResults"] = true;

$tableKeysservicehours = array();
$tableKeysservicehours[] = "id";
$tdataservicehours[".Keys"] = $tableKeysservicehours;


$tdataservicehours[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "servicehours";
	$fdata["Label"] = GetFieldLabel("servicehours","id");
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


	$tdataservicehours["id"] = $fdata;
		$tdataservicehours[".searchableFields"][] = "id";
//	timeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "timeFrom";
	$fdata["GoodName"] = "timeFrom";
	$fdata["ownerTable"] = "servicehours";
	$fdata["Label"] = GetFieldLabel("servicehours","timeFrom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "timeFrom";

		$fdata["sourceSingle"] = "timeFrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeFrom";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataservicehours["timeFrom"] = $fdata;
		$tdataservicehours[".searchableFields"][] = "timeFrom";
//	timeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "timeTo";
	$fdata["GoodName"] = "timeTo";
	$fdata["ownerTable"] = "servicehours";
	$fdata["Label"] = GetFieldLabel("servicehours","timeTo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "timeTo";

		$fdata["sourceSingle"] = "timeTo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeTo";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataservicehours["timeTo"] = $fdata;
		$tdataservicehours[".searchableFields"][] = "timeTo";
//	locationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "locationId";
	$fdata["GoodName"] = "locationId";
	$fdata["ownerTable"] = "servicehours";
	$fdata["Label"] = GetFieldLabel("servicehours","locationId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "locationId";

		$fdata["sourceSingle"] = "locationId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "locationId";

	
	
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


	$tdataservicehours["locationId"] = $fdata;
		$tdataservicehours[".searchableFields"][] = "locationId";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "servicehours";
	$fdata["Label"] = GetFieldLabel("servicehours","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdataservicehours["active"] = $fdata;
		$tdataservicehours[".searchableFields"][] = "active";
//	timeslot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "timeslot";
	$fdata["GoodName"] = "timeslot";
	$fdata["ownerTable"] = "servicehours";
	$fdata["Label"] = GetFieldLabel("servicehours","timeslot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "timeslot";

		$fdata["sourceSingle"] = "timeslot";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeslot";

	
	
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


	$tdataservicehours["timeslot"] = $fdata;
		$tdataservicehours[".searchableFields"][] = "timeslot";


$tables_data["servicehours"]=&$tdataservicehours;
$field_labels["servicehours"] = &$fieldLabelsservicehours;
$fieldToolTips["servicehours"] = &$fieldToolTipsservicehours;
$placeHolders["servicehours"] = &$placeHoldersservicehours;
$page_titles["servicehours"] = &$pageTitlesservicehours;


changeTextControlsToDate( "servicehours" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["servicehours"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["servicehours"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_servicehours()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	timeFrom,  	timeTo,  	locationId,  	active,  	timeslot";
$proto0["m_strFrom"] = "FROM servicehours";
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
	"m_strTable" => "servicehours",
	"m_srcTableName" => "servicehours"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "servicehours";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "timeFrom",
	"m_strTable" => "servicehours",
	"m_srcTableName" => "servicehours"
));

$proto8["m_sql"] = "timeFrom";
$proto8["m_srcTableName"] = "servicehours";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "timeTo",
	"m_strTable" => "servicehours",
	"m_srcTableName" => "servicehours"
));

$proto10["m_sql"] = "timeTo";
$proto10["m_srcTableName"] = "servicehours";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "locationId",
	"m_strTable" => "servicehours",
	"m_srcTableName" => "servicehours"
));

$proto12["m_sql"] = "locationId";
$proto12["m_srcTableName"] = "servicehours";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "servicehours",
	"m_srcTableName" => "servicehours"
));

$proto14["m_sql"] = "active";
$proto14["m_srcTableName"] = "servicehours";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "timeslot",
	"m_strTable" => "servicehours",
	"m_srcTableName" => "servicehours"
));

$proto16["m_sql"] = "timeslot";
$proto16["m_srcTableName"] = "servicehours";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "servicehours";
$proto19["m_srcTableName"] = "servicehours";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "timeFrom";
$proto19["m_columns"][] = "timeTo";
$proto19["m_columns"][] = "locationId";
$proto19["m_columns"][] = "active";
$proto19["m_columns"][] = "timeslot";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "servicehours";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "servicehours";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="servicehours";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_servicehours = createSqlQuery_servicehours();


	
		;

						

$tdataservicehours[".sqlquery"] = $queryData_servicehours;



$tdataservicehours[".hasEvents"] = false;

?>