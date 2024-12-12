<?php
$tdatareservations = array();
$tdatareservations[".searchableFields"] = array();
$tdatareservations[".ShortName"] = "reservations";
$tdatareservations[".OwnerID"] = "";
$tdatareservations[".OriginalTable"] = "reservations";


$tdatareservations[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareservations[".originalPagesByType"] = $tdatareservations[".pagesByType"];
$tdatareservations[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareservations[".originalPages"] = $tdatareservations[".pages"];
$tdatareservations[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareservations[".originalDefaultPages"] = $tdatareservations[".defaultPages"];

//	field labels
$fieldLabelsreservations = array();
$fieldToolTipsreservations = array();
$pageTitlesreservations = array();
$placeHoldersreservations = array();

if(mlang_getcurrentlang()=="Greek")
{
	$fieldLabelsreservations["Greek"] = array();
	$fieldToolTipsreservations["Greek"] = array();
	$placeHoldersreservations["Greek"] = array();
	$pageTitlesreservations["Greek"] = array();
	$fieldLabelsreservations["Greek"]["reservation_id"] = "Id Κράτησης";
	$fieldToolTipsreservations["Greek"]["reservation_id"] = "";
	$placeHoldersreservations["Greek"]["reservation_id"] = "";
	$fieldLabelsreservations["Greek"]["comments"] = "Σημειώσεις";
	$fieldToolTipsreservations["Greek"]["comments"] = "";
	$placeHoldersreservations["Greek"]["comments"] = "";
	$fieldLabelsreservations["Greek"]["firstname"] = "Όνομα";
	$fieldToolTipsreservations["Greek"]["firstname"] = "";
	$placeHoldersreservations["Greek"]["firstname"] = "";
	$fieldLabelsreservations["Greek"]["lastname"] = "Επώνυμο";
	$fieldToolTipsreservations["Greek"]["lastname"] = "";
	$placeHoldersreservations["Greek"]["lastname"] = "";
	$fieldLabelsreservations["Greek"]["phone"] = "Τηλέφωνο";
	$fieldToolTipsreservations["Greek"]["phone"] = "";
	$placeHoldersreservations["Greek"]["phone"] = "";
	$fieldLabelsreservations["Greek"]["mobile"] = "Κινητό";
	$fieldToolTipsreservations["Greek"]["mobile"] = "";
	$placeHoldersreservations["Greek"]["mobile"] = "";
	$fieldLabelsreservations["Greek"]["zipcode"] = "Τ.Κ.";
	$fieldToolTipsreservations["Greek"]["zipcode"] = "";
	$placeHoldersreservations["Greek"]["zipcode"] = "";
	$fieldLabelsreservations["Greek"]["locationId"] = "Κατάστημα";
	$fieldToolTipsreservations["Greek"]["locationId"] = "";
	$placeHoldersreservations["Greek"]["locationId"] = "";
	$fieldLabelsreservations["Greek"]["treatmentId"] = "Θεραπεία";
	$fieldToolTipsreservations["Greek"]["treatmentId"] = "";
	$placeHoldersreservations["Greek"]["treatmentId"] = "";
	$fieldLabelsreservations["Greek"]["rsvDate"] = "Ημ/νία Ραντεβού";
	$fieldToolTipsreservations["Greek"]["rsvDate"] = "";
	$placeHoldersreservations["Greek"]["rsvDate"] = "";
	$fieldLabelsreservations["Greek"]["rsvTime"] = "Ώρα Ραντεβού";
	$fieldToolTipsreservations["Greek"]["rsvTime"] = "";
	$placeHoldersreservations["Greek"]["rsvTime"] = "";
	$fieldLabelsreservations["Greek"]["rsvStatus"] = "Κατάσταση";
	$fieldToolTipsreservations["Greek"]["rsvStatus"] = "";
	$placeHoldersreservations["Greek"]["rsvStatus"] = "";
	$fieldLabelsreservations["Greek"]["createdAt"] = "Ημ/νία Καταχώρησης";
	$fieldToolTipsreservations["Greek"]["createdAt"] = "";
	$placeHoldersreservations["Greek"]["createdAt"] = "";
	$fieldLabelsreservations["Greek"]["updatedAt"] = "Ημ/νία Τελευταίας Μεταβολής";
	$fieldToolTipsreservations["Greek"]["updatedAt"] = "";
	$placeHoldersreservations["Greek"]["updatedAt"] = "";
	$fieldLabelsreservations["Greek"]["changesCount"] = "Πλήθος Μεταβολών";
	$fieldToolTipsreservations["Greek"]["changesCount"] = "";
	$placeHoldersreservations["Greek"]["changesCount"] = "";
	$fieldLabelsreservations["Greek"]["displayName"] = "Display Name";
	$fieldToolTipsreservations["Greek"]["displayName"] = "";
	$placeHoldersreservations["Greek"]["displayName"] = "";
	$pageTitlesreservations["Greek"]["add"] = "Εισαγωγή Ραντεβού";
	if (count($fieldToolTipsreservations["Greek"]))
		$tdatareservations[".isUseToolTips"] = true;
}


	$tdatareservations[".NCSearch"] = true;



$tdatareservations[".shortTableName"] = "reservations";
$tdatareservations[".nSecOptions"] = 0;

$tdatareservations[".mainTableOwnerID"] = "";
$tdatareservations[".entityType"] = 0;
$tdatareservations[".connId"] = "figura_at_10_101_125_22";


$tdatareservations[".strOriginalTableName"] = "reservations";

	



$tdatareservations[".showAddInPopup"] = false;

$tdatareservations[".showEditInPopup"] = false;

$tdatareservations[".showViewInPopup"] = false;

$tdatareservations[".listAjax"] = false;
//	temporary
//$tdatareservations[".listAjax"] = false;

	$tdatareservations[".audit"] = false;

	$tdatareservations[".locking"] = false;


$pages = $tdatareservations[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareservations[".edit"] = true;
	$tdatareservations[".afterEditAction"] = 1;
	$tdatareservations[".closePopupAfterEdit"] = 1;
	$tdatareservations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareservations[".add"] = true;
$tdatareservations[".afterAddAction"] = 0;
$tdatareservations[".closePopupAfterAdd"] = 1;
$tdatareservations[".afterAddActionDetTable"] = "statushistory";
}

if( $pages[PAGE_LIST] ) {
	$tdatareservations[".list"] = true;
}



$tdatareservations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareservations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareservations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareservations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareservations[".printFriendly"] = true;
}



$tdatareservations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareservations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareservations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareservations[".isUseAjaxSuggest"] = true;



			
				

$tdatareservations[".ajaxCodeSnippetAdded"] = false;

$tdatareservations[".buttonsAdded"] = true;

$tdatareservations[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareservations[".isUseTimeForSearch"] = false;


$tdatareservations[".badgeColor"] = "3cb371";


$tdatareservations[".allSearchFields"] = array();
$tdatareservations[".filterFields"] = array();
$tdatareservations[".requiredSearchFields"] = array();

$tdatareservations[".googleLikeFields"] = array();
$tdatareservations[".googleLikeFields"][] = "reservation_id";
$tdatareservations[".googleLikeFields"][] = "firstname";
$tdatareservations[".googleLikeFields"][] = "lastname";
$tdatareservations[".googleLikeFields"][] = "displayName";
$tdatareservations[".googleLikeFields"][] = "phone";
$tdatareservations[".googleLikeFields"][] = "mobile";
$tdatareservations[".googleLikeFields"][] = "zipcode";
$tdatareservations[".googleLikeFields"][] = "locationId";
$tdatareservations[".googleLikeFields"][] = "treatmentId";
$tdatareservations[".googleLikeFields"][] = "rsvDate";
$tdatareservations[".googleLikeFields"][] = "rsvTime";
$tdatareservations[".googleLikeFields"][] = "rsvStatus";
$tdatareservations[".googleLikeFields"][] = "createdAt";
$tdatareservations[".googleLikeFields"][] = "updatedAt";
$tdatareservations[".googleLikeFields"][] = "comments";
$tdatareservations[".googleLikeFields"][] = "changesCount";



$tdatareservations[".tableType"] = "list";

$tdatareservations[".printerPageOrientation"] = 0;
$tdatareservations[".nPrinterPageScale"] = 100;

$tdatareservations[".nPrinterSplitRecords"] = 40;

$tdatareservations[".geocodingEnabled"] = false;





$tdatareservations[".isResizeColumns"] = true;


$tdatareservations[".noRecordsFirstPage"] = true;



$tdatareservations[".pageSize"] = 20;

$tdatareservations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareservations[".strOrderBy"] = $tstrOrderBy;

$tdatareservations[".orderindexes"] = array();


$tdatareservations[".sqlHead"] = "SELECT reservation_id,  	firstname,  	lastname,  	displayName,  	phone,  	mobile,  	zipcode,  	locationId,  	treatmentId,  	rsvDate,  	rsvTime,  	rsvStatus,  	createdAt,  	updatedAt,  	comments,  	changesCount";
$tdatareservations[".sqlFrom"] = "FROM reservations";
$tdatareservations[".sqlWhereExpr"] = "";
$tdatareservations[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatareservations[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareservations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareservations[".arrGroupsPerPage"] = $arrGPP;

$tdatareservations[".highlightSearchResults"] = true;

$tableKeysreservations = array();
$tableKeysreservations[] = "reservation_id";
$tdatareservations[".Keys"] = $tableKeysreservations;


$tdatareservations[".hideMobileList"] = array();




//	reservation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "reservation_id";
	$fdata["GoodName"] = "reservation_id";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","reservation_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "reservation_id";

		$fdata["sourceSingle"] = "reservation_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reservation_id";

	
	
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


	$tdatareservations["reservation_id"] = $fdata;
		$tdatareservations[".searchableFields"][] = "reservation_id";
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","firstname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "firstname";

		$fdata["sourceSingle"] = "firstname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstname";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "reservation_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareservations["firstname"] = $fdata;
		$tdatareservations[".searchableFields"][] = "firstname";
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","lastname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lastname";

		$fdata["sourceSingle"] = "lastname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastname";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatareservations["lastname"] = $fdata;
		$tdatareservations[".searchableFields"][] = "lastname";
//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","displayName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "displayName";

		$fdata["sourceSingle"] = "displayName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatareservations["displayName"] = $fdata;
		$tdatareservations[".searchableFields"][] = "displayName";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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


	$tdatareservations["phone"] = $fdata;
		$tdatareservations[".searchableFields"][] = "phone";
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","mobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mobile";

		$fdata["sourceSingle"] = "mobile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile";

	
	
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


	$tdatareservations["mobile"] = $fdata;
		$tdatareservations[".searchableFields"][] = "mobile";
//	zipcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "zipcode";
	$fdata["GoodName"] = "zipcode";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","zipcode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "zipcode";

		$fdata["sourceSingle"] = "zipcode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zipcode";

	
	
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


	$tdatareservations["zipcode"] = $fdata;
		$tdatareservations[".searchableFields"][] = "zipcode";
//	locationId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "locationId";
	$fdata["GoodName"] = "locationId";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","locationId");
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

		$eventsData = array();
	$eventsData[] = array( "name" => "locationId_event", "type" => "change" );
	$vdata["fieldViewEvents"] = $eventsData;

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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(name,' - ',address)";

				$edata["LookupWhere"] = "active=1";


		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "rsvTime";

	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareservations["locationId"] = $fdata;
		$tdatareservations[".searchableFields"][] = "locationId";
//	treatmentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "treatmentId";
	$fdata["GoodName"] = "treatmentId";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","treatmentId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "treatmentId";

		$fdata["sourceSingle"] = "treatmentId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "treatmentId";

	
	
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
	$edata["LookupTable"] = "treatments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "treatment_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "displayValue";

	

	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareservations["treatmentId"] = $fdata;
		$tdatareservations[".searchableFields"][] = "treatmentId";
//	rsvDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rsvDate";
	$fdata["GoodName"] = "rsvDate";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","rsvDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "rsvDate";

		$fdata["sourceSingle"] = "rsvDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rsvDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "reservation_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareservations["rsvDate"] = $fdata;
		$tdatareservations[".searchableFields"][] = "rsvDate";
//	rsvTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rsvTime";
	$fdata["GoodName"] = "rsvTime";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","rsvTime");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "v_available_reservations";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "rsvTime";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "rsvTime";

	

	
	$edata["LookupOrderBy"] = "rsvTime";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "locationId", "lookup" => "locationId" );
	$edata["categoryFields"][] = array( "main" => "rsvDate", "lookup" => "rsvDate" );

	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatareservations["rsvTime"] = $fdata;
		$tdatareservations[".searchableFields"][] = "rsvTime";
//	rsvStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rsvStatus";
	$fdata["GoodName"] = "rsvStatus";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","rsvStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rsvStatus";

		$fdata["sourceSingle"] = "rsvStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rsvStatus";

	
	
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
	$edata["LookupTable"] = "statuses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Status";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Status";

	

	
	$edata["LookupOrderBy"] = "displayOrder";

	
	
	
	

	
	
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
		$fdata["filterTotalFields"] = "reservation_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareservations["rsvStatus"] = $fdata;
		$tdatareservations[".searchableFields"][] = "rsvStatus";
//	createdAt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "createdAt";
	$fdata["GoodName"] = "createdAt";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","createdAt");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "createdAt";

		$fdata["sourceSingle"] = "createdAt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createdAt";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "reservation_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareservations["createdAt"] = $fdata;
		$tdatareservations[".searchableFields"][] = "createdAt";
//	updatedAt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updatedAt";
	$fdata["GoodName"] = "updatedAt";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","updatedAt");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updatedAt";

		$fdata["sourceSingle"] = "updatedAt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updatedAt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatareservations["updatedAt"] = $fdata;
		$tdatareservations[".searchableFields"][] = "updatedAt";
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","comments");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comments";

		$fdata["sourceSingle"] = "comments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatareservations["comments"] = $fdata;
		$tdatareservations[".searchableFields"][] = "comments";
//	changesCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "changesCount";
	$fdata["GoodName"] = "changesCount";
	$fdata["ownerTable"] = "reservations";
	$fdata["Label"] = GetFieldLabel("reservations","changesCount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "changesCount";

		$fdata["sourceSingle"] = "changesCount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "changesCount";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatareservations["changesCount"] = $fdata;
		$tdatareservations[".searchableFields"][] = "changesCount";


$tables_data["reservations"]=&$tdatareservations;
$field_labels["reservations"] = &$fieldLabelsreservations;
$fieldToolTips["reservations"] = &$fieldToolTipsreservations;
$placeHolders["reservations"] = &$placeHoldersreservations;
$page_titles["reservations"] = &$pageTitlesreservations;


changeTextControlsToDate( "reservations" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["reservations"] = array();
//	statushistory
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="statushistory";
		$detailsParam["dOriginalTable"] = "statushistory";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "statushistory";
	$detailsParam["dCaptionTable"] = GetTableCaption("statushistory");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["reservations"][$dIndex] = $detailsParam;

	
		$detailsTablesData["reservations"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["reservations"][$dIndex]["masterKeys"][]="reservation_id";

				$detailsTablesData["reservations"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["reservations"][$dIndex]["detailKeys"][]="reservationid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["reservations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reservations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "reservation_id,  	firstname,  	lastname,  	displayName,  	phone,  	mobile,  	zipcode,  	locationId,  	treatmentId,  	rsvDate,  	rsvTime,  	rsvStatus,  	createdAt,  	updatedAt,  	comments,  	changesCount";
$proto0["m_strFrom"] = "FROM reservations";
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
	"m_strName" => "reservation_id",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto6["m_sql"] = "reservation_id";
$proto6["m_srcTableName"] = "reservations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto8["m_sql"] = "firstname";
$proto8["m_srcTableName"] = "reservations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto10["m_sql"] = "lastname";
$proto10["m_srcTableName"] = "reservations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "displayName",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto12["m_sql"] = "displayName";
$proto12["m_srcTableName"] = "reservations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto14["m_sql"] = "phone";
$proto14["m_srcTableName"] = "reservations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto16["m_sql"] = "mobile";
$proto16["m_srcTableName"] = "reservations";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "zipcode",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto18["m_sql"] = "zipcode";
$proto18["m_srcTableName"] = "reservations";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "locationId",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto20["m_sql"] = "locationId";
$proto20["m_srcTableName"] = "reservations";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "treatmentId",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto22["m_sql"] = "treatmentId";
$proto22["m_srcTableName"] = "reservations";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rsvDate",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto24["m_sql"] = "rsvDate";
$proto24["m_srcTableName"] = "reservations";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "rsvTime",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto26["m_sql"] = "rsvTime";
$proto26["m_srcTableName"] = "reservations";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "rsvStatus",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto28["m_sql"] = "rsvStatus";
$proto28["m_srcTableName"] = "reservations";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "createdAt",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto30["m_sql"] = "createdAt";
$proto30["m_srcTableName"] = "reservations";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updatedAt",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto32["m_sql"] = "updatedAt";
$proto32["m_srcTableName"] = "reservations";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto34["m_sql"] = "comments";
$proto34["m_srcTableName"] = "reservations";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "changesCount",
	"m_strTable" => "reservations",
	"m_srcTableName" => "reservations"
));

$proto36["m_sql"] = "changesCount";
$proto36["m_srcTableName"] = "reservations";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "reservations";
$proto39["m_srcTableName"] = "reservations";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "reservation_id";
$proto39["m_columns"][] = "firstname";
$proto39["m_columns"][] = "lastname";
$proto39["m_columns"][] = "displayName";
$proto39["m_columns"][] = "phone";
$proto39["m_columns"][] = "mobile";
$proto39["m_columns"][] = "zipcode";
$proto39["m_columns"][] = "locationId";
$proto39["m_columns"][] = "treatmentId";
$proto39["m_columns"][] = "rsvDate";
$proto39["m_columns"][] = "rsvTime";
$proto39["m_columns"][] = "rsvStatus";
$proto39["m_columns"][] = "createdAt";
$proto39["m_columns"][] = "updatedAt";
$proto39["m_columns"][] = "comments";
$proto39["m_columns"][] = "changesCount";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "reservations";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "reservations";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="reservations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reservations = createSqlQuery_reservations();


	
		;

																

$tdatareservations[".sqlquery"] = $queryData_reservations;



$tdatareservations[".hasEvents"] = false;

?>