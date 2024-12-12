<?php
$tdatav_available_reservations = array();
$tdatav_available_reservations[".searchableFields"] = array();
$tdatav_available_reservations[".ShortName"] = "v_available_reservations";
$tdatav_available_reservations[".OwnerID"] = "";
$tdatav_available_reservations[".OriginalTable"] = "v_available_reservations";


$tdatav_available_reservations[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatav_available_reservations[".originalPagesByType"] = $tdatav_available_reservations[".pagesByType"];
$tdatav_available_reservations[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatav_available_reservations[".originalPages"] = $tdatav_available_reservations[".pages"];
$tdatav_available_reservations[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatav_available_reservations[".originalDefaultPages"] = $tdatav_available_reservations[".defaultPages"];

//	field labels
$fieldLabelsv_available_reservations = array();
$fieldToolTipsv_available_reservations = array();
$pageTitlesv_available_reservations = array();
$placeHoldersv_available_reservations = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsv_available_reservations["Greek"] = array();
	$fieldToolTipsv_available_reservations["Greek"] = array();
	$placeHoldersv_available_reservations["Greek"] = array();
	$pageTitlesv_available_reservations["Greek"] = array();
	$fieldLabelsv_available_reservations["Greek"]["rsvDate"] = "Ημερομηνία";
	$fieldToolTipsv_available_reservations["Greek"]["rsvDate"] = "";
	$placeHoldersv_available_reservations["Greek"]["rsvDate"] = "";
	$fieldLabelsv_available_reservations["Greek"]["rsvTime"] = "Ώρα Ραντεβού";
	$fieldToolTipsv_available_reservations["Greek"]["rsvTime"] = "";
	$placeHoldersv_available_reservations["Greek"]["rsvTime"] = "";
	$fieldLabelsv_available_reservations["Greek"]["locationId"] = "Κατάστημα";
	$fieldToolTipsv_available_reservations["Greek"]["locationId"] = "";
	$placeHoldersv_available_reservations["Greek"]["locationId"] = "";
	$fieldLabelsv_available_reservations["Greek"]["reservationCount"] = "Κρατήσεις";
	$fieldToolTipsv_available_reservations["Greek"]["reservationCount"] = "";
	$placeHoldersv_available_reservations["Greek"]["reservationCount"] = "";
	$fieldLabelsv_available_reservations["Greek"]["availableReservations"] = "Διαθέσιμα Ραντεβού";
	$fieldToolTipsv_available_reservations["Greek"]["availableReservations"] = "";
	$placeHoldersv_available_reservations["Greek"]["availableReservations"] = "";
	if (count($fieldToolTipsv_available_reservations["Greek"]))
		$tdatav_available_reservations[".isUseToolTips"] = true;
}


	$tdatav_available_reservations[".NCSearch"] = true;



$tdatav_available_reservations[".shortTableName"] = "v_available_reservations";
$tdatav_available_reservations[".nSecOptions"] = 0;

$tdatav_available_reservations[".mainTableOwnerID"] = "";
$tdatav_available_reservations[".entityType"] = 0;
$tdatav_available_reservations[".connId"] = "figura_at_10_101_125_22";


$tdatav_available_reservations[".strOriginalTableName"] = "v_available_reservations";

	



$tdatav_available_reservations[".showAddInPopup"] = false;

$tdatav_available_reservations[".showEditInPopup"] = false;

$tdatav_available_reservations[".showViewInPopup"] = false;

$tdatav_available_reservations[".listAjax"] = false;
//	temporary
//$tdatav_available_reservations[".listAjax"] = false;

	$tdatav_available_reservations[".audit"] = false;

	$tdatav_available_reservations[".locking"] = false;


$pages = $tdatav_available_reservations[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_available_reservations[".edit"] = true;
	$tdatav_available_reservations[".afterEditAction"] = 1;
	$tdatav_available_reservations[".closePopupAfterEdit"] = 1;
	$tdatav_available_reservations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_available_reservations[".add"] = true;
$tdatav_available_reservations[".afterAddAction"] = 1;
$tdatav_available_reservations[".closePopupAfterAdd"] = 1;
$tdatav_available_reservations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_available_reservations[".list"] = true;
}



$tdatav_available_reservations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_available_reservations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_available_reservations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_available_reservations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_available_reservations[".printFriendly"] = true;
}



$tdatav_available_reservations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_available_reservations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_available_reservations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_available_reservations[".isUseAjaxSuggest"] = false;



						

$tdatav_available_reservations[".ajaxCodeSnippetAdded"] = false;

$tdatav_available_reservations[".buttonsAdded"] = false;

$tdatav_available_reservations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_available_reservations[".isUseTimeForSearch"] = false;


$tdatav_available_reservations[".badgeColor"] = "CD5C5C";


$tdatav_available_reservations[".allSearchFields"] = array();
$tdatav_available_reservations[".filterFields"] = array();
$tdatav_available_reservations[".requiredSearchFields"] = array();

$tdatav_available_reservations[".googleLikeFields"] = array();
$tdatav_available_reservations[".googleLikeFields"][] = "rsvDate";
$tdatav_available_reservations[".googleLikeFields"][] = "rsvTime";
$tdatav_available_reservations[".googleLikeFields"][] = "locationId";
$tdatav_available_reservations[".googleLikeFields"][] = "reservationCount";
$tdatav_available_reservations[".googleLikeFields"][] = "availableReservations";



$tdatav_available_reservations[".tableType"] = "list";

$tdatav_available_reservations[".printerPageOrientation"] = 0;
$tdatav_available_reservations[".nPrinterPageScale"] = 100;

$tdatav_available_reservations[".nPrinterSplitRecords"] = 40;

$tdatav_available_reservations[".geocodingEnabled"] = false;










$tdatav_available_reservations[".pageSize"] = 50;

$tdatav_available_reservations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_available_reservations[".strOrderBy"] = $tstrOrderBy;

$tdatav_available_reservations[".orderindexes"] = array();


$tdatav_available_reservations[".sqlHead"] = "SELECT rsvDate,  	rsvTime,  	locationId,  	reservationCount,  	availableReservations";
$tdatav_available_reservations[".sqlFrom"] = "FROM v_available_reservations";
$tdatav_available_reservations[".sqlWhereExpr"] = "";
$tdatav_available_reservations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_available_reservations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_available_reservations[".arrGroupsPerPage"] = $arrGPP;

$tdatav_available_reservations[".highlightSearchResults"] = true;

$tableKeysv_available_reservations = array();
$tableKeysv_available_reservations[] = "rsvDate";
$tableKeysv_available_reservations[] = "rsvTime";
$tableKeysv_available_reservations[] = "locationId";
$tdatav_available_reservations[".Keys"] = $tableKeysv_available_reservations;


$tdatav_available_reservations[".hideMobileList"] = array();




//	rsvDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rsvDate";
	$fdata["GoodName"] = "rsvDate";
	$fdata["ownerTable"] = "v_available_reservations";
	$fdata["Label"] = GetFieldLabel("v_available_reservations","rsvDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "rsvDate";

		$fdata["sourceSingle"] = "rsvDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rsvDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "locationId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 5;

	

	
	
//end of Filters settings


	$tdatav_available_reservations["rsvDate"] = $fdata;
		$tdatav_available_reservations[".searchableFields"][] = "rsvDate";
//	rsvTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rsvTime";
	$fdata["GoodName"] = "rsvTime";
	$fdata["ownerTable"] = "v_available_reservations";
	$fdata["Label"] = GetFieldLabel("v_available_reservations","rsvTime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rsvTime";

		$fdata["sourceSingle"] = "rsvTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rsvTime";

	
	
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


	$tdatav_available_reservations["rsvTime"] = $fdata;
		$tdatav_available_reservations[".searchableFields"][] = "rsvTime";
//	locationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "locationId";
	$fdata["GoodName"] = "locationId";
	$fdata["ownerTable"] = "v_available_reservations";
	$fdata["Label"] = GetFieldLabel("v_available_reservations","locationId");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "locations";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "location_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(name,' - ',Address)";

				$edata["LookupWhere"] = "active=1";


		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "locationId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatav_available_reservations["locationId"] = $fdata;
		$tdatav_available_reservations[".searchableFields"][] = "locationId";
//	reservationCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reservationCount";
	$fdata["GoodName"] = "reservationCount";
	$fdata["ownerTable"] = "v_available_reservations";
	$fdata["Label"] = GetFieldLabel("v_available_reservations","reservationCount");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "reservationCount";

		$fdata["sourceSingle"] = "reservationCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reservationCount";

	
	
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


	$tdatav_available_reservations["reservationCount"] = $fdata;
		$tdatav_available_reservations[".searchableFields"][] = "reservationCount";
//	availableReservations
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "availableReservations";
	$fdata["GoodName"] = "availableReservations";
	$fdata["ownerTable"] = "v_available_reservations";
	$fdata["Label"] = GetFieldLabel("v_available_reservations","availableReservations");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "availableReservations";

		$fdata["sourceSingle"] = "availableReservations";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "availableReservations";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "locationId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatav_available_reservations["availableReservations"] = $fdata;
		$tdatav_available_reservations[".searchableFields"][] = "availableReservations";


$tables_data["v_available_reservations"]=&$tdatav_available_reservations;
$field_labels["v_available_reservations"] = &$fieldLabelsv_available_reservations;
$fieldToolTips["v_available_reservations"] = &$fieldToolTipsv_available_reservations;
$placeHolders["v_available_reservations"] = &$placeHoldersv_available_reservations;
$page_titles["v_available_reservations"] = &$pageTitlesv_available_reservations;


changeTextControlsToDate( "v_available_reservations" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_available_reservations"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_available_reservations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_available_reservations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rsvDate,  	rsvTime,  	locationId,  	reservationCount,  	availableReservations";
$proto0["m_strFrom"] = "FROM v_available_reservations";
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
	"m_strName" => "rsvDate",
	"m_strTable" => "v_available_reservations",
	"m_srcTableName" => "v_available_reservations"
));

$proto6["m_sql"] = "rsvDate";
$proto6["m_srcTableName"] = "v_available_reservations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rsvTime",
	"m_strTable" => "v_available_reservations",
	"m_srcTableName" => "v_available_reservations"
));

$proto8["m_sql"] = "rsvTime";
$proto8["m_srcTableName"] = "v_available_reservations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "locationId",
	"m_strTable" => "v_available_reservations",
	"m_srcTableName" => "v_available_reservations"
));

$proto10["m_sql"] = "locationId";
$proto10["m_srcTableName"] = "v_available_reservations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reservationCount",
	"m_strTable" => "v_available_reservations",
	"m_srcTableName" => "v_available_reservations"
));

$proto12["m_sql"] = "reservationCount";
$proto12["m_srcTableName"] = "v_available_reservations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "availableReservations",
	"m_strTable" => "v_available_reservations",
	"m_srcTableName" => "v_available_reservations"
));

$proto14["m_sql"] = "availableReservations";
$proto14["m_srcTableName"] = "v_available_reservations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "v_available_reservations";
$proto17["m_srcTableName"] = "v_available_reservations";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "rsvDate";
$proto17["m_columns"][] = "rsvTime";
$proto17["m_columns"][] = "locationId";
$proto17["m_columns"][] = "reservationCount";
$proto17["m_columns"][] = "availableReservations";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "v_available_reservations";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "v_available_reservations";
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
$proto0["m_srcTableName"]="v_available_reservations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_available_reservations = createSqlQuery_v_available_reservations();


	
		;

					

$tdatav_available_reservations[".sqlquery"] = $queryData_v_available_reservations;



$tdatav_available_reservations[".hasEvents"] = false;

?>