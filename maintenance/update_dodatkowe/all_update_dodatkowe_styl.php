<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'młodzieżowe;'), styleName= CONCAT(styleName, 'mlodziezowe;')"
."WHERE ((name LIKE '%młodzież%') OR (description LIKE '%młodzież%'))"
."AND style NOT LIKE '%młodzieżowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'młodzieżowe;'), styleName= CONCAT(styleName, 'mlodziezowe;')"
."WHERE ((categoryOne LIKE '%Sukienki-mini%') OR (categoryOne LIKE '%Sukienki-koronkowe%'))"
."AND style NOT LIKE '%młodzieżowe%'"
."AND (maincategory='Sukienki')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'casualowe;'), styleName= CONCAT(styleName, 'casualowe;')"
."WHERE ((name LIKE '%casual%') OR (description LIKE '%casual%'))"
."AND style NOT LIKE '%casualowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'eleganckie;'), styleName= CONCAT(styleName, 'eleganckie;')"
."WHERE ((name LIKE '%elegancj%') OR (description LIKE '%elegancj%') OR (name LIKE '%eleganck%') OR (description LIKE '%eleganck%'))"
."AND style NOT LIKE '%eleganckie%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'boho;'), styleName= CONCAT(styleName, 'boho;')"
."WHERE ((name LIKE '%boho %') OR (description LIKE '%boho %'))"
."AND style NOT LIKE '%boho%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'klasyczne;'), styleName= CONCAT(styleName, 'klasyczne;')"
."WHERE ((name LIKE '%klasyk%') OR (description LIKE '%klasyk%') OR (name LIKE '%klasyczn%') OR (description LIKE '%klasyczn%'))"
."AND style NOT LIKE '%klasyczne%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'retro;'), styleName= CONCAT(styleName, 'retro;')"
."WHERE ((name LIKE '%retro %') OR (description LIKE '%retro %'))"
."AND style NOT LIKE '%retro%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'street;'), styleName= CONCAT(styleName, 'street;')"
."WHERE ((name LIKE '%street %') OR (description LIKE '%street %'))"
."AND style NOT LIKE '%street%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style='glamour', styleName='glamour'"
."WHERE ((name LIKE '%glamour%') OR (description LIKE '%glamour%'))"
."AND style NOT LIKE '%młodzieżowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'rockowe;'), styleName= CONCAT(styleName, 'rockowe;')"
."WHERE ((name LIKE '%rockow%') OR (description LIKE '%rockow%'))"
."AND style NOT LIKE '%rockowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'vintage;'), styleName= CONCAT(styleName, 'vintage;')"
."WHERE ((name LIKE '%vintage%') OR (description LIKE '%vintage%'))"
."AND style NOT LIKE '%vintage%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style='sportowe', styleName='sportowe'"
."WHERE ((name LIKE '%sport %') OR (description LIKE '%sport %') OR (name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND style NOT LIKE '%młodzieżowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'marynarskie;'), styleName= CONCAT(styleName, 'marynarskie;')"
."WHERE ((name LIKE '%marynars%') OR (description LIKE '%marynars%'))"
."AND style NOT LIKE '%marynarskie%'"
."AND ((maincategory='Plaszcze-damskie') OR (maincategory='Swetry-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'militarne;'), styleName= CONCAT(styleName, 'militarne;')"
."WHERE ((name LIKE '%militar%') OR (description LIKE '%militar%'))"
."AND style NOT LIKE '%militarne%'"
."AND ((maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'etno;'), styleName= CONCAT(styleName, 'etno;')"
."WHERE ((name LIKE '%etno %') OR (description LIKE '%etno %'))"
."AND style NOT LIKE '%etno%'"
."AND ((maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'biznesowe;'), styleName= CONCAT(styleName, 'biznesowe;')"
."WHERE ((name LIKE '%biznes%') OR (description LIKE '%biznes%'))"
."AND style NOT LIKE '%biznesowe%'"
."AND ((maincategory='Spodnice') OR (maincategory='Sukienki'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, 'wakacyjne;'), styleName= CONCAT(styleName, 'wakacyjne;')"
."WHERE ((name LIKE '%wakacje %') OR (description LIKE '%wakacje %') OR (name LIKE '%wakacyj%') OR (description LIKE '%wakacyj%'))"
."AND style NOT LIKE '%wakacyjne%'"
."AND ((maincategory='Sukienki') OR (categoryOne='Plecaki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
