<?php
$dalTablereservations = array();
$dalTablereservations["reservation_id"] = array("type"=>3,"varname"=>"reservation_id", "name" => "reservation_id", "autoInc" => "1");
$dalTablereservations["firstname"] = array("type"=>200,"varname"=>"firstname", "name" => "firstname", "autoInc" => "0");
$dalTablereservations["lastname"] = array("type"=>200,"varname"=>"lastname", "name" => "lastname", "autoInc" => "0");
$dalTablereservations["displayName"] = array("type"=>200,"varname"=>"displayName", "name" => "displayName", "autoInc" => "0");
$dalTablereservations["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone", "autoInc" => "0");
$dalTablereservations["mobile"] = array("type"=>200,"varname"=>"mobile", "name" => "mobile", "autoInc" => "0");
$dalTablereservations["zipcode"] = array("type"=>200,"varname"=>"zipcode", "name" => "zipcode", "autoInc" => "0");
$dalTablereservations["locationId"] = array("type"=>3,"varname"=>"locationId", "name" => "locationId", "autoInc" => "0");
$dalTablereservations["treatmentId"] = array("type"=>3,"varname"=>"treatmentId", "name" => "treatmentId", "autoInc" => "0");
$dalTablereservations["rsvDate"] = array("type"=>7,"varname"=>"rsvDate", "name" => "rsvDate", "autoInc" => "0");
$dalTablereservations["rsvTime"] = array("type"=>200,"varname"=>"rsvTime", "name" => "rsvTime", "autoInc" => "0");
$dalTablereservations["rsvStatus"] = array("type"=>200,"varname"=>"rsvStatus", "name" => "rsvStatus", "autoInc" => "0");
$dalTablereservations["createdAt"] = array("type"=>135,"varname"=>"createdAt", "name" => "createdAt", "autoInc" => "0");
$dalTablereservations["updatedAt"] = array("type"=>135,"varname"=>"updatedAt", "name" => "updatedAt", "autoInc" => "0");
$dalTablereservations["comments"] = array("type"=>201,"varname"=>"comments", "name" => "comments", "autoInc" => "0");
$dalTablereservations["changesCount"] = array("type"=>3,"varname"=>"changesCount", "name" => "changesCount", "autoInc" => "0");
$dalTablereservations["reservation_id"]["key"]=true;

$dal_info["figura_at_10_101_125_22__reservations"] = &$dalTablereservations;
?>