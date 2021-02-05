<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-maxi;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%długa%') OR (description LIKE '%długa%') OR (name LIKE '%do ziem%') OR (description LIKE '%do ziem%') OR (name LIKE '%maxi%') OR (description LIKE '%maxi%') OR (shopcategory LIKE '%długie%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-maxi%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-maxi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%długa%') OR (description LIKE '%długa%') OR (name LIKE '%do ziem%') OR (description LIKE '%do ziem%') OR (name LIKE '%maxi%') OR (description LIKE '%maxi%') OR (shopcategory LIKE '%długie%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-maxi'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-maxi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%długa%') OR (description LIKE '%długa%') OR (name LIKE '%do ziem%') OR (description LIKE '%do ziem%') OR (name LIKE '%maxi%') OR (description LIKE '%maxi%') OR (shopcategory LIKE '%długie%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-maxi'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-maxi'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-midi;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%midi%') OR (description LIKE '%midi%') OR (shopcategory LIKE '%midi%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-midi%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-midi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%midi%') OR (description LIKE '%midi%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-midi'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-midi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%midi%') OR (description LIKE '%midi%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-midi'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-midi'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-mini;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%mini%') OR (description LIKE '%mini%') OR (shopcategory LIKE '%mini%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-mini%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-mini'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%mini%') OR (description LIKE '%mini%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-mini'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-mini'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%mini%') OR (description LIKE '%mini%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-mini'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-mini'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Sukienki-mlodziezowe'"
."WHERE ((name LIKE '%sukienka%'))"
."AND ((name LIKE '%młodzież%') OR (description LIKE '%młodzież%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-mlodziezowe'"
."WHERE ((name LIKE '%sukienka%'))"
."AND ((name LIKE '%młodzież%') OR (description LIKE '%młodzież%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-mlodziezowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-mlodziezowe'"
."WHERE ((name LIKE '%sukienka%'))"
."AND ((name LIKE '%młodzież%') OR (description LIKE '%młodzież%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-mlodziezowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-mlodziezowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-na-wesele;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wesel%') OR (description LIKE '%wesel%') OR (shopcategory LIKE '%wesel%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-na-wesele%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-na-wesele'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wesel%') OR (description LIKE '%wesel%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-wesele'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-na-wesele'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wesel%') OR (description LIKE '%wesel%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-wesele'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-na-wesele'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-olowkowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%ołówko%') OR (description LIKE '%ołówko%') OR (shopcategory LIKE '%ołówko%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-olowkowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-olowkowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%ołówko%') OR (description LIKE '%ołówko%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-olowkowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-olowkowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%ołówko%') OR (description LIKE '%ołówko%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-olowkowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-olowkowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-pastelowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%pastelo%') OR (description LIKE '%pastelo%') OR (shopcategory LIKE '%pastelo%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-pastelowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-pastelowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%pastelo%') OR (description LIKE '%pastelo%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-pastelowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-pastelowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%pastelo%') OR (description LIKE '%pastelo%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-pastelowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-pastelowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-plus-size;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%') OR (name LIKE '%dla puszys%') OR (description LIKE '%dla puszys%') OR (shopcategory LIKE '%plus siz%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-plus-size%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-plus-size'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%') OR (name LIKE '%dla puszys%') OR (description LIKE '%dla puszys%') OR (shopcategory LIKE '%plus siz%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-plus-size'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-plus-size'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%') OR (name LIKE '%dla puszys%') OR (description LIKE '%dla puszys%') OR (shopcategory LIKE '%plus siz%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-plus-size'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-plus-size'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-rozkloszowane;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%rozkloszow%') OR (description LIKE '%rozkloszow%') OR (shopcategory LIKE '%rozkloszow%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-rozkloszowane%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-rozkloszowane'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%rozkloszow%') OR (description LIKE '%rozkloszow%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-rozkloszowane'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-rozkloszowane'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%rozkloszow%') OR (description LIKE '%rozkloszow%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-rozkloszowane'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-rozkloszowane'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-sportowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sport%') OR (description LIKE '%sport%') OR (shopcategory LIKE '%sport%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-sportowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-sportowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sport%') OR (description LIKE '%sport%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-sportowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-sportowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sport%') OR (description LIKE '%sport%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-sportowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-sportowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-trapezowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%trapez%') OR (description LIKE '%trapez%') OR (shopcategory LIKE '%trapez%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-trapezowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-trapezowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%trapez%') OR (description LIKE '%trapez%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-trapezowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-trapezowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%trapez%') OR (description LIKE '%trapez%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-trapezowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-trapezowe'"
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
."SET categoryTwo='Sukienki-wieczorowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-wieczorowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-wieczorowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-wieczorowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-wieczorowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}