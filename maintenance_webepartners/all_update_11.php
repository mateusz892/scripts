<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-maxi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%maxi%') OR (description LIKE '%maxi%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryTwo='Sukienki-maxi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%maxi%') OR (description LIKE '%maxi%'))"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryThree='Sukienki-maxi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%maxi%') OR (description LIKE '%maxi%'))"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-midi'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%midi%') OR (description LIKE '%midi%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-mini'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%mini%') OR (description LIKE '%mini%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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
}

/*$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-na-wesele'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wesel%') OR (description LIKE '%wesel%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-olowkowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%ołówko%') OR (description LIKE '%ołówko%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-pastelowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%pastelo%') OR (description LIKE '%pastelo%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-plus-size'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryTwo='Sukienki-plus-size'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%'))"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryThree='Sukienki-plus-size'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%'))"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-rozkloszowane'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%rozkloszow%') OR (description LIKE '%rozkloszow%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-sportowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sport%') OR (description LIKE '%sport%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-trapezowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%trapez%') OR (description LIKE '%trapez%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-wieczorowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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