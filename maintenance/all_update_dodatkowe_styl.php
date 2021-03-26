<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';młodzieżowe'), styleName= CONCAT(styleName, ';mlodziezowe')"
."WHERE ((name LIKE '%młodzież%') OR (description LIKE '%młodzież%') OR (shopcategory LIKE '%młodzież%') OR (name LIKE '%sport%') OR (description LIKE '%sport%') OR (shopcategory LIKE '%sport%') OR (name LIKE '%dreso%') OR (description LIKE '%dreso%') OR (shopcategory LIKE '%dreso%'))"
."AND style NOT LIKE '%;młodzieżowe%'"
."AND (id % '2') != '0'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z rozcięciem'), styleName= CONCAT(styleName, ';z-rozcieciem')"
."WHERE ((name LIKE '%rozcięc%') OR (description LIKE '%rozcięc%') OR (shopcategory LIKE '%rozcięc%'))"
."AND style NOT LIKE '%;z rozcięciem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';młodzieżowe'), styleName= CONCAT(styleName, ';mlodziezowe')"
."WHERE ((categoryOne LIKE '%Sukienki-mini%') OR (categoryOne LIKE '%Sukienki-koronkowe%'))"
."AND style NOT LIKE '%;młodzieżowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';casualowe'), styleName= CONCAT(styleName, ';casualowe')"
."WHERE ((name LIKE '%casual%') OR (description LIKE '%casual%'))"
."AND style NOT LIKE '%;casualowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';eleganckie'), styleName= CONCAT(styleName, ';eleganckie')"
."WHERE ((name LIKE '%elegancj%') OR (description LIKE '%elegancj%') OR (name LIKE '%eleganck%') OR (description LIKE '%eleganck%') OR (shopcategory LIKE '%eleganck%'))"
."AND style NOT LIKE '%;eleganckie%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';boho'), styleName= CONCAT(styleName, ';boho')"
."WHERE ((name LIKE '%boho %') OR (description LIKE '%boho %') OR (shopcategory LIKE '%boho %') OR (name LIKE '% boho%') OR (description LIKE '% boho%') OR (shopcategory LIKE '% boho%') OR (((description LIKE '%kwiat%') OR (name LIKE '%kwiat%') OR (shopcategory LIKE '%kwiat%')) AND ((description LIKE '%koronk%') OR (name LIKE '%koronk%') OR (shopcategory LIKE '%koronk%'))))"
."AND style NOT LIKE '%;boho%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';sportowe'), styleName= CONCAT(styleName, ';sportowe')"
."WHERE ((name LIKE '%sport%') OR (description LIKE '%sport%') OR (shopcategory LIKE '%sport%'))"
."AND style NOT LIKE '%;sportowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';hiszpanki'), styleName= CONCAT(styleName, ';hiszpanki')"
."WHERE ((name LIKE '%hiszpa%') OR (description LIKE '%hiszpa%') OR ((name LIKE '%odkryt%') AND (name LIKE '%ramion%')) OR ((description LIKE '%odkryt%') AND (description LIKE '%ramion%')) OR (shopcategory LIKE '%hiszpa%') OR ((shopcategory LIKE '%odkryt%') AND (shopcategory LIKE '%ramion%')))"
."AND style NOT LIKE '%;hiszpanki%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';kopertowe'), styleName= CONCAT(styleName, ';kopertowe')"
."WHERE ((name LIKE '%kopert%') OR (description LIKE '%kopert%') OR (shopcategory LIKE '%kopert%'))"
."AND style NOT LIKE '%;kopertowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';koszulowe'), styleName= CONCAT(styleName, ';koszulowe')"
."WHERE ((name LIKE '%koszulo%') OR (description LIKE '%koszulo%') OR (shopcategory LIKE '%koszulo%'))"
."AND style NOT LIKE '%;koszulowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';ołówkowe'), styleName= CONCAT(styleName, ';olowkowe')"
."WHERE ((name LIKE '%ołówko%') OR (description LIKE '%ołówko%') OR (shopcategory LIKE '%ołówko%'))"
."AND style NOT LIKE '%;ołówkowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';oversize'), styleName= CONCAT(styleName, ';oversize')"
."WHERE ((name LIKE '%oversiz%') OR (description LIKE '%oversiz%') OR (shopcategory LIKE '%oversiz%'))"
."AND style NOT LIKE '%;oversize%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';zwiewne'), styleName= CONCAT(styleName, ';zwiewne')"
."WHERE ((name LIKE '%zwiewn%') OR (description LIKE '%zwiewn%') OR (shopcategory LIKE '%zwiewn%'))"
."AND style NOT LIKE '%;zwiewne%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';plisowane'), styleName= CONCAT(styleName, ';plisowane')"
."WHERE ((name LIKE '%plisowa%') OR (description LIKE '%plisowa%') OR (shopcategory LIKE '%plisowa%'))"
."AND style NOT LIKE '%;plisowane%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';asymetryczne'), styleName= CONCAT(styleName, ';asymetryczne')"
."WHERE ((name LIKE '%asymetry%') OR (description LIKE '%asymetry%') OR (shopcategory LIKE '%asymetry%'))"
."AND style NOT LIKE '%;asymetryczne%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z falbankami'), styleName= CONCAT(styleName, ';z-falbankami')"
."WHERE ((name LIKE '%falban%') OR (description LIKE '%falban%') OR (shopcategory LIKE '%falban%'))"
."AND style NOT LIKE '%;z falbankami%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';dopasowane'), styleName= CONCAT(styleName, ';dopasowane')"
."WHERE ((name LIKE '%dopasowa%') OR (description LIKE '%dopasowa%') OR (name LIKE '%obcis%') OR (description LIKE '%obcis%') OR (shopcategory LIKE '%dopasowa%') OR (shopcategory LIKE '%obcis%'))"
."AND style NOT LIKE '%;dopasowane%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z cekinami'), styleName= CONCAT(styleName, ';z-cekinami')"
."WHERE ((name LIKE '%cekin%') OR (description LIKE '%cekin%') OR (shopcategory LIKE '%cekin%'))"
."AND style NOT LIKE '%;z cekinami%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';proste'), styleName= CONCAT(styleName, ';proste')"
."WHERE ((name LIKE '%prost%') OR (description LIKE '%prost%') OR (shopcategory LIKE '%prost%'))"
."AND style NOT LIKE '%;proste%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z odkrytymi plecami'), styleName= CONCAT(styleName, ';z-odkrytymi-plecami')"
."WHERE (((name LIKE '%plec%') OR (description LIKE '%plec%') OR (shopcategory LIKE '%plec%')) AND ((name LIKE '%odkry%') OR (description LIKE '%odkry%') OR (shopcategory LIKE '%odkry%')))"
."AND style NOT LIKE '%;z odkrytymi plecami%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';szmizjerki'), styleName= CONCAT(styleName, ';szmizjerki')"
."WHERE ((name LIKE '%szmizjer%') OR (description LIKE '%szmizjer%') OR (shopcategory LIKE '%szmizjer%'))"
."AND style NOT LIKE '%;szmizjerki%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';brokatowe'), styleName= CONCAT(styleName, ';brokatowe')"
."WHERE ((name LIKE '%brokatow%') OR (description LIKE '%brokatow%'))"
."AND style NOT LIKE '%;brokatowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';bombki'), styleName= CONCAT(styleName, ';bombki')"
."WHERE ((name LIKE '%bomb%') OR (description LIKE '%bomb%') OR (shopcategory LIKE '%bomb%'))"
."AND style NOT LIKE '%;bombki%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z gorsetem'), styleName= CONCAT(styleName, ';z-gorsetem')"
."WHERE ((name LIKE '%gorset%') OR (description LIKE '%gorset%') OR (shopcategory LIKE '%gorset%'))"
."AND style NOT LIKE '%;z gorsetem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z baskinką'), styleName= CONCAT(styleName, ';z-baskinka')"
."WHERE ((name LIKE '%baskin%') OR (description LIKE '%baskin%') OR (shopcategory LIKE '%baskin%'))"
."AND style NOT LIKE '%;z baskinką%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';klasyczne'), styleName= CONCAT(styleName, ';klasyczne')"
."WHERE ((name LIKE '%klasyk%') OR (description LIKE '%klasyk%') OR (name LIKE '%klasyczn%') OR (description LIKE '%klasyczn%'))"
."AND style NOT LIKE '%;klasyczne%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';retro'), styleName= CONCAT(styleName, ';retro')"
."WHERE ((name LIKE '%retro %') OR (description LIKE '%retro %'))"
."AND style NOT LIKE '%;retro%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';street'), styleName= CONCAT(styleName, ';street')"
."WHERE ((name LIKE '%street %') OR (description LIKE '%street %'))"
."AND style NOT LIKE '%;street%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style='glamour', styleName='glamour'"
."WHERE ((name LIKE '%glamour%') OR (description LIKE '%glamour%'))"
."AND style NOT LIKE '%;młodzieżowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';rockowe'), styleName= CONCAT(styleName, ';rockowe')"
."WHERE ((name LIKE '%rockow%') OR (description LIKE '%rockow%'))"
."AND style NOT LIKE '%;rockowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';vintage'), styleName= CONCAT(styleName, ';vintage')"
."WHERE ((name LIKE '%vintage%') OR (description LIKE '%vintage%'))"
."AND style NOT LIKE '%;vintage%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style='sportowe', styleName='sportowe'"
."WHERE ((name LIKE '%sport %') OR (description LIKE '%sport %') OR (name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND style NOT LIKE '%;młodzieżowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';marynarskie'), styleName= CONCAT(styleName, ';marynarskie')"
."WHERE ((name LIKE '%marynars%') OR (description LIKE '%marynars%'))"
."AND style NOT LIKE '%;marynarskie%'"
."AND ((maincategory='Plaszcze-damskie') OR (maincategory='Swetry-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';militarne'), styleName= CONCAT(styleName, ';militarne')"
."WHERE ((name LIKE '%militar%') OR (description LIKE '%militar%'))"
."AND style NOT LIKE '%;militarne%'"
."AND ((maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';etno'), styleName= CONCAT(styleName, ';etno')"
."WHERE ((name LIKE '%etno %') OR (description LIKE '%etno %'))"
."AND style NOT LIKE '%;etno%'"
."AND ((maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';biznesowe'), styleName= CONCAT(styleName, ';biznesowe')"
."WHERE ((name LIKE '%biznes%') OR (description LIKE '%biznes%'))"
."AND style NOT LIKE '%;biznesowe%'"
."AND ((maincategory='Spodnice') OR (maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';wakacyjne'), styleName= CONCAT(styleName, ';wakacyjne')"
."WHERE ((name LIKE '%wakacje %') OR (description LIKE '%wakacje %') OR (name LIKE '%wakacyj%') OR (description LIKE '%wakacyj%'))"
."AND style NOT LIKE '%;wakacyjne%'"
."AND ((maincategory='Sukienki') OR (categoryOne='Plecaki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';żakietowe'), styleName= CONCAT(styleName, ';zakietowe')"
."WHERE ((name LIKE '%żakiet%') OR (description LIKE '%żakiet%') OR (shopcategory LIKE '%żakiet%'))"
."AND style NOT LIKE '%;żakietowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z golfem'), styleName= CONCAT(styleName, ';z-golfem')"
."WHERE ((name LIKE '%golf%') OR (description LIKE '%golf%') OR (shopcategory LIKE '%golf%'))"
."AND style NOT LIKE '%;z golfem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z kołnierzykiem'), styleName= CONCAT(styleName, ';z-kolnierzykiem')"
."WHERE ((name LIKE '%kołnierz%') OR (description LIKE '%kołnierz%') OR (shopcategory LIKE '%kołnierz%'))"
."AND style NOT LIKE '%;z kołnierzykiem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z dekoltem v'), styleName= CONCAT(styleName, ';z-dekoltem-v')"
."WHERE ((name LIKE '%serek%') OR (description LIKE '%serek%') OR (shopcategory LIKE '%serek%') OR ((name LIKE '%dekol%') AND (name LIKE '% v %')) OR ((description LIKE '%dekol%') AND (description LIKE '% v %')) OR ((shopcategory LIKE '%dekol%') AND (shopcategory LIKE '% v %')))"
."AND style NOT LIKE '%;z dekoltem v%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';drapowane'), styleName= CONCAT(styleName, ';drapowane')"
."WHERE ((name LIKE '%drapowan%') OR (description LIKE '%drapowan%') OR (name LIKE '%marszczeni%') OR (description LIKE '%marszczeni%') OR (shopcategory LIKE '%drapowan%') OR (shopcategory LIKE '%marszczeni%'))"
."AND style NOT LIKE '%;drapowane%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';ze stójką'), styleName= CONCAT(styleName, ';ze-stojka')"
."WHERE ((name LIKE '%stój%') OR (description LIKE '%stój%') OR (shopcategory LIKE '%stój%'))"
."AND style NOT LIKE '%;ze stójką%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z kapturem'), styleName= CONCAT(styleName, ';z-kapturem')"
."WHERE ((name LIKE '%kaptur%') OR (description LIKE '%kaptur%') OR (shopcategory LIKE '%kaptur%'))"
."AND style NOT LIKE '%;z kapturem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z rozporkiem'), styleName= CONCAT(styleName, ';z-rozporkiem')"
."WHERE ((name LIKE '%rozpork%') OR (description LIKE '%rozpork%') OR (name LIKE '%rozpore%') OR (description LIKE '%rozpore%') OR (name LIKE '%rozcięc%') OR (description LIKE '%rozcięc%'))"
."AND style NOT LIKE '%;z rozporkiem%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';swetrowe'), styleName= CONCAT(styleName, ';swetrowe')"
."WHERE ((name LIKE '%sweter%') OR (description LIKE '%sweter%') OR (name LIKE '%swetro%') OR (description LIKE '%swetro%') OR (shopcategory LIKE '%swetro%') OR (shopcategory LIKE '%sweter%'))"
."AND style NOT LIKE '%;swetrowe%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z guzikami'), styleName= CONCAT(styleName, ';z-guzikami')"
."WHERE ((name LIKE '%guzik%') OR (description LIKE '%guzik%') OR (shopcategory LIKE '%guzik%'))"
."AND style NOT LIKE '%;z guzikami%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET style= CONCAT(style, ';z wycięciami'), styleName= CONCAT(styleName, ';z-wycieciami')"
."WHERE ((name LIKE '%z wycięci%') OR (description LIKE '%z wycięci%') OR (shopcategory LIKE '%z wycięci%') OR (name LIKE '%z dziuram%') OR (description LIKE '%z dziuram%'))"
."AND style NOT LIKE '%;z wycięciami%'"
."AND (maincategory='Sukienki')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
