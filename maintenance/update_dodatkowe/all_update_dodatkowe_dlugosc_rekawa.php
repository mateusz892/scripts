<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET sleeveLength='z długim rękawem', sleeveLengthName='z-dlugim-rekawem'"
."WHERE ((name LIKE '%długi ręka%') OR (description LIKE '%długi ręka%') OR (name LIKE '%długim ręka%') OR (description LIKE '%długim ręka%'))"
."AND sleeveLength=''"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET sleeveLength='z krótkim rękawem', sleeveLengthName='z-krotkim-rekawem'"
."WHERE ((name LIKE '%krótki ręka%') OR (description LIKE '%krótki ręka%') OR (name LIKE '%krótkim ręka%') OR (description LIKE '%krótkim ręka%'))"
."AND sleeveLength=''"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
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
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
