<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-na-obcasie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na obcas%') OR (description LIKE '%na obcas%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-na-obcasie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na obcas%') OR (description LIKE '%na obcas%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-na-obcasie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-na-obcasie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na obcas%') OR (description LIKE '%na obcas%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-na-obcasie'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-na-obcasie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Botki-na-obcasie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-na-obcasie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-na-obcasie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-na-platformie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na platfor%') OR (description LIKE '%na platfor%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-na-platformie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na platfor%') OR (description LIKE '%na platfor%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-na-platformie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-na-platformie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na platfor%') OR (description LIKE '%na platfor%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-na-platformie'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-na-platformie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Botki-na-platformie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-na-platformie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-na-platformie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-peep-toe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%peep toe%') OR (description LIKE '%peep toe%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-peep-toe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%peep toe%') OR (description LIKE '%peep toe%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-peep-toe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-peep-toe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%peep toe%') OR (description LIKE '%peep toe%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-peep-toe'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-peep-toe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Botki-peep-toe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-peep-toe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-peep-toe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-sznurowane'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%sznurow%') OR (description LIKE '%sznurow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-sznurowane'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%sznurow%') OR (description LIKE '%sznurow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-sznurowane'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-sznurowane'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%sznurow%') OR (description LIKE '%sznurow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-sznurowane'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-sznurowane'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Botki-sznurowane'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-sznurowane'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-sznurowane'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-z-fredzlami'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-z-fredzlami'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-z-fredzlami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-z-fredzlami'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-z-fredzlami'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-z-fredzlami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Botki-z-fredzlami'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-z-fredzlami'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-z-fredzlami'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-zamszowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%zamszow%') OR (description LIKE '%zamszow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-zamszowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%zamszow%') OR (description LIKE '%zamszow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-zamszowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-zamszowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%zamszow%') OR (description LIKE '%zamszow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-zamszowe'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-zamszowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Botki-zamszowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-zamszowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-zamszowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Botki-zimowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Botki-zimowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-zimowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Botki-zimowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-zimowe'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-zimowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}