<?php
$dalTablefigura_users = array();
$dalTablefigura_users["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTablefigura_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablefigura_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablefigura_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablefigura_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablefigura_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTablefigura_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablefigura_users["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id", "autoInc" => "0");
$dalTablefigura_users["locationId"] = array("type"=>3,"varname"=>"locationId", "name" => "locationId", "autoInc" => "0");
$dalTablefigura_users["ID"]["key"]=true;

$dal_info["figura_at_10_101_125_22__figura_users"] = &$dalTablefigura_users;
?>