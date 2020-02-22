<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Figi-damskie'"
."WHERE ((name LIKE '%figi %'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Stringi-damskie'"
."WHERE ((name LIKE '%stringi %'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Bikini'"
."WHERE ((name LIKE '%bikini %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%wkładki%') OR (description LIKE '%wkładki%') OR (name LIKE '%rajstopy%') OR (name LIKE '%Gatta%') OR (name='Figi Bikini Comfort')) AND (subcategoryOne='Bikini'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Stroje-kapielowe-dwuczesciowe'"
."WHERE ((name LIKE '%kąpielow%'))"
."AND ((name LIKE '%dwuczęściow%') OR (description LIKE '%dwuczęściow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%niemowl%') OR (description LIKE '%niemowl%')) AND (subcategoryOne='Stroje-kapielowe-dwuczesciowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Stroje-kapielowe-jednoczesciowe'"
."WHERE ((name LIKE '%kąpielow%'))"
."AND ((name LIKE '%jednoczęściow%') OR (description LIKE '%jednoczęściow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%niemowl%') OR (description LIKE '%niemowl%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Stroje-kapielowe-jednoczesciowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Monokini'"
."WHERE ((name LIKE '%monokini %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Tankini'"
."WHERE ((name LIKE '%tankini %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Bokserki-meskie'"
."WHERE ((name LIKE '%bokserki %'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Slipy-meskie'"
."WHERE ((name LIKE '%slipy %'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Bransoletki-skorzane'"
."WHERE ((name LIKE '%bransoletka %'))"
."AND ((name LIKE '%skór%') OR (description LIKE '%skór%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (subcategoryOne='Bransoletki-skorzane'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Bransoletki-swarovski'"
."WHERE ((name LIKE '%bransoletka %'))"
."AND ((name LIKE '%swarovsk%') OR (description LIKE '%swarovsk%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (subcategoryOne='Bransoletki-swarovski'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Bransoletki-sznurkowe'"
."WHERE ((name LIKE '%bransoletka %'))"
."AND ((name LIKE '%sznurkow%') OR (description LIKE '%sznurkow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (subcategoryOne='Bransoletki-sznurkowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Baleriny-lakierowane'"
."WHERE ((name LIKE '%baleriny %') OR (name LIKE '%balerinki %'))"
."AND ((name LIKE '%lakierowa%') OR (description LIKE '%lakierowa%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Baleriny-lakierowane'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Baleriny-azurowe'"
."WHERE ((name LIKE '%baleriny %') OR (name LIKE '%balerinki %'))"
."AND ((name LIKE '%ażurow%') OR (description LIKE '%ażurow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Baleriny-azurowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Baleriny-bez-piety'"
."WHERE ((name LIKE '%baleriny%') OR (name LIKE '%balerinki%'))"
."AND ((name LIKE '%bez pięt%') OR (description LIKE '%bez pięt%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Baleriny-na-koturnie'"
."WHERE ((name LIKE '%baleriny %') OR (name LIKE '%balerinki %'))"
."AND ((name LIKE '%na koturn%') OR (description LIKE '%na koturn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Baleriny-na-koturnie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Baleriny-peep-toe'"
."WHERE ((name LIKE '%baleriny%') OR (name LIKE '%balerinki%'))"
."AND ((name LIKE '%peep toe%') OR (description LIKE '%peep toe%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Meliski'"
."WHERE ((name LIKE '%meliski %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Meliski'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne= CONCAT(subcategoryOne, 'Botki-azurowe;')"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%ażurow%') OR (description LIKE '%ażurow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne NOT LIKE '%Botki-azurowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryTwo='Botki-azurowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%ażurow%') OR (description LIKE '%ażurow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-azurowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryThree='Botki-azurowe'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%ażurow%') OR (description LIKE '%ażurow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-azurowe'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-azurowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne LIKE '%Botki-azurowe%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-azurowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-azurowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne= CONCAT(subcategoryOne, 'Botki-na-koturnie;')"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na koturn%') OR (description LIKE '%na koturn%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne NOT LIKE '%Botki-na-koturnie%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryTwo='Botki-na-koturnie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na koturn%') OR (description LIKE '%na koturn%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-na-koturnie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryThree='Botki-na-koturnie'"
."WHERE ((name LIKE '%botki %'))"
."AND ((name LIKE '%na koturn%') OR (description LIKE '%na koturn%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Botki-na-koturnie'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Botki-na-koturnie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne LIKE '%Botki-na-koturnie%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-na-koturnie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-na-koturnie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}