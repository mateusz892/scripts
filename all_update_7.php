<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzki-koronkowe'"
."WHERE ((name LIKE '%bluzka %'))"
."AND ((name LIKE '%koronkow%') OR (description LIKE '%koronkow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE categoryOne='Bluzki-koronkowe'"
."AND ((name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzki-oversize'"
."WHERE ((name LIKE '%bluzka %'))"
."AND ((name LIKE '%oversiz%') OR (description LIKE '%oversiz%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE categoryOne='Bluzki-oversize'"
."AND ((name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzki-sportowe'"
."WHERE ((name LIKE '%bluzka %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE categoryOne='Bluzki-sportowe'"
."AND ((name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzki-wieczorowe'"
."WHERE ((name LIKE '%bluzka %'))"
."AND ((name LIKE '%wieczorow%') OR (description LIKE '%wieczorow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE categoryOne='Bluzki-wieczorowe'"
."AND ((name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzki-z-nadrukiem'"
."WHERE ((name LIKE '%bluzka %'))"
."AND ((name LIKE '%nadruk%') OR (description LIKE '%nadruk%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE categoryOne='Bluzki-z-nadrukiem'"
."AND ((name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%niemowl%') OR (description LIKE '%niemowl%') OR (name LIKE '%crewneck Race Crew%')) AND (categoryOne='Bluzki-z-nadrukiem'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzy-polarowe-damskie'"
."WHERE ((name LIKE '%bluza %'))"
."AND ((name LIKE '%polar%') OR (description LIKE '%polar%'))"
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
."SET categoryOne=''"
."WHERE categoryOne='Bluzy-polarowe-damskie'"
."AND ((name LIKE '%męski%') OR (description LIKE '%męski%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzy-rozpinane-damskie'"
."WHERE ((name LIKE '%bluza %'))"
."AND ((name LIKE '%rozpina%') OR (description LIKE '%rozpina%'))"
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
."SET categoryOne='Bluzy-sportowe-damskie'"
."WHERE ((name LIKE '%bluza %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
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
."SET categoryOne=''"
."WHERE categoryOne='Bluzy-sportowe-damskie'"
."AND ((name LIKE '%męski%') OR (description LIKE '%męski%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Bluzy-z-kapturem-damskie'"
."WHERE ((name LIKE '%bluza %'))"
."AND ((name LIKE '%kaptur%') OR (description LIKE '%kaptur%'))"
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
."SET categoryOne=''"
."WHERE categoryOne='Bluzy-z-kapturem-damskie'"
."AND ((name LIKE '%męski%') OR (description LIKE '%męski%') OR (name LIKE '%Mam super kobietę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Baleriny-damskie'"
."WHERE (subcategoryOne='Baleriny-azurowe'"
."OR subcategoryOne='Baleriny-bez-piety'"
."OR subcategoryOne='Baleriny-lakierowane'"
."OR subcategoryOne='Baleriny-na-koturnie'"
."OR subcategoryOne='Baleriny-peep-toe'"
."OR subcategoryOne='Meliski'"
."OR ((name LIKE '%baleriny %') OR (name LIKE '%balerinki %')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (categoryOne='Baleriny-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Botki-damskie'"
."WHERE ((subcategoryOne LIKE '%Botki-azurowe%')"
."OR (subcategoryOne LIKE '%Botki-na-koturnie%')"
."OR (subcategoryOne LIKE '%Botki-na-obcasie%')"
."OR (subcategoryOne LIKE '%Botki-na-platformie%')"
."OR (subcategoryOne LIKE '%Botki-peep-toe%')"
."OR (subcategoryOne LIKE '%Botki-sznurowane%')"
."OR (subcategoryOne LIKE '%Botki-z-fredzlami%')"
."OR (subcategoryOne LIKE '%Botki-zamszowe%')"
."OR (subcategoryOne LIKE '%Botki-zimowe%')"
."OR ((name LIKE '%botki %') AND (subcategoryTwo='') AND (subcategoryThree='')))"
//."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%') OR (name LIKE '%yo!%')) AND (categoryOne='Botki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Buty-sportowe-damskie'"
."WHERE (subcategoryOne='Buty-do-biegania-damskie'"
."OR subcategoryOne='Buty-treningowe-damskie'"
."OR ((name LIKE '%buty%') AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%')) AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Buty-trekkingowe-damskie'"
."WHERE (name LIKE '%buty %')"
."AND ((name LIKE '%trekkingow%') OR (description LIKE '%trekkingow%'))"
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
."SET categoryOne='Czolenka-damskie'"
."WHERE (subcategoryOne='Czolenka-bez-piety'"
."OR subcategoryOne='Czolenka-na-koturnie'"
."OR subcategoryOne='Czolenka-peep-toe'"
."OR subcategoryOne='Czolenka-skorzane'"
."OR subcategoryOne='Czolenka-zamszowe'"
."OR ((name LIKE '%czółenka %')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dzieck%') OR (description LIKE '%dzieck%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (categoryOne='Czolenka-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Espadryle-damskie'"
."WHERE (name LIKE '%espadryle %')"
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
."SET categoryOne='Kalosze-damskie'"
."WHERE (name LIKE '%kalosze %')"
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
."SET categoryOne='Kapcie-damskie'"
."WHERE (name LIKE '%kapcie %')"
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
."SET categoryOne='Klapki-damskie'"
."WHERE (name LIKE '%klapki %')"
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
."SET categoryOne='Kozaki-damskie'"
."WHERE (subcategoryOne='Kozaki-na-obcasie'"
."OR subcategoryOne='Kozaki-za-kolano'"
."OR subcategoryOne='Kozaki-zamszowe'"
."OR subcategoryOne='Muszkieterki'"
."OR subcategoryOne='Oficerki-damskie'"
."OR ((name LIKE '%kozaki %') AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Lordsy-damskie'"
."WHERE (name LIKE '%lordsy %')"
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
."SET categoryOne='Polbuty-damskie'"
."WHERE (name LIKE '%półbuty %')"
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
."SET categoryOne='Szpilki-damskie'"
."WHERE (subcategoryOne='Szpilki-asymetryczne'"
."OR subcategoryOne='Szpilki-lakierowane'"
."OR subcategoryOne='Szpilki-skorzane'"
."OR subcategoryOne='Szpilki-z-paskiem-na-kostce'"
."OR ((name LIKE '%szpilki %')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%gwoździe%') OR (name LIKE '%ozdobne%') OR (name LIKE '%zawieszka%') OR (name LIKE '%kolczyk%')) AND (categoryOne='Szpilki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Trampki-damskie'"
."WHERE (name LIKE '%trampki %')"
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
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND (categoryOne='Trampki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Balerinki-dziewczece'"
."WHERE ((name LIKE '%balerinki%'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Buty-sportowe-dzieciece'"
."WHERE (((name LIKE '%buty %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
."AND canUpdate!='tak'"
."AND categoryOne='')"
."OR subcategoryOne='Buty-sportowe-chlopiece'"
."OR subcategoryOne='Buty-sportowe-dziewczece'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kalosze-dzieciece'"
."WHERE (((name LIKE '%kalosze %'))"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
."AND canUpdate!='tak'"
."AND categoryOne='')"
."OR subcategoryOne='Kalosze-chlopiece'"
."OR subcategoryOne='Kalosze-dziewczece'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kaozaki-dziewczece'"
."WHERE ((name LIKE '%kozaki%'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
."AND categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Polbuty-dzieciece'"
."WHERE (((name LIKE '%półbuty %'))"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
."AND canUpdate!='tak'"
."AND categoryOne='')"
."OR subcategoryOne='Polbuty-chlopiece'"
."OR subcategoryOne='Polbuty-dziewczece'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Sandaly-dzieciece'"
."WHERE ((name LIKE '%sandały %'))"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
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
."SET categoryOne='Trampki-dzieciece'"
."WHERE (((name LIKE '%trampki %'))"
."AND ((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%'))"
."AND canUpdate!='tak'"
."AND categoryOne='')"
."OR subcategoryOne='Trampki-chlopiece'"
."OR subcategoryOne='Trampki-dziewczece'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Buty-sportowe-meskie'"
."WHERE (subcategoryOne='Buty-do-biegania-meskie'"
."OR subcategoryOne='Buty-pilkarskie'"
."OR ((name LIKE '%buty %') AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%')) AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%ochraniacze%') OR (description LIKE '%ochraniacze%')) AND (categoryOne='Buty-sportowe-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
