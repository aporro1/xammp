<?php
$tdatatreatments = array();
$tdatatreatments[".searchableFields"] = array();
$tdatatreatments[".ShortName"] = "treatments";
$tdatatreatments[".OwnerID"] = "";
$tdatatreatments[".OriginalTable"] = "treatments";


$tdatatreatments[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatreatments[".originalPagesByType"] = $tdatatreatments[".pagesByType"];
$tdatatreatments[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatreatments[".originalPages"] = $tdatatreatments[".pages"];
$tdatatreatments[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatreatments[".originalDefaultPages"] = $tdatatreatments[".defaultPages"];

//	field labels
$fieldLabelstreatments = array();
$fieldToolTipstreatments = array();
$pageTitlestreatments = array();
$placeHolderstreatments = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelstreatments["Greek"] = array();
	$fieldToolTipstreatments["Greek"] = array();
	$placeHolderstreatments["Greek"] = array();
	$pageTitlestreatments["Greek"] = array();
	$fieldLabelstreatments["Greek"]["treatment_id"] = "TreatmentId";
	$fieldToolTipstreatments["Greek"]["treatment_id"] = "";
	$placeHolderstreatments["Greek"]["treatment_id"] = "";
	$fieldLabelstreatments["Greek"]["description"] = "Περιγραφή";
	$fieldToolTipstreatments["Greek"]["description"] = "";
	$placeHolderstreatments["Greek"]["description"] = "";
	$fieldLabelstreatments["Greek"]["active"] = "Ενεργή";
	$fieldToolTipstreatments["Greek"]["active"] = "";
	$placeHolderstreatments["Greek"]["active"] = "";
	$fieldLabelstreatments["Greek"]["displayValue"] = "Εμφανιζόμενη Τιμή";
	$fieldToolTipstreatments["Greek"]["displayValue"] = "";
	$placeHolderstreatments["Greek"]["displayValue"] = "";
	$fieldLabelstreatments["Greek"]["treatmentName"] = "Θεραπεία";
	$fieldToolTipstreatments["Greek"]["treatmentName"] = "";
	$placeHolderstreatments["Greek"]["treatmentName"] = "";
	$fieldLabelstreatments["Greek"]["displayOrder"] = "Display Order";
	$fieldToolTipstreatments["Greek"]["displayOrder"] = "";
	$placeHolderstreatments["Greek"]["displayOrder"] = "";
	if (count($fieldToolTipstreatments["Greek"]))
		$tdatatreatments[".isUseToolTips"] = true;
}


	$tdatatreatments[".NCSearch"] = true;



$tdatatreatments[".shortTableName"] = "treatments";
$tdatatreatments[".nSecOptions"] = 0;

$tdatatreatments[".mainTableOwnerID"] = "";
$tdatatreatments[".entityType"] = 0;
$tdatatreatments[".connId"] = "figura_at_10_101_125_22";


$tdatatreatments[".strOriginalTableName"] = "treatments";

	



$tdatatreatments[".showAddInPopup"] = false;

$tdatatreatments[".showEditInPopup"] = false;

$tdatatreatments[".showViewInPopup"] = false;

$tdatatreatments[".listAjax"] = false;
//	temporary
//$tdatatreatments[".listAjax"] = false;

	$tdatatreatments[".audit"] = false;

	$tdatatreatments[".locking"] = false;


$pages = $tdatatreatments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatreatments[".edit"] = true;
	$tdatatreatments[".afterEditAction"] = 1;
	$tdatatreatments[".closePopupAfterEdit"] = 1;
	$tdatatreatments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatreatments[".add"] = true;
$tdatatreatments[".afterAddAction"] = 1;
$tdatatreatments[".closePopupAfterAdd"] = 1;
$tdatatreatments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatreatments[".list"] = true;
}



$tdatatreatments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatreatments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatreatments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatreatments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatreatments[".printFriendly"] = true;
}



$tdatatreatments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatreatments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatreatments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatreatments[".isUseAjaxSuggest"] = true;



						

$tdatatreatments[".ajaxCodeSnippetAdded"] = false;

$tdatatreatments[".buttonsAdded"] = false;

$tdatatreatments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatreatments[".isUseTimeForSearch"] = false;


$tdatatreatments[".badgeColor"] = "00C2C5";


$tdatatreatments[".allSearchFields"] = array();
$tdatatreatments[".filterFields"] = array();
$tdatatreatments[".requiredSearchFields"] = array();

$tdatatreatments[".googleLikeFields"] = array();
$tdatatreatments[".googleLikeFields"][] = "treatment_id";
$tdatatreatments[".googleLikeFields"][] = "treatmentName";
$tdatatreatments[".googleLikeFields"][] = "description";
$tdatatreatments[".googleLikeFields"][] = "active";
$tdatatreatments[".googleLikeFields"][] = "displayValue";



$tdatatreatments[".tableType"] = "list";

$tdatatreatments[".printerPageOrientation"] = 0;
$tdatatreatments[".nPrinterPageScale"] = 100;

$tdatatreatments[".nPrinterSplitRecords"] = 40;

$tdatatreatments[".geocodingEnabled"] = false;










$tdatatreatments[".pageSize"] = 20;

$tdatatreatments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatreatments[".strOrderBy"] = $tstrOrderBy;

$tdatatreatments[".orderindexes"] = array();


$tdatatreatments[".sqlHead"] = "SELECT treatment_id,  	treatmentName,  	description,  	active,  	displayValue,  	displayOrder";
$tdatatreatments[".sqlFrom"] = "FROM treatments";
$tdatatreatments[".sqlWhereExpr"] = "";
$tdatatreatments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatreatments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatreatments[".arrGroupsPerPage"] = $arrGPP;

$tdatatreatments[".highlightSearchResults"] = true;

$tableKeystreatments = array();
$tableKeystreatments[] = "treatment_id";
$tdatatreatments[".Keys"] = $tableKeystreatments;


$tdatatreatments[".hideMobileList"] = array();




//	treatment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "treatment_id";
	$fdata["GoodName"] = "treatment_id";
	$fdata["ownerTable"] = "treatments";
	$fdata["Label"] = GetFieldLabel("treatments","treatment_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "treatment_id";

		$fdata["sourceSingle"] = "treatment_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "treatment_id";

	
	
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


	$tdatatreatments["treatment_id"] = $fdata;
		$tdatatreatments[".searchableFields"][] = "treatment_id";
//	treatmentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "treatmentName";
	$fdata["GoodName"] = "treatmentName";
	$fdata["ownerTable"] = "treatments";
	$fdata["Label"] = GetFieldLabel("treatments","treatmentName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "treatmentName";

		$fdata["sourceSingle"] = "treatmentName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "treatmentName";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatreatments["treatmentName"] = $fdata;
		$tdatatreatments[".searchableFields"][] = "treatmentName";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "treatments";
	$fdata["Label"] = GetFieldLabel("treatments","description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatatreatments["description"] = $fdata;
		$tdatatreatments[".searchableFields"][] = "description";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "treatments";
	$fdata["Label"] = GetFieldLabel("treatments","active");
	$fdata["FieldType"] = 16;


	
	
			

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


	$tdatatreatments["active"] = $fdata;
		$tdatatreatments[".searchableFields"][] = "active";
//	displayValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "displayValue";
	$fdata["GoodName"] = "displayValue";
	$fdata["ownerTable"] = "treatments";
	$fdata["Label"] = GetFieldLabel("treatments","displayValue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "displayValue";

		$fdata["sourceSingle"] = "displayValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayValue";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatatreatments["displayValue"] = $fdata;
		$tdatatreatments[".searchableFields"][] = "displayValue";
//	displayOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "displayOrder";
	$fdata["GoodName"] = "displayOrder";
	$fdata["ownerTable"] = "treatments";
	$fdata["Label"] = GetFieldLabel("treatments","displayOrder");
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


	$tdatatreatments["displayOrder"] = $fdata;
		$tdatatreatments[".searchableFields"][] = "displayOrder";


$tables_data["treatments"]=&$tdatatreatments;
$field_labels["treatments"] = &$fieldLabelstreatments;
$fieldToolTips["treatments"] = &$fieldToolTipstreatments;
$placeHolders["treatments"] = &$placeHolderstreatments;
$page_titles["treatments"] = &$pageTitlestreatments;


changeTextControlsToDate( "treatments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["treatments"] = array();
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


		
	$detailsTablesData["treatments"][$dIndex] = $detailsParam;

	
		$detailsTablesData["treatments"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["treatments"][$dIndex]["masterKeys"][]="treatment_id";

				$detailsTablesData["treatments"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["treatments"][$dIndex]["detailKeys"][]="treatmentId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["treatments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_treatments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "treatment_id,  	treatmentName,  	description,  	active,  	displayValue,  	displayOrder";
$proto0["m_strFrom"] = "FROM treatments";
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
	"m_strName" => "treatment_id",
	"m_strTable" => "treatments",
	"m_srcTableName" => "treatments"
));

$proto6["m_sql"] = "treatment_id";
$proto6["m_srcTableName"] = "treatments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "treatmentName",
	"m_strTable" => "treatments",
	"m_srcTableName" => "treatments"
));

$proto8["m_sql"] = "treatmentName";
$proto8["m_srcTableName"] = "treatments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "treatments",
	"m_srcTableName" => "treatments"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "treatments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "treatments",
	"m_srcTableName" => "treatments"
));

$proto12["m_sql"] = "active";
$proto12["m_srcTableName"] = "treatments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "displayValue",
	"m_strTable" => "treatments",
	"m_srcTableName" => "treatments"
));

$proto14["m_sql"] = "displayValue";
$proto14["m_srcTableName"] = "treatments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "displayOrder",
	"m_strTable" => "treatments",
	"m_srcTableName" => "treatments"
));

$proto16["m_sql"] = "displayOrder";
$proto16["m_srcTableName"] = "treatments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "treatments";
$proto19["m_srcTableName"] = "treatments";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "treatment_id";
$proto19["m_columns"][] = "treatmentName";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "active";
$proto19["m_columns"][] = "displayValue";
$proto19["m_columns"][] = "displayOrder";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "treatments";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "treatments";
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
$proto0["m_srcTableName"]="treatments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_treatments = createSqlQuery_treatments();


	
		;

						

$tdatatreatments[".sqlquery"] = $queryData_treatments;



$tdatatreatments[".hasEvents"] = false;

?>