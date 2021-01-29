<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Buty-sportowe-chlopiece'"
."WHERE categoryOne='Buty-sportowe-dzieciece'"
."AND subcategoryOne!='Buty-sportowe-dziewczece'"
."AND (colorName!='fioletowe')"
."AND (colorName!='rozowe')"
."AND (colorName!='wielokolorowe')"
."AND (colorName!='')"
."AND subcategoryOne=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Kalosze-chlopiece'"
."WHERE categoryOne='Kalosze-dzieciece'"
."AND subcategoryOne!='Kalosze-dziewczece'"
."AND (colorName!='fioletowe')"
."AND (colorName!='rozowe')"
."AND (colorName!='wielokolorowe')"
."AND (colorName!='')"
."AND subcategoryOne=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Kurtki-chlopiece'"
."WHERE categoryOne='Kurtki-dzieciece'"
."AND subcategoryOne!='Kurtki-dziewczece'"
."AND (colorName!='fioletowe')"
."AND (colorName!='rozowe')"
."AND (colorName!='wielokolorowe')"
."AND (colorName!='')"
."AND subcategoryOne=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET brand='CH. CREATION'"
."WHERE brand='CH. CREATION'"
."OR brand='CH - CREATION'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET brand='Esotiq & Henderson'"
."WHERE brand='Esotiq henderson'"
."OR brand='Esotiq  henderson'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET brand='L. LUX. SHOES'"
."WHERE brand='L. LUX. SHOES'"
."OR brand='L.LUX SHOES'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET brand='producent niezdefiniowany'"
."WHERE brand='producent niezdefiniowany'"
."OR brand='* producent niezdefiniowany'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET brand='W.Potocki'"
."WHERE brand='W. POTOCKI'"
."OR brand='W.Potocki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET brand='WĘC-Twój Jubiler'"
."WHERE brand='WĘC - Twój Jubiler'"
."OR brand='WĘC-Twój Jubiler'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET size='S-M'"
."WHERE size='S-M'"
."OR size='S / M'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET size='XS-S'"
."WHERE size='XS / S'"
."OR size='XS/S'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
