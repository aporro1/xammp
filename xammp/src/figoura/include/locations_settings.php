<?php
$tdatalocations = array();
$tdatalocations[".searchableFields"] = array();
$tdatalocations[".ShortName"] = "locations";
$tdatalocations[".OwnerID"] = "";
$tdatalocations[".OriginalTable"] = "locations";


$tdatalocations[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalocations[".originalPagesByType"] = $tdatalocations[".pagesByType"];
$tdatalocations[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalocations[".originalPages"] = $tdatalocations[".pages"];
$tdatalocations[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalocations[".originalDefaultPages"] = $tdatalocations[".defaultPages"];

//	field labels
$fieldLabelslocations = array();
$fieldToolTipslocations = array();
$pageTitleslocations = array();
$placeHolderslocations = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelslocations["Greek"] = array();
	$fieldToolTipslocations["Greek"] = array();
	$placeHolderslocations["Greek"] = array();
	$pageTitleslocations["Greek"] = array();
	$fieldLabelslocations["Greek"]["location_id"] = "id";
	$fieldToolTipslocations["Greek"]["location_id"] = "";
	$placeHolderslocations["Greek"]["location_id"] = "";
	$fieldLabelslocations["Greek"]["name"] = "Κατάστημα";
	$fieldToolTipslocations["Greek"]["name"] = "";
	$placeHolderslocations["Greek"]["name"] = "";
	$fieldLabelslocations["Greek"]["address"] = "Διεύθυνση";
	$fieldToolTipslocations["Greek"]["address"] = "";
	$placeHolderslocations["Greek"]["address"] = "";
	$fieldLabelslocations["Greek"]["active"] = "Ενεργό";
	$fieldToolTipslocations["Greek"]["active"] = "";
	$placeHolderslocations["Greek"]["active"] = "";
	if (count($fieldToolTipslocations["Greek"]))
		$tdatalocations[".isUseToolTips"] = true;
}


	$tdatalocations[".NCSearch"] = true;



$tdatalocations[".shortTableName"] = "locations";
$tdatalocations[".nSecOptions"] = 0;

$tdatalocations[".mainTableOwnerID"] = "";
$tdatalocations[".entityType"] = 0;
$tdatalocations[".connId"] = "figura_at_10_101_125_22";


$tdatalocations[".strOriginalTableName"] = "locations";

	



$tdatalocations[".showAddInPopup"] = false;

$tdatalocations[".showEditInPopup"] = false;

$tdatalocations[".showViewInPopup"] = false;

$tdatalocations[".listAjax"] = false;
//	temporary
//$tdatalocations[".listAjax"] = false;

	$tdatalocations[".audit"] = false;

	$tdatalocations[".locking"] = false;


$pages = $tdatalocations[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocations[".edit"] = true;
	$tdatalocations[".afterEditAction"] = 1;
	$tdatalocations[".closePopupAfterEdit"] = 1;
	$tdatalocations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocations[".add"] = true;
$tdatalocations[".afterAddAction"] = 1;
$tdatalocations[".closePopupAfterAdd"] = 1;
$tdatalocations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocations[".list"] = true;
}



$tdatalocations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocations[".printFriendly"] = true;
}



$tdatalocations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocations[".isUseAjaxSuggest"] = true;



						

$tdatalocations[".ajaxCodeSnippetAdded"] = false;

$tdatalocations[".buttonsAdded"] = false;

$tdatalocations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocations[".isUseTimeForSearch"] = false;


$tdatalocations[".badgeColor"] = "DB7093";


$tdatalocations[".allSearchFields"] = array();
$tdatalocations[".filterFields"] = array();
$tdatalocations[".requiredSearchFields"] = array();

$tdatalocations[".googleLikeFields"] = array();
$tdatalocations[".googleLikeFields"][] = "location_id";
$tdatalocations[".googleLikeFields"][] = "name";
$tdatalocations[".googleLikeFields"][] = "address";
$tdatalocations[".googleLikeFields"][] = "active";



$tdatalocations[".tableType"] = "list";

$tdatalocations[".printerPageOrientation"] = 0;
$tdatalocations[".nPrinterPageScale"] = 100;

$tdatalocations[".nPrinterSplitRecords"] = 40;

$tdatalocations[".geocodingEnabled"] = false;










$tdatalocations[".pageSize"] = 20;

$tdatalocations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalocations[".strOrderBy"] = $tstrOrderBy;

$tdatalocations[".orderindexes"] = array();


$tdatalocations[".sqlHead"] = "SELECT location_id,  	name,  	address,  	active";
$tdatalocations[".sqlFrom"] = "FROM locations";
$tdatalocations[".sqlWhereExpr"] = "";
$tdatalocations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocations[".arrGroupsPerPage"] = $arrGPP;

$tdatalocations[".highlightSearchResults"] = true;

$tableKeyslocations = array();
$tableKeyslocations[] = "location_id";
$tdatalocations[".Keys"] = $tableKeyslocations;


$tdatalocations[".hideMobileList"] = array();




//	location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "location_id";
	$fdata["GoodName"] = "location_id";
	$fdata["ownerTable"] = "locations";
	$fdata["Label"] = GetFieldLabel("locations","location_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "location_id";

		$fdata["sourceSingle"] = "location_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "location_id";

	
	
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


	$tdatalocations["location_id"] = $fdata;
		$tdatalocations[".searchableFields"][] = "location_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "locations";
	$fdata["Label"] = GetFieldLabel("locations","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatalocations["name"] = $fdata;
		$tdatalocations[".searchableFields"][] = "name";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "locations";
	$fdata["Label"] = GetFieldLabel("locations","address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address";

		$fdata["sourceSingle"] = "address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatalocations["address"] = $fdata;
		$tdatalocations[".searchableFields"][] = "address";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "locations";
	$fdata["Label"] = GetFieldLabel("locations","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatalocations["active"] = $fdata;
		$tdatalocations[".searchableFields"][] = "active";


$tables_data["locations"]=&$tdatalocations;
$field_labels["locations"] = &$fieldLabelslocations;
$fieldToolTips["locations"] = &$fieldToolTipslocations;
$placeHolders["locations"] = &$placeHolderslocations;
$page_titles["locations"] = &$pageTitleslocations;


changeTextControlsToDate( "locations" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["locations"] = array();
//	reservationsReception
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="reservationsReception";
		$detailsParam["dOriginalTable"] = "reservations";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reservationsreception";
	$detailsParam["dCaptionTable"] = GetTableCaption("reservationsReception");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["locations"][$dIndex] = $detailsParam;

	
		$detailsTablesData["locations"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["locations"][$dIndex]["masterKeys"][]="location_id";

				$detailsTablesData["locations"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["locations"][$dIndex]["detailKeys"][]="locationId";
//	figura_users
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="figura_users";
		$detailsParam["dOriginalTable"] = "figura_users";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "figura_users";
	$detailsParam["dCaptionTable"] = GetTableCaption("figura_users");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["locations"][$dIndex] = $detailsParam;

	
		$detailsTablesData["locations"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["locations"][$dIndex]["masterKeys"][]="location_id";

				$detailsTablesData["locations"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["locations"][$dIndex]["detailKeys"][]="locationId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["locations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_locations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "location_id,  	name,  	address,  	active";
$proto0["m_strFrom"] = "FROM locations";
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
	"m_strName" => "location_id",
	"m_strTable" => "locations",
	"m_srcTableName" => "locations"
));

$proto6["m_sql"] = "location_id";
$proto6["m_srcTableName"] = "locations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "locations",
	"m_srcTableName" => "locations"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "locations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "locations",
	"m_srcTableName" => "locations"
));

$proto10["m_sql"] = "address";
$proto10["m_srcTableName"] = "locations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "locations",
	"m_srcTableName" => "locations"
));

$proto12["m_sql"] = "active";
$proto12["m_srcTableName"] = "locations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "locations";
$proto15["m_srcTableName"] = "locations";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "location_id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "address";
$proto15["m_columns"][] = "active";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "locations";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "locations";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="locations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_locations = createSqlQuery_locations();


	
		;

				

$tdatalocations[".sqlquery"] = $queryData_locations;



$tdatalocations[".hasEvents"] = false;

?>