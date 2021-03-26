<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET sleeveLength= CONCAT(sleeveLength, ';z długim rękawem'), sleeveLengthName= CONCAT(sleeveLength, ';z-dlugim-rekawem')"
."WHERE ((name LIKE '%długim rękawem%') OR (description LIKE '%długim rękawem%') OR (name LIKE '%długi rękaw%') OR (description LIKE '%długi rękaw%') OR (name LIKE '%długimi rękaw%') OR (description LIKE '%długimi rękaw%') OR (shopcategory LIKE '%długi rękaw%') OR (shopcategory LIKE '%długim rękawem%') OR (shopcategory LIKE '%długimi rękaw%'))"
."AND sleeveLength NOT LIKE '%;z długim rękawem%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET sleeveLength= CONCAT(sleeveLength, ';na ramiączkach'), sleeveLengthName= CONCAT(sleeveLength, ';na-ramiaczkach')"
."WHERE ((name LIKE '%ramiączk%') OR (description LIKE '%ramiączk%'))"
."AND sleeveLength NOT LIKE '%;na ramiączkach%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET sleeveLength='z krótkim rękawem', sleeveLengthName='z-krotkim-rekawem'"
."WHERE ((name LIKE '%krótki ręka%') OR (description LIKE '%krótki ręka%') OR (name LIKE '%krótkim ręka%') OR (description LIKE '%krótkim ręka%'))"
."AND sleeveLength=''"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET sleeveLength='bez rękawa', sleeveLengthName='bez-rekawa'"
."WHERE ((name LIKE '%bez ręka%') OR (description LIKE '%bez ręka%'))"
."AND sleeveLength=''"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/
