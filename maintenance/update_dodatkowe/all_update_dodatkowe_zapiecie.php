<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET clasp= CONCAT(clasp, 'bez zapięcia;'), claspName= CONCAT(claspName, 'bez-zapiecia;')"
."WHERE ((name LIKE '%bez zapię%') OR (description LIKE '%bez zapię%'))"
."AND clasp NOT LIKE '%bez zapięcia%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET clasp= CONCAT(clasp, 'sznurowane;'), claspName= CONCAT(claspName, 'sznurowane;')"
."WHERE ((name LIKE '%sznurówk%') OR (description LIKE '%sznurówk%') OR (name LIKE '%sznurowa%') OR (description LIKE '%sznurowa%'))"
."AND clasp NOT LIKE '%sznurowane%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET clasp= CONCAT(clasp, 'na zamek;'), claspName= CONCAT(claspName, 'na-zamek;')"
."WHERE ((name LIKE '%zamek %') OR (description LIKE '%zamek %'))"
."AND clasp NOT LIKE '%na zamek%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET clasp= CONCAT(clasp, 'z klamrami;'), claspName= CONCAT(claspName, 'z-klamrami;')"
."WHERE ((name LIKE '%klamram%') OR (description LIKE '%klamram%') OR (name LIKE '%z klamr%') OR (description LIKE '%z klamr%'))"
."AND clasp NOT LIKE '%z klamrami%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET clasp= CONCAT(clasp, 'na rzepy;'), claspName= CONCAT(claspName, 'na-rzepy;')"
."WHERE ((name LIKE '%rzepy %') OR (description LIKE '%rzepy %') OR (name LIKE '%z rzepam%') OR (description LIKE '%z rzepam%'))"
."AND clasp NOT LIKE '%na rzepy%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
