<?php
$dalTableservicehours = array();
$dalTableservicehours["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableservicehours["timeFrom"] = array("type"=>200,"varname"=>"timeFrom", "name" => "timeFrom", "autoInc" => "0");
$dalTableservicehours["timeTo"] = array("type"=>200,"varname"=>"timeTo", "name" => "timeTo", "autoInc" => "0");
$dalTableservicehours["locationId"] = array("type"=>3,"varname"=>"locationId", "name" => "locationId", "autoInc" => "0");
$dalTableservicehours["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTableservicehours["timeslot"] = array("type"=>200,"varname"=>"timeslot", "name" => "timeslot", "autoInc" => "0");
$dalTableservicehours["id"]["key"]=true;

$dal_info["figura_at_10_101_125_22__servicehours"] = &$dalTableservicehours;
?>