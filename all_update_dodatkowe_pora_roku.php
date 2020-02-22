<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET season= CONCAT(season, 'na wiosnę;'), seasonName= CONCAT(seasonName, 'na-wiosne;')"
."WHERE ((name LIKE '%wiosna %') OR (description LIKE '%wiosna %') OR (name LIKE '%wiosny %') OR (description LIKE '%wiosny %') OR (name LIKE '%wiosenn%') OR (description LIKE '%wiosenn%'))"
."AND season NOT LIKE '%na wiosnę%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET season= CONCAT(season, 'na lato;'), seasonName= CONCAT(seasonName, 'na-lato;')"
."WHERE ((name LIKE '%lato %') OR (description LIKE '%lato %') OR (description LIKE '%letni%') OR (name LIKE '%letni%'))"
."AND season NOT LIKE '%na lato%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET season= CONCAT(season, 'na jesień;'), seasonName= CONCAT(seasonName, 'na-jesien;')"
."WHERE ((name LIKE '%jesień %') OR (description LIKE '%jesień %') OR (description LIKE '%jesienn%') OR (name LIKE '%jesienn%'))"
."AND season NOT LIKE '%na jesień%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET season= CONCAT(season, 'na zimę;'), seasonName= CONCAT(seasonName, 'na-zime;')"
."WHERE ((name LIKE '%zima %') OR (description LIKE '%zima %') OR (description LIKE '%zimę %') OR (name LIKE '%zimę %') OR (description LIKE '%zimow%') OR (name LIKE '%zimow%'))"
."AND season NOT LIKE '%na zimę%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Buty-damskie') OR (maincategory='Buty-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
