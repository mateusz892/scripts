<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

/*$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'bez wzorów;'), patternName= CONCAT(patternName, 'bez-wzorow;')"
."WHERE ((name LIKE '%bez wzor%') OR (description LIKE '%bez wzor%'))"
."AND pattern NOT LIKE '%bez wzorów;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w kratkę;'), patternName= CONCAT(patternName, 'w-kratke;')"
."WHERE ((name LIKE '%kratka %') OR (description LIKE '%kratka %') OR (name LIKE '%kratkę %') OR (description LIKE '%kratkę %'))"
."AND pattern NOT LIKE '%w kratkę;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z nadrukiem;'), patternName= CONCAT(patternName, 'z-nadrukiem;')"
."WHERE ((name LIKE '%nadrukiem %') OR (description LIKE '%nadrukiem %') OR (name LIKE '%nadruk %') OR (description LIKE '%nadruk %'))"
."AND pattern NOT LIKE '%z nadrukiem;%'"
."AND ((maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w paski;'), patternName= CONCAT(patternName, 'w-paski;')"
."WHERE ((name LIKE '%paski %') OR (description LIKE '%paski %') OR (name LIKE '% paski%') OR (description LIKE '% paski%'))"
."AND pattern NOT LIKE '%w paski;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z aplikacją;'), patternName= CONCAT(patternName, 'z-aplikacja;')"
."WHERE ((name LIKE '%aplikacj%') OR (description LIKE '%aplikacj%'))"
."AND pattern NOT LIKE '%z aplikacją;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z abstrakcją;'), patternName= CONCAT(patternName, 'z-abstrakcja;')"
."WHERE ((name LIKE '%abstrakcj%') OR (description LIKE '%abstrakcj%'))"
."AND pattern NOT LIKE '%z abstrakcją;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w kwiaty;'), patternName= CONCAT(patternName, 'w-kwiaty;')"
."WHERE ((name LIKE '%kwiat%') OR (description LIKE '%kwiat%') OR (name LIKE '%kwiecis%') OR (description LIKE '%kwiecis%'))"
."AND pattern NOT LIKE '%w kwiaty;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w grochy;'), patternName= CONCAT(patternName, 'w-grochy;')"
."WHERE ((name LIKE '%groch%') OR (description LIKE '%groch%'))"
."AND pattern NOT LIKE '%w grochy;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Stroje-kapielowe-damskie') OR (categoryOne='Szaliki-damskie') OR (categoryOne='Szpilki-damskie') OR (subcategoryOne='Tankini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z nadrukami;'), patternName= CONCAT(patternName, 'z-nadrukami;')"
."WHERE ((name LIKE '%nadruka%') OR (description LIKE '%nadruka%') OR (name LIKE '%nadruki %') OR (description LIKE '%nadruki %'))"
."AND pattern NOT LIKE '%z nadrukami;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z motywem zwierzęcym;'), patternName= CONCAT(patternName, 'z-motywem-zwierzecym;')"
."WHERE ((name LIKE '%motywie zwierzę%') OR (description LIKE '%motywie zwierzę%') OR (name LIKE '%motyw zwierzęc%') OR (description LIKE '%motyw zwierzęc%'))"
."AND pattern NOT LIKE '%z motywem zwierzęcym;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z napisami;'), patternName= CONCAT(patternName, 'z-napisami;')"
."WHERE ((name LIKE '%napisam%') OR (description LIKE '%napisam%'))"
."AND pattern NOT LIKE '%z napisami;%'"
."AND ((maincategory='Bluzy-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'z haftem;'), patternName= CONCAT(patternName, 'z-haftem;')"
."WHERE ((name LIKE '%haft%') OR (description LIKE '%haft%'))"
."AND pattern NOT LIKE '%z haftem;%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w geometryczne wzory;'), patternName= CONCAT(patternName, 'w-geometryczne-wzory;')"
."WHERE ((name LIKE '%geometr%') OR (description LIKE '%geometr%'))"
."AND pattern NOT LIKE '%w geometryczne wzory;%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'moro;'), patternName= CONCAT(patternName, 'moro;')"
."WHERE ((name LIKE '%moro %') OR (description LIKE '%moro %'))"
."AND pattern NOT LIKE '%moro;%'"
."AND ((maincategory='Buty-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w groszki;'), patternName= CONCAT(patternName, 'w-groszki;')"
."WHERE ((name LIKE '%grosz%') OR (description LIKE '%grosz%') OR (shopcategory LIKE '%grosz%'))"
."AND pattern NOT LIKE '%w groszki;%'"
."AND ((maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'w kratę;'), patternName= CONCAT(patternName, 'w-krate;')"
."WHERE ((name LIKE '%krata %') OR (description LIKE '%krata %') OR (name LIKE '%kratę %') OR (description LIKE '%kratę %') OR (name LIKE '% krata%') OR (description LIKE '% krata%') OR (name LIKE '% kratę%') OR (description LIKE '% kratę%'))"
."AND pattern NOT LIKE '%w kratę;%'"
."AND ((maincategory='Sukienki'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET pattern= CONCAT(pattern, 'paisley;'), patternName= CONCAT(patternName, 'paisley;')"
."WHERE ((name LIKE '%paisley%') OR (description LIKE '%paisley%'))"
."AND pattern NOT LIKE '%paisley;%'"
."AND ((categoryOne='Krawaty'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/
