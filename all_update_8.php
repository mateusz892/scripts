<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Buty-trekkingowe-meskie'"
."WHERE (name LIKE '%buty %')"
."AND ((name LIKE '%trekkingow%') OR (description LIKE '%trekkingow%'))"
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
."SET categoryOne='Buty-wizytowe-meskie'"
."WHERE (name LIKE '%buty %')"
."AND ((name LIKE '%wizytow%') OR (description LIKE '%wizytow%'))"
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
."SET categoryOne='Buty-zimowe-meskie'"
."WHERE (subcategoryOne='Botki-meskie'"
."OR subcategoryOne='Glany-meskie'"
."OR subcategoryOne='Kowbojki-meskie'"
."OR subcategoryOne='Sniegowce-meskie'"
."OR subcategoryOne='Trapery-meskie'"
."OR ((name LIKE '%buty%') AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%')) AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Espadryle-meskie'"
."WHERE (name LIKE '%espadryle %')"
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
."SET categoryOne='Kalosze-meskie'"
."WHERE (name LIKE '%kalosze%')"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kapcie-meskie'"
."WHERE (name LIKE '%kapcie %')"
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
."SET categoryOne='Klapki-meskie'"
."WHERE (name LIKE '%klapki %')"
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
."SET categoryOne='Polbuty-meskie'"
."WHERE (subcategoryOne='Polbuty-meskie-skorzane'"
."OR subcategoryOne='Polbuty-meskie-zamszowe'"
."OR ((name LIKE '%półbuty %') AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Sandaly-meskie'"
."WHERE (subcategoryOne='Sandaly-meskie-skorzane'"
."OR subcategoryOne='Sandaly-meskie-sportowe'"
."OR ((name LIKE '%sandały %') AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kamizelki-chlopiece'"
."WHERE ((name LIKE '%kamizelka%'))"
."AND ((name LIKE '%chłopięc%') OR (description LIKE '%chłopięc%'))"
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
."SET categoryOne='Kamizelki-dziewczece'"
."WHERE ((name LIKE '%kamizelka%'))"
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

/*."SET categoryOne='Koszule-jeansowe-damskie'"
."WHERE ((name LIKE '%koszula%'))"
."AND ((name LIKE '%jeansow%') OR (description LIKE '%jeansow%'))"
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
."SET categoryOne='Koszule-w-krate-damskie'"
."WHERE ((name LIKE '%koszula %'))"
."AND ((name LIKE '%krat%') OR (description LIKE '%krat%'))"
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
."SET categoryOne='Koszule-jeansowe-meskie'"
."WHERE ((name LIKE '%koszula %'))"
."AND ((name LIKE '%jeansow%') OR (description LIKE '%jeansow%'))"
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
."SET categoryOne=''"
."WHERE ((description LIKE '%do jeansów%') AND (categoryOne='Koszule-jeansowe-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Koszule-meskie-slim'"
."WHERE ((name LIKE '%koszula %'))"
."AND ((name LIKE '%slim%') OR (description LIKE '%slim%'))"
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
."SET categoryOne='Koszule-meskie-sportowe'"
."WHERE ((name LIKE '%koszula %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
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
."SET categoryOne='Koszule-w-krate-meskie'"
."WHERE ((name LIKE '%koszula %'))"
."AND ((name LIKE '%krat%') OR (description LIKE '%krat%'))"
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
."SET categoryOne='Koszulki-polo-meskie'"
."WHERE ((name LIKE '%koszulka %'))"
."AND ((name LIKE '%polo %') OR (description LIKE '%polo %'))"
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
."SET categoryOne='Koszulki-z-dlugim-rekawem-meskie'"
."WHERE ((name LIKE '%koszulka %'))"
."AND ((name LIKE '%długim rękawem%') OR (description LIKE '%długim rękawem%') OR (name LIKE '%długi rękaw%') OR (description LIKE '%długi rękaw%') OR (name LIKE '%długimi rękaw%') OR (description LIKE '%długimi rękaw%'))"
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
."SET categoryOne='T-shirty-meskie'"
."WHERE ((name LIKE '%t-shirt%') OR (name LIKE '%t shirt%'))"
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
."SET categoryOne=''"
."WHERE (((name LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%damsk%') OR (description LIKE '%kobiet%')) AND (categoryOne='T-shirty-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-do-biegania-damskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%biegani%') OR (description LIKE '%biegani%'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-jeansowe-damskie'"
."WHERE ((name LIKE '%kurtka%'))"
."AND ((name LIKE '%jeansow%') OR (description LIKE '%jeansow%'))"
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
."SET categoryOne='Kurtki-parki-damskie'"
."WHERE ((name LIKE '%kurtka%'))"
."AND ((name LIKE '%park%') OR (description LIKE '%park%'))"
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
."SET categoryOne='Kurtki-pikowane-damskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%pikowan%') OR (description LIKE '%pikowan%'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-przejsciowe-damskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%przejściow%') OR (description LIKE '%przejściow%'))"
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
."SET categoryOne='Kurtki-puchowe-damskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%puchowa%') OR (description LIKE '%puchowa%'))"
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
."SET categoryOne='Kurtki-skorzane-damskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%skórzan%') OR (description LIKE '%skórzan%') OR (name LIKE '%skór%') OR (description LIKE '%skór%'))"
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
."WHERE ((description LIKE '%potu%') AND (categoryOne='Kurtki-skorzane-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-sportowe-damskie'"
."WHERE ((name LIKE '%kurtka %'))"
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

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-zimowe-damskie'"
."WHERE ((name LIKE '%kurtki%'))"
."AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%'))"
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
."SET categoryOne='Kurtki-chlopiece'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%chłopięc%') OR (description LIKE '%chłopięc%'))"
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
."SET categoryOne='Kurtki-dziewczece'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
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
."SET categoryOne=''"
."WHERE (((name LIKE '%dziewczyny%') OR (description LIKE '%dziewczyny%')) AND (categoryOne='Kurtki-dziewczece'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-jeansowe-meskie'"
."WHERE ((name LIKE '%kurtka%'))"
."AND ((name LIKE '%jeans%') OR (description LIKE '%jeans%'))"
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
."SET categoryOne='Kurtki-letnie-meskie'"
."WHERE ((name LIKE '%kurtka%'))"
."AND ((name LIKE '%letni%') OR (description LIKE '%letni%'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kurtki-pikowane-meskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%pikowan%') OR (description LIKE '%pikowan%'))"
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
."SET categoryOne='Kurtki-przejsciowe-meskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%przejściow%') OR (description LIKE '%przejściow%'))"
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
."SET categoryOne='Kurtki-puchowe-meskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%puchow%') OR (description LIKE '%puchow%'))"
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
."SET categoryOne='Kurtki-skorzane-meskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%skórzan%') OR (description LIKE '%skórzan%'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}