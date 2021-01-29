<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Kurtki-sportowe-meskie'"
."WHERE ((name LIKE '%kurtka %'))"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Kurtki-zimowe-meskie'"
."WHERE ((name LIKE '%kurtka %'))"
."AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Parki-meskie'"
."WHERE ((name LIKE '%parka %'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-oversize'"
."WHERE ((name LIKE '%płaszcz %'))"
."AND ((name LIKE '%oversiz%') OR (description LIKE '%oversiz%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-pikowane'"
."WHERE ((name LIKE '%płaszcz %'))"
."AND ((name LIKE '%pikowan%') OR (description LIKE '%pikowan%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-puchowe'"
."WHERE ((name LIKE '%płaszcz%'))"
."AND ((name LIKE '%puchow%') OR (description LIKE '%puchow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-welniane'"
."WHERE ((name LIKE '%płaszcz %'))"
."AND ((name LIKE '%wełnian%') OR (description LIKE '%wełnian%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-z-futerkiem'"
."WHERE ((name LIKE '%płaszcz %'))"
."AND ((name LIKE '%futerk%') OR (description LIKE '%futerk%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-z-kapturem'"
."WHERE ((name LIKE '%płaszcz %'))"
."AND ((name LIKE '%kaptur%') OR (description LIKE '%kaptur%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (categoryOne='Plaszcze-z-kapturem'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Plaszcze-zimowe'"
."WHERE ((name LIKE '%płaszcz %'))"
."AND ((name LIKE '%zimow%') OR (description LIKE '%zimow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (categoryOne='Plaszcze-zimowe'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-asymetryczne'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%aymetryczn%') OR (description LIKE '%asymetryczn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-jeansowe'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%jeansow%') OR (description LIKE '%jeansow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-maxi'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%maxi%') OR (description LIKE '%maxi%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-midi'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%midi%') OR (description LIKE '%midi%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-mini'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%mini%') OR (description LIKE '%mini%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-olowkowe'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%ołówkowa%') OR (description LIKE '%ołówkowa%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-plisowane'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%plisowan%') OR (description LIKE '%plisowan%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-rozkloszowane'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%rozkloszowan%') OR (description LIKE '%rozkloszowan%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-skorzane'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%skórzan%') OR (description LIKE '%skórzan%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-sportowe'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-tiulowe'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%tiulow%') OR (description LIKE '%tiulow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnice-trapezowe'"
."WHERE ((name LIKE '%spódnica %'))"
."AND ((name LIKE '%trapezow%') OR (description LIKE '%trapezow%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%spódniczka%') OR (description LIKE '%spódniczka%')) AND ((categoryOne='Spodnice-asymetryczne') OR (categoryOne='Spodnice-jeansowe') OR (categoryOne='Spodnice-maxi') OR (categoryOne='Spodnice-midi') OR (categoryOne='Spodnice-mini') OR (categoryOne='Spodnice-olowkowe') OR (categoryOne='Spodnice-plisowane') OR (categoryOne='Spodnice-rozkloszowane') OR (categoryOne='Spodnice-skorzane') OR (categoryOne='Spodnice-sportowe') OR (categoryOne='Spodnice-tiulowe') OR (categoryOne='Spodnice-trapezowe')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Alladynki-damskie'"
."WHERE ((name LIKE '%alladynki %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%') OR (name LIKE '%haremki%')) AND (categoryOne='Alladynki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Bojówki-damskie'"
."WHERE ((name LIKE '%bojówki %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (categoryOne='Bojówki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Chinosy-damskie'"
."WHERE ((name LIKE '%chinosy %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (categoryOne='Chinosy-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Rybaczki-damskie'"
."WHERE ((name LIKE '%rybaczki %'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnie-bootcut'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%bootcut%') OR (description LIKE '%bootcut%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnie-culotte'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%culotte%') OR (description LIKE '%culotte%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnie-cygaretki'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%cygaretk%') OR (description LIKE '%cygaretk%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnie-dresowe-damskie'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%dresow%') OR (description LIKE '%dresow%'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnie-rurki-damskie'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%rurki%') OR (description LIKE '%rurki%'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Spodnie-skinny'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%skinny%') OR (description LIKE '%skinny%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (categoryOne='Spodnie-skinny'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}