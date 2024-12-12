<?php
$dalTablev_available_reservations = array();
$dalTablev_available_reservations["rsvDate"] = array("type"=>7,"varname"=>"rsvDate", "name" => "rsvDate", "autoInc" => "0");
$dalTablev_available_reservations["rsvTime"] = array("type"=>200,"varname"=>"rsvTime", "name" => "rsvTime", "autoInc" => "0");
$dalTablev_available_reservations["locationId"] = array("type"=>3,"varname"=>"locationId", "name" => "locationId", "autoInc" => "0");
$dalTablev_available_reservations["reservationCount"] = array("type"=>20,"varname"=>"reservationCount", "name" => "reservationCount", "autoInc" => "0");
$dalTablev_available_reservations["availableReservations"] = array("type"=>20,"varname"=>"availableReservations", "name" => "availableReservations", "autoInc" => "0");

$dal_info["figura_at_10_101_125_22__v_available_reservations"] = &$dalTablev_available_reservations;
?>