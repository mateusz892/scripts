<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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

$sql = "UPDATE `jos_get_xml_two`"
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
