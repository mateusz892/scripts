<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sqlKolor = "SELECT `kolor_id`, `kolor`"
."FROM `jos_kolor`"
;

$resultKolor = mysql_query($sqlKolor);

if(!$resultKolor) {
	echo 'error';
} else {
	echo 'succes';
}

while($xmlKolor = mysql_fetch_object($resultKolor)) {

	$sql = "UPDATE `jos_get_xml_two`"
	."SET colorId='$xmlKolor->kolor_id'"
	."WHERE colorName='$xmlKolor->kolor'"
	."AND colorId='0'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
