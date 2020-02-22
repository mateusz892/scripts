<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne LIKE '%Botki-zimowe%'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryTwo='Botki-zimowe'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryThree='Botki-zimowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-do-biegania-damskie'"
."WHERE ((name LIKE '%buty %'))"
."AND ((name LIKE '%do biegani%') OR (description LIKE '%do biegani%'))"
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
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Buty-do-biegania-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-do-siatkowki-damskie'"
."WHERE ((name LIKE '%buty%'))"
."AND ((name LIKE '%do siatków%') OR (description LIKE '%do siatków%'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-treningowe-damskie'"
."WHERE ((name LIKE '%buty %'))"
."AND ((name LIKE '%treningow%') OR (description LIKE '%treningow%'))"
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
."SET subcategoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Buty-treningowe-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Czolenka-bez-piety'"
."WHERE ((name LIKE '%czółenka%'))"
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
."SET subcategoryOne='Czolenka-na-koturnie'"
."WHERE ((name LIKE '%czółenka %'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Czolenka-na-koturnie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Czolenka-peep-toe'"
."WHERE ((name LIKE '%czółenka %'))"
."AND ((name LIKE '%peep toe%') OR (description LIKE '%peep toe%'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Czolenka-peep-toe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Czolenka-zamszowe'"
."WHERE ((name LIKE '%czółenka %'))"
."AND ((name LIKE '%zamszow%') OR (description LIKE '%zamszow%'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Czolenka-zamszowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Czolenka-skorzane'"
."WHERE ((name LIKE '%czółenka %'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (subcategoryOne='Czolenka-skorzane'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Kozaki-na-obcasie'"
."WHERE ((name LIKE '%kozaki %'))"
."AND ((name LIKE '%na obcas%') OR (description LIKE '%na obcas%'))"
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
."WHERE subcategoryOne='Kozaki-na-obcasie'"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Kozaki-zamszowe'"
."WHERE ((name LIKE '%kozaki %'))"
."AND ((name LIKE '%zamszow%') OR (description LIKE '%zamszow%'))"
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
."WHERE subcategoryOne='Kozaki-zamszowe'"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Muszkieterki'"
."WHERE ((name LIKE '%muszkieterki %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Kozaki-za-kolano'"
."WHERE ((name LIKE '%kozaki %'))"
."AND ((name LIKE '%za kolan%') OR (description LIKE '%za kolan%'))"
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
."WHERE subcategoryOne='Kozaki-za-kolano'"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Oficerki-damskie'"
."WHERE ((name LIKE '%oficerki %'))"
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
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (subcategoryOne='Oficerki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Szpilki-asymetryczne'"
."WHERE ((name LIKE '%szpilki %'))"
."AND ((name LIKE '%asymetrycz%') OR (description LIKE '%asymetrycz%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Szpilki-lakierowane'"
."WHERE ((name LIKE '%szpilki %'))"
."AND ((name LIKE '%lakierow%') OR (description LIKE '%lakierow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Szpilki-skórzane'"
."WHERE ((name LIKE '%szpilki %'))"
."AND ((name LIKE '%skór%') OR (description LIKE '%skór%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Szpilki-z-paskiem-na-kostce'"
."WHERE ((name LIKE '%szpilki%'))"
."AND ((name LIKE '%na kost%') OR (description LIKE '%na kost%'))"
."AND ((name LIKE '%pas%') OR (description LIKE '%pas%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-sportowe-chlopiece'"
."WHERE ((name LIKE '%buty %'))"
."AND ((name LIKE '%sport%') OR (description LIKE '%sport%'))"
."AND ((name LIKE '%chłopię%') OR (description LIKE '%chłopię%') OR (name LIKE '%chłopc%') OR (description LIKE '%chłopc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-sportowe-dziewczece'"
."WHERE ((name LIKE '%buty %'))"
."AND ((name LIKE '%sport%') OR (description LIKE '%sport%'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Kalosze-chlopiece'"
."WHERE ((name LIKE '%kalosze %'))"
."AND ((name LIKE '%chłopię%') OR (description LIKE '%chłopię%') OR (name LIKE '%chłopc%') OR (description LIKE '%chłopc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Kalosze-dziewczece'"
."WHERE ((name LIKE '%kalosze %'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Polbuty-chlopiece'"
."WHERE ((name LIKE '%półbuty %'))"
."AND ((name LIKE '%chłopię%') OR (description LIKE '%chłopię%') OR (name LIKE '%chłopc%') OR (description LIKE '%chłopc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Polbuty-dziewczece'"
."WHERE ((name LIKE '%półbuty %'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Sandaly-chlopiece'"
."WHERE ((name LIKE '%sandały%'))"
."AND ((name LIKE '%chłopię%') OR (description LIKE '%chłopię%') OR (name LIKE '%chłopc%') OR (description LIKE '%chłopc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Sandaly-dziewczece'"
."WHERE ((name LIKE '%sandały%'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Trampki-chlopiece'"
."WHERE ((name LIKE '%trampki %'))"
."AND ((name LIKE '%chłopię%') OR (description LIKE '%chłopię%') OR (name LIKE '%chłopc%') OR (description LIKE '%chłopc%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Trampki-dziewczece'"
."WHERE ((name LIKE '%trampki %'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-do-biegania-meskie'"
."WHERE ((name LIKE '%buty %'))"
."AND ((name LIKE '%do biegani%') OR (description LIKE '%do biegani%'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET subcategoryOne='Buty-do-siatkowki-meskie'"
."WHERE ((name LIKE '%buty%'))"
."AND ((name LIKE '%do siatków%') OR (description LIKE '%do siatków%'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/