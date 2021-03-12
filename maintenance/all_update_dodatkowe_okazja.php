<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na studniówkę'), occasionName= CONCAT(occasionName, ';na-studniowke')"
."WHERE ((name LIKE '%studnió%') OR (description LIKE '%studnió%') OR (categoryOne LIKE '%Sukienki-koronkowe%'))"
."AND occasion NOT LIKE '%;na studniówkę%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';sylwestrowe'), occasionName= CONCAT(occasionName, ';sylwestrowe')"
."WHERE ((name LIKE '%sylwestr%') OR (description LIKE '%sylwestr%') OR (shopcategory LIKE '%sylwestr%') OR (description LIKE '%cekin%') OR (name LIKE '%cekin%'))"
."AND occasion NOT LIKE '%;sylwestrowe%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na komunię'), occasionName= CONCAT(occasionName, ';na-komunie')"
."WHERE ((name LIKE '%komun%') OR (description LIKE '%komun%') OR (shopcategory LIKE '%komun%') OR (name LIKE '%wesel%') OR (description LIKE '%wesel%') OR (shopcategory LIKE '%wesel%'))"
."AND occasion NOT LIKE '%;na komunię%'"
."AND (id % '2') != '0'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na co dzień'), occasionName= CONCAT(occasionName, ';na-co-dzien')"
."WHERE ((name LIKE '%casual%') OR (description LIKE '%casual%') OR (name LIKE '%co dzień%') OR (description LIKE '%co dzień%'))"
."AND occasion NOT LIKE '%;na co dzień%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';do pracy'), occasionName= CONCAT(occasionName, ';do-pracy')"
."WHERE ((name LIKE '%do prac%') OR (description LIKE '%do prac%') OR (shopcategory LIKE '%do prac%'))"
."AND occasion NOT LIKE '%;do pracy%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na imprezę'), occasionName= CONCAT(occasionName, ';na-impreze')"
."WHERE ((name LIKE '%imprez%') OR (description LIKE '%imprez%') OR (name LIKE '%koktajlo%') OR (description LIKE '%koktajlo%') OR (shopcategory LIKE '%koktajlo%'))"
."AND (id % '2') != '0'"
."AND occasion NOT LIKE '%;na imprezę%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';balowe'), occasionName= CONCAT(occasionName, ';balowe')"
."WHERE ((name LIKE '%bal%') OR (description LIKE '%bal%'))"
."AND occasion NOT LIKE '%;balowe%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na chrzciny'), occasionName= CONCAT(occasionName, ';na-chrzciny')"
."WHERE ((name LIKE '%chrzes%') OR (description LIKE '%chrzes%') OR (name LIKE '%chrzt%') OR (description LIKE '%chrzt%') OR (name LIKE '%chrzci%') OR (description LIKE '%chrzci%'))"
."AND occasion NOT LIKE '%;na chrzciny%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';plażowe'), occasionName= CONCAT(occasionName, ';plazowe')"
."WHERE ((name LIKE '%plaż%') OR (description LIKE '%plaż%') OR (shopcategory LIKE '%plaż%'))"
."AND occasion NOT LIKE '%;plażowe%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na święta'), occasionName= CONCAT(occasionName, ';na-swieta')"
."WHERE ((name LIKE '%święt%') OR (description LIKE '%święt%') OR (shopcategory LIKE '%święt%'))"
."AND occasion NOT LIKE '%;na święta%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na 18'), occasionName= CONCAT(occasionName, ';na-18')"
."WHERE ((name LIKE '%na 18%') OR (description LIKE '%na 18%') OR (name LIKE '%na osiemn%') OR (description LIKE '%na osiemn%') OR (name LIKE '%koktajlo%') OR (description LIKE '%koktajlo%') OR (shopcategory LIKE '%koktajlo%'))"
."AND occasion NOT LIKE '%;na 18%'"
."AND (id % '2') = '0'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';na wesele'), occasionName= CONCAT(occasionName, ';na-wesele')"
."WHERE ((name LIKE '%wesel%') OR (description LIKE '%wesel%') OR (categoryOne LIKE '%Sukienki-z-cekinami%') OR (categoryOne LIKE '%Sukienki-koktajlowe%') OR (categoryOne LIKE '%Sukienki-koronkowe%') OR (categoryOne LIKE '%Sukienki-pastelowe%'))"
."AND occasion NOT LIKE '%;na wesele%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, ';wieczorowe'), occasionName= CONCAT(occasionName, ';wieczorowe')"
."WHERE ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%') OR (categoryOne LIKE '%Sukienki-z-cekinami%') OR (categoryOne LIKE '%Sukienki-koktajlowe%'))"
."AND occasion NOT LIKE '%;wieczorowe%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/
