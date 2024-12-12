<?php
$dalTablestatuses = array();
$dalTablestatuses["Status"] = array("type"=>200,"varname"=>"Status", "name" => "Status", "autoInc" => "0");
$dalTablestatuses["displayOrder"] = array("type"=>3,"varname"=>"displayOrder", "name" => "displayOrder", "autoInc" => "0");
$dalTablestatuses["forReception"] = array("type"=>3,"varname"=>"forReception", "name" => "forReception", "autoInc" => "0");
$dalTablestatuses["Status"]["key"]=true;

$dal_info["figura_at_10_101_125_22__statuses"] = &$dalTablestatuses;
?>