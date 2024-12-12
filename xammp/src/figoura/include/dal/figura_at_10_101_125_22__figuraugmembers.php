<?php
$dalTablefiguraugmembers = array();
$dalTablefiguraugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablefiguraugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablefiguraugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablefiguraugmembers["UserName"]["key"]=true;
$dalTablefiguraugmembers["GroupID"]["key"]=true;
$dalTablefiguraugmembers["Provider"]["key"]=true;

$dal_info["figura_at_10_101_125_22__figuraugmembers"] = &$dalTablefiguraugmembers;
?>