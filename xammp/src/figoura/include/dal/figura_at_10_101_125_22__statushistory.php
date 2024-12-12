<?php
$dalTablestatushistory = array();
$dalTablestatushistory["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablestatushistory["reservationid"] = array("type"=>3,"varname"=>"reservationid", "name" => "reservationid", "autoInc" => "0");
$dalTablestatushistory["prevStatus"] = array("type"=>200,"varname"=>"prevStatus", "name" => "prevStatus", "autoInc" => "0");
$dalTablestatushistory["curStatus"] = array("type"=>200,"varname"=>"curStatus", "name" => "curStatus", "autoInc" => "0");
$dalTablestatushistory["updatedAt"] = array("type"=>135,"varname"=>"updatedAt", "name" => "updatedAt", "autoInc" => "0");
$dalTablestatushistory["id"]["key"]=true;

$dal_info["figura_at_10_101_125_22__statushistory"] = &$dalTablestatushistory;
?>