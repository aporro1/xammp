<?php 

require_once(getabspath("include/LocaleFunctions.php"));

//	locale settings
//	locale settings

$locale_info = array();

$locale_info["LOCALE_LANGNAME"]="el";
$locale_info["LOCALE_CTRYNAME"]="GR";
//	date settings
$locale_info["LOCALE_ICENTURY"]="1";
$locale_info["LOCALE_IDATE"]="1";
$locale_info["LOCALE_ILDATE"]="1";
$locale_info["LOCALE_SDATE"]="/";
$locale_info["LOCALE_SLONGDATE"]="dddd, d MMMM yyyy";
$locale_info["LOCALE_SSHORTDATE"]="d/M/yyyy";
//	weekday names
$locale_info["LOCALE_IFIRSTDAYOFWEEK"]="0";
$locale_info["LOCALE_SDAYNAME1"]="Δευτέρα";
$locale_info["LOCALE_SDAYNAME2"]="Τρίτη";
$locale_info["LOCALE_SDAYNAME3"]="Τετάρτη";
$locale_info["LOCALE_SDAYNAME4"]="Πέμπτη";
$locale_info["LOCALE_SDAYNAME5"]="Παρασκευή";
$locale_info["LOCALE_SDAYNAME6"]="Σάββατο";
$locale_info["LOCALE_SDAYNAME7"]="Κυριακή";
$locale_info["LOCALE_SABBREVDAYNAME1"]="Δευ";
$locale_info["LOCALE_SABBREVDAYNAME2"]="Τρι";
$locale_info["LOCALE_SABBREVDAYNAME3"]="Τετ";
$locale_info["LOCALE_SABBREVDAYNAME4"]="Πεμ";
$locale_info["LOCALE_SABBREVDAYNAME5"]="Παρ";
$locale_info["LOCALE_SABBREVDAYNAME6"]="Σαβ";
$locale_info["LOCALE_SABBREVDAYNAME7"]="Κυρ";
//	month names
$locale_info["LOCALE_SMONTHNAME1"]="Ιανουάριος";
$locale_info["LOCALE_SMONTHNAME2"]="Φεβρουάριος";
$locale_info["LOCALE_SMONTHNAME3"]="Μάρτιος";
$locale_info["LOCALE_SMONTHNAME4"]="Απρίλιος";
$locale_info["LOCALE_SMONTHNAME5"]="Μάιος";
$locale_info["LOCALE_SMONTHNAME6"]="Ιούνιος";
$locale_info["LOCALE_SMONTHNAME7"]="Ιούλιος";
$locale_info["LOCALE_SMONTHNAME8"]="Αύγουστος";
$locale_info["LOCALE_SMONTHNAME9"]="Σεπτέμβριος";
$locale_info["LOCALE_SMONTHNAME10"]="Οκτώβριος";
$locale_info["LOCALE_SMONTHNAME11"]="Νοέμβριος";
$locale_info["LOCALE_SMONTHNAME12"]="Δεκέμβριος";
$locale_info["LOCALE_SABBREVMONTHNAME1"]="Ιαν";
$locale_info["LOCALE_SABBREVMONTHNAME2"]="Φεβ";
$locale_info["LOCALE_SABBREVMONTHNAME3"]="Μαρ";
$locale_info["LOCALE_SABBREVMONTHNAME4"]="Απρ";
$locale_info["LOCALE_SABBREVMONTHNAME5"]="Μαϊ";
$locale_info["LOCALE_SABBREVMONTHNAME6"]="Ιουν";
$locale_info["LOCALE_SABBREVMONTHNAME7"]="Ιουλ";
$locale_info["LOCALE_SABBREVMONTHNAME8"]="Αυγ";
$locale_info["LOCALE_SABBREVMONTHNAME9"]="Σεπ";
$locale_info["LOCALE_SABBREVMONTHNAME10"]="Οκτ";
$locale_info["LOCALE_SABBREVMONTHNAME11"]="Νοε";
$locale_info["LOCALE_SABBREVMONTHNAME12"]="Δεκ";
//	time settings
$locale_info["LOCALE_ITIME"]="0";
$locale_info["LOCALE_ITIMEMARKPOSN"]="0";
$locale_info["LOCALE_ITLZERO"]="0";
$locale_info["LOCALE_S1159"]="πμ";
$locale_info["LOCALE_S2359"]="μμ";
$locale_info["LOCALE_STIME"]=":";
$locale_info["LOCALE_STIMEFORMAT"]="h:mm:ss tt";
//	currency settings
$locale_info["LOCALE_ICURRDIGITS"]="2";
$locale_info["LOCALE_ICURRENCY"]="3";
$locale_info["LOCALE_INEGCURR"]="8";
$locale_info["LOCALE_SCURRENCY"]="€";
$locale_info["LOCALE_SMONDECIMALSEP"]=",";
$locale_info["LOCALE_SMONGROUPING"]="3;0";
$locale_info["LOCALE_SMONTHOUSANDSEP"]=".";
//	numbers formatting settings
$locale_info["LOCALE_IDIGITS"]="2";
$locale_info["LOCALE_INEGNUMBER"]="1";
$locale_info["LOCALE_SDECIMAL"]=",";
$locale_info["LOCALE_SGROUPING"]="3;0";
$locale_info["LOCALE_SNEGATIVESIGN"]="-";
$locale_info["LOCALE_SPOSITIVESIGN"]="";
$locale_info["LOCALE_STHOUSAND"]=".";
;
$locale_info["LOCALE_ILONGDATE"]=GetLongDateFormat();
 
 /**
 * 	converts mysql datetime to array(year,month,day,hour,minute,second)
 * @intellisense
 */
function db2time($str)
{
	$now=localtime(time(),1);
    $isdst=$now["tm_isdst"];
    $havedate=0;
	$havetime=0;
	if(is_numeric($str))
//	timestamp
	{
		$havedate=1;
		$len=strlen($str);
		if($len>=10)
		  $havetime=1;
		switch($len)
		{
		  case 14:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 12:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 10:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 18:
		  	$pattern="/(\d{4})(\d{2})(\d{2})/";
			break;
		  case 8:
		  	$pattern="/(\d{4})(\d{2})(\d{2})/";
			break;
		  case 6:
		  	$pattern="/(\d{2})(\d{2})(\d{2})/";
			break;
		  case 4:
		  	$pattern="/(\d{2})(\d{2})/";
			break;
		  case 2:
		  	$pattern="/(\d{2})/";
			break;
	      default: 
		    return array();
	    }
		if(preg_match($pattern,$str,$parsed))
		{
		  $y=$parsed[1];
		  $mo=(count($parsed)>2)?$parsed[2]:1;
		  $d=(count($parsed)>3)?$parsed[3]:1;
		  $h=(count($parsed)>4)?$parsed[4]:0;
		  $mi=(count($parsed)>5)?$parsed[5]:0;
		  $s=(count($parsed)>6)?$parsed[6]:0;
		}
		else
		  return array();
		  
	}
	else if(is_string($str))
// date,time,datetime
	{
	  if(preg_match("/(\d{4})-(\d{1,2})-(\d{1,2}) (\d{1,2}):(\d{1,2}):(\d{1,2})/", $str, $parsed)) // datetime
		{
			$y = $parsed[1];
			$mo = $parsed[2];
			$d = $parsed[3];
			$h = $parsed[4];
			$mi = $parsed[5];
			$s = $parsed[6];
		    $havedate=1;
			$havetime=1;
		}
		else if(preg_match("/(\d{4})-(\d{1,2})-(\d{1,2})/", $str, $parsed)) // date
		{
			$y = $parsed[1];
			$mo = $parsed[2];
			$d = $parsed[3];
			$h = 0;
			$mi = 0;
			$s = 0;
		    $havedate=1;
		}
		else if(preg_match("/(\d{2})-(\d{1,2})-(\d{1,2})/", $str, $parsed)) // time
		{
		  $y=$now["tm_year"];
		  $mo=$now["tm_mon"]+1;
		  $d=$now["tm_mday"];
		  $h = $parsed[1];
		  $mi = $parsed[2];
		  $s = $parsed[3];
		  $havetime=1;
		}
		else 
			return array();
	}
	else
	{
		return array();
	}
	if(!$havetime)
	{
		$h=0;
		$mi=0;
		$s=0;
	}
	if(!$havedate)
	{
		$y=$now["tm_year"]+1900;
		$mo=$now["tm_mon"]+1;
		$d=$now["tm_mday"];
	}
//	return mktime($h,$mi,$s,$mo,$d,$y);
	return array((integer)$y,(integer)$mo,(integer)$d,(integer)$h,(integer)$mi,(integer)$s);
}

?>