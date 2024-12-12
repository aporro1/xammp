<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["locations"] ) ) {
			$lookupTableLinks["locations"] = array();
		}
		if( !isset( $lookupTableLinks["locations"]["reservations.locationId"] )) {
			$lookupTableLinks["locations"]["reservations.locationId"] = array();
		}
		$lookupTableLinks["locations"]["reservations.locationId"]["edit"] = array("table" => "reservations", "field" => "locationId", "page" => "edit");
		if( !isset( $lookupTableLinks["treatments"] ) ) {
			$lookupTableLinks["treatments"] = array();
		}
		if( !isset( $lookupTableLinks["treatments"]["reservations.treatmentId"] )) {
			$lookupTableLinks["treatments"]["reservations.treatmentId"] = array();
		}
		$lookupTableLinks["treatments"]["reservations.treatmentId"]["edit"] = array("table" => "reservations", "field" => "treatmentId", "page" => "edit");
		if( !isset( $lookupTableLinks["v_available_reservations"] ) ) {
			$lookupTableLinks["v_available_reservations"] = array();
		}
		if( !isset( $lookupTableLinks["v_available_reservations"]["reservations.rsvTime"] )) {
			$lookupTableLinks["v_available_reservations"]["reservations.rsvTime"] = array();
		}
		$lookupTableLinks["v_available_reservations"]["reservations.rsvTime"]["edit"] = array("table" => "reservations", "field" => "rsvTime", "page" => "edit");
		if( !isset( $lookupTableLinks["statuses"] ) ) {
			$lookupTableLinks["statuses"] = array();
		}
		if( !isset( $lookupTableLinks["statuses"]["reservations.rsvStatus"] )) {
			$lookupTableLinks["statuses"]["reservations.rsvStatus"] = array();
		}
		$lookupTableLinks["statuses"]["reservations.rsvStatus"]["edit"] = array("table" => "reservations", "field" => "rsvStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["locations"] ) ) {
			$lookupTableLinks["locations"] = array();
		}
		if( !isset( $lookupTableLinks["locations"]["v_available_reservations.locationId"] )) {
			$lookupTableLinks["locations"]["v_available_reservations.locationId"] = array();
		}
		$lookupTableLinks["locations"]["v_available_reservations.locationId"]["edit"] = array("table" => "v_available_reservations", "field" => "locationId", "page" => "edit");
		if( !isset( $lookupTableLinks["locations"] ) ) {
			$lookupTableLinks["locations"] = array();
		}
		if( !isset( $lookupTableLinks["locations"]["figura_users.locationId"] )) {
			$lookupTableLinks["locations"]["figura_users.locationId"] = array();
		}
		$lookupTableLinks["locations"]["figura_users.locationId"]["edit"] = array("table" => "figura_users", "field" => "locationId", "page" => "edit");
		if( !isset( $lookupTableLinks["locations"] ) ) {
			$lookupTableLinks["locations"] = array();
		}
		if( !isset( $lookupTableLinks["locations"]["admin_users.locationId"] )) {
			$lookupTableLinks["locations"]["admin_users.locationId"] = array();
		}
		$lookupTableLinks["locations"]["admin_users.locationId"]["edit"] = array("table" => "admin_users", "field" => "locationId", "page" => "edit");
		if( !isset( $lookupTableLinks["locations"] ) ) {
			$lookupTableLinks["locations"] = array();
		}
		if( !isset( $lookupTableLinks["locations"]["reservationsreception.locationId"] )) {
			$lookupTableLinks["locations"]["reservationsreception.locationId"] = array();
		}
		$lookupTableLinks["locations"]["reservationsreception.locationId"]["edit"] = array("table" => "reservationsReception", "field" => "locationId", "page" => "edit");
		if( !isset( $lookupTableLinks["treatments"] ) ) {
			$lookupTableLinks["treatments"] = array();
		}
		if( !isset( $lookupTableLinks["treatments"]["reservationsreception.treatmentId"] )) {
			$lookupTableLinks["treatments"]["reservationsreception.treatmentId"] = array();
		}
		$lookupTableLinks["treatments"]["reservationsreception.treatmentId"]["edit"] = array("table" => "reservationsReception", "field" => "treatmentId", "page" => "edit");
		if( !isset( $lookupTableLinks["v_available_reservations"] ) ) {
			$lookupTableLinks["v_available_reservations"] = array();
		}
		if( !isset( $lookupTableLinks["v_available_reservations"]["reservationsreception.rsvTime"] )) {
			$lookupTableLinks["v_available_reservations"]["reservationsreception.rsvTime"] = array();
		}
		$lookupTableLinks["v_available_reservations"]["reservationsreception.rsvTime"]["edit"] = array("table" => "reservationsReception", "field" => "rsvTime", "page" => "edit");
		if( !isset( $lookupTableLinks["statuses"] ) ) {
			$lookupTableLinks["statuses"] = array();
		}
		if( !isset( $lookupTableLinks["statuses"]["reservationsreception.rsvStatus"] )) {
			$lookupTableLinks["statuses"]["reservationsreception.rsvStatus"] = array();
		}
		$lookupTableLinks["statuses"]["reservationsreception.rsvStatus"]["edit"] = array("table" => "reservationsReception", "field" => "rsvStatus", "page" => "edit");
}

?>