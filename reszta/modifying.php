<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

/*$sql = "DELETE FROM `jos_get_xml_two`"
."WHERE shopName='madnezz'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory=''"
."WHERE maincategory='Bielizna-damska'"
."AND id>='128640'"
."AND ((categoryTwo='') OR (categoryThree=''))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "DELETE FROM `jos_get_xml_two`"
."WHERE shop='BliskoCiala.com.pl'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_jmap_metainfo`"
."SET meta_title=REPLACE(meta_title, 'jesień 2020', 'zima 2021')"
."WHERE meta_title LIKE '%jesień 2020%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
