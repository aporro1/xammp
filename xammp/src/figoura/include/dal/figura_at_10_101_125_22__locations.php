<?php
$dalTablelocations = array();
$dalTablelocations["location_id"] = array("type"=>3,"varname"=>"location_id", "name" => "location_id", "autoInc" => "1");
$dalTablelocations["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablelocations["address"] = array("type"=>200,"varname"=>"address", "name" => "address", "autoInc" => "0");
$dalTablelocations["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablelocations["location_id"]["key"]=true;

$dal_info["figura_at_10_101_125_22__locations"] = &$dalTablelocations;
?>