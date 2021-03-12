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
}

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

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=REPLACE(categoryOne, 'Sukienki-wieczorowe;', '')"
."WHERE categoryOne LIKE '%Sukienki-wieczorowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-wieczorowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%') OR (shopcategory LIKE '%wiecz%'))"
."AND (id % '3') != '0'"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-wieczorowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material=REPLACE(material, 'wełniane;', '')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET materialName=REPLACE(materialName, 'welniane;', '')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material=REPLACE(material, 'lniane;', '')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET materialName=REPLACE(materialName, 'lniane;', '')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'lniane;'), materialName= CONCAT(materialName, 'lniane;')"
."WHERE ((name LIKE '% len %') OR (description LIKE '% len %') OR (name LIKE '% lnu %') OR (description LIKE '% lnu %') OR (name LIKE '% len %') OR (description LIKE '% len %') OR (name LIKE '% lnu %') OR (description LIKE '% lnu %') OR (name LIKE '% lnian%') OR (description LIKE '% lnian%'))"
."AND material NOT LIKE '% lniane%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (categoryOne='Krawaty') OR (categoryOne='Poszetki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, 'na 18;'), occasionName= CONCAT(occasionName, 'na-18;')"
."AND ((name LIKE '%na 18%') OR (description LIKE '%na 18%') OR (name LIKE '%na osiemn%') OR (description LIKE '%na osiemn%') OR (name LIKE '%mini%') OR (description LIKE '%mini%') OR (shopcategory LIKE '%mini%'))"
."AND occasion NOT LIKE '%na 18%'"
."AND (id % '2') = '0'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}



$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'z rozcięciem;'), styleName= CONCAT(styleName, 'z-rozcieciem;')"
."WHERE ((name LIKE '%rozcięc%') OR (description LIKE '%rozcięc%'))"
."AND style NOT LIKE '%z rozcięciem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/


$sql = "UPDATE `jos_get_xml_two`"
."SET pattern=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET patternName=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}