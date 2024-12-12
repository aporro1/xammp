<?php
$dalTabletreatments = array();
$dalTabletreatments["treatment_id"] = array("type"=>3,"varname"=>"treatment_id", "name" => "treatment_id", "autoInc" => "1");
$dalTabletreatments["treatmentName"] = array("type"=>200,"varname"=>"treatmentName", "name" => "treatmentName", "autoInc" => "0");
$dalTabletreatments["description"] = array("type"=>200,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTabletreatments["active"] = array("type"=>16,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTabletreatments["displayValue"] = array("type"=>200,"varname"=>"displayValue", "name" => "displayValue", "autoInc" => "0");
$dalTabletreatments["displayOrder"] = array("type"=>3,"varname"=>"displayOrder", "name" => "displayOrder", "autoInc" => "0");
$dalTabletreatments["treatment_id"]["key"]=true;

$dal_info["figura_at_10_101_125_22__treatments"] = &$dalTabletreatments;
?>