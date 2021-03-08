<?php

error_reporting(0);

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");

mysql_set_charset('utf8',$com);

mysql_select_db("u705076634_longfash", $com) or die(mysql_error());
header('Content-Type: text/html; charset=utf-8');



$dataCounter = 0;



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wesel%') OR (description LIKE '%wesel%') OR (shopcategory LIKE '%wesel%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na wesele: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%') OR (shopcategory LIKE '%wiecz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' wieczorowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%lato%') OR (description LIKE '%lato%') OR (shopcategory LIKE '%lato%') OR (description LIKE '%letn%') OR (name LIKE '%letn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' letnie: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%koktajlo%') OR (description LIKE '%koktajlo%') OR (shopcategory LIKE '%koktajlo%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' koktajlowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%eleganc%') OR (description LIKE '%eleganc%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' eleganckie: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wizyt%') OR (description LIKE '%wizyt%') OR (shopcategory LIKE '%wizyt%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' wizytowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%plus siz%') OR (description LIKE '%plus siz%') OR (name LIKE '%dla puszys%') OR (description LIKE '%dla puszys%') OR (shopcategory LIKE '%plus siz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' plus size: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%długa%') OR (description LIKE '%długa%') OR (name LIKE '%do ziem%') OR (description LIKE '%do ziem%') OR (name LIKE '%maxi%') OR (description LIKE '%maxi%') OR (shopcategory LIKE '%długie%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' długie: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%boho %') OR (description LIKE '%boho %') OR (shopcategory LIKE '%boho %') OR (name LIKE '% boho%') OR (description LIKE '% boho%') OR (shopcategory LIKE '% boho%') OR (((description LIKE '%kwiat%') OR (name LIKE '%kwiat%')) AND ((description LIKE '%koronk%') OR (name LIKE '%koronk%'))))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' boho: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%sylwestr%') OR (description LIKE '%sylwestr%') OR (shopcategory LIKE '%sylwestr%') OR (description LIKE '%cekin%') OR (name LIKE '%cekin%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' sylwestrowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%midi%') OR (description LIKE '%midi%') OR (shopcategory LIKE '%midi%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' midi: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%komun%') OR (description LIKE '%komun%') OR (shopcategory LIKE '%komun%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na komunię: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%długa%') OR (description LIKE '%długa%') OR (name LIKE '%do ziem%') OR (description LIKE '%do ziem%') OR (name LIKE '%maxi%') OR (description LIKE '%maxi%') OR (shopcategory LIKE '%długie%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' maxi: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%studniów%') OR (description LIKE '%studniów%') OR (shopcategory LIKE '%studniów%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na studniówkę: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%kwiat%') OR (description LIKE '%kwiat%') OR (name LIKE '%kwiecis%') OR (description LIKE '%kwiecis%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w kwiaty: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%casual%') OR (description LIKE '%casual%') OR (name LIKE '%co dzień%') OR (description LIKE '%co dzień%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na co dzień: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%koronko%') OR (description LIKE '%koronko%') OR (shopcategory LIKE '%koronko%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' koronkowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%dziani%') OR (description LIKE '%dziani%') OR (shopcategory LIKE '%dziani%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' dzianinowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%dreso%') OR (description LIKE '%dreso%') OR (shopcategory LIKE '%dreso%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' dresowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%na 18%') OR (description LIKE '%na 18%') OR (name LIKE '%na osiemn%') OR (description LIKE '%na osiemn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na 18: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%czarn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' czarne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%młodzież%') OR (description LIKE '%młodzież%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' młodzieżowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%trapez%') OR (description LIKE '%trapez%') OR (shopcategory LIKE '%trapez%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' trapezowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%rozkloszow%') OR (description LIKE '%rozkloszow%') OR (shopcategory LIKE '%rozkloszow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' rozkloszowane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%do prac%') OR (description LIKE '%do prac%') OR (shopcategory LIKE '%do prac%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' do pracy: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%sport%') OR (description LIKE '%sport%') OR (shopcategory LIKE '%sport%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' sportowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%jesień %') OR (description LIKE '%jesień %') OR (name LIKE '% jesień%') OR (description LIKE '% jesień%') OR (description LIKE '%jesienn%') OR (name LIKE '%jesienn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na jesień: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND (((name LIKE '%dżinso%') OR (description LIKE '%dżinso%') OR (shopcategory LIKE '%dżinso%')) OR ((name LIKE '%jeanso%') OR (description LIKE '%jeanso%') OR (shopcategory LIKE '%jeanso%')))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' jeansowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%czerwo%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' czerwone: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%imprez%') OR (description LIKE '%imprez%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na imprezę: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%bal%') OR (description LIKE '%bal%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' balowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%hiszpa%') OR (description LIKE '%hiszpa%') OR ((name LIKE '%odkryt%') AND (name LIKE '%ramion%')) OR ((description LIKE '%odkryt%') AND (description LIKE '%ramion%')))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' hiszpanki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%chrzes%') OR (description LIKE '%chrzes%') OR (name LIKE '%chrzt%') OR (description LIKE '%chrzt%') OR (name LIKE '%chrzci%') OR (description LIKE '%chrzci%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' do chrztu: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND (name LIKE '%biał%')"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' białe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%kopert%') OR (description LIKE '%kopert%') OR (shopcategory LIKE '%kopert%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' kopertowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%tiul%') OR (description LIKE '%tiul%') OR (shopcategory LIKE '%tiul%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' tiulowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%mini%') OR (description LIKE '%mini%') OR (shopcategory LIKE '%mini%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' mini: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%koszulo%') OR (description LIKE '%koszulo%') OR (shopcategory LIKE '%koszulo%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' koszulowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%długim rękawem%') OR (description LIKE '%długim rękawem%') OR (name LIKE '%długi rękaw%') OR (description LIKE '%długi rękaw%') OR (name LIKE '%długimi rękaw%') OR (description LIKE '%długimi rękaw%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z długim rękawem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%ołówko%') OR (description LIKE '%ołówko%') OR (shopcategory LIKE '%ołówko%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' ołówkowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%plaż%') OR (description LIKE '%plaż%') OR (shopcategory LIKE '%plaż%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' plażowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%oversiz%') OR (description LIKE '%oversiz%') OR (shopcategory LIKE '%oversiz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' oversize: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%zwiewn%') OR (description LIKE '%zwiewn%') OR (shopcategory LIKE '%zwiewn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' zwiewne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%plisowa%') OR (description LIKE '%plisowa%') OR (shopcategory LIKE '%plisowa%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' plisowane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%święt%') OR (description LIKE '%święt%') OR (shopcategory LIKE '%święt%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na swieta: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%szyfon%') OR (description LIKE '%szyfon%') OR (shopcategory LIKE '%szyfon%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' szyfonowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%len %') OR (description LIKE '%len %') OR (name LIKE '%lnu %') OR (description LIKE '%lnu %') OR (name LIKE '% len%') OR (description LIKE '% len%') OR (name LIKE '% lnu%') OR (description LIKE '% lnu%') OR (name LIKE '%lnian%') OR (description LIKE '%lnian%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' lniane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%bawełn%') OR (description LIKE '%bawełn%') OR (shopcategory LIKE '%bawełn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' bawełniane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%retro%') OR (description LIKE '%retro%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' retro: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%asymetry%') OR (description LIKE '%asymetry%') OR (shopcategory LIKE '%asymetry%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' asymetryczne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wiosn%') OR (description LIKE '%wiosn%') OR (shopcategory LIKE '%wiosn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' wiosenne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%falban%') OR (description LIKE '%falban%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z falbankami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}




$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%grosz%') OR (description LIKE '%grosz%') OR (shopcategory LIKE '%grosz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w groszki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%dopasowa%') OR (description LIKE '%dopasowa%') OR (name LIKE '%obcis%') OR (description LIKE '%obcis%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' dopasowane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%cekin%') OR (description LIKE '%cekin%') OR (shopcategory LIKE '%cekin%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z cekinami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%prost%') OR (description LIKE '%prost%') OR (shopcategory LIKE '%prost%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' proste: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%karnawał%') OR (description LIKE '%karnawał%') OR (shopcategory LIKE '%karnawał%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' karnawałowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%zielon%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' zielone: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z frędzlami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%zima %') OR (description LIKE '%zima %') OR (description LIKE '%zimę %') OR (name LIKE '%zimę %') OR (name LIKE '% zima%') OR (description LIKE '% zima%') OR (description LIKE '% zimę%') OR (name LIKE '% zimę%') OR (description LIKE '%zimow%') OR (name LIKE '%zimow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' zimowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%biznes%') OR (description LIKE '%biznes%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' biznesowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%granatow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' granatowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%lata 20%') OR (description LIKE '%lata 20%') OR (name LIKE '%lata dwudzie%') OR (description LIKE '%lata dwudzie%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' lata 20: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND (((name LIKE '%plec%') OR (description LIKE '%plec%') OR (shopcategory LIKE '%plec%')) AND ((name LIKE '%odkry%') OR (description LIKE '%odkry%') OR (shopcategory LIKE '%odkry%')))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z odkrytymi plecami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%kratka %') OR (description LIKE '%kratka %') OR (name LIKE '%kratkę %') OR (description LIKE '%kratkę %') OR (name LIKE '% kratka%') OR (description LIKE '% kratka%') OR (name LIKE '% kratkę%') OR (description LIKE '% kratkę%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w kratkę: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%za kolan%') OR (description LIKE '%za kolan%') OR (shopcategory LIKE '%za kolan%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' za kolano: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%włoska %') OR (description LIKE '%włoska %') OR (name LIKE '%włoskie %') OR (description LIKE '%włoskie %'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' włoskie: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%butelko%') OR (description LIKE '%butelko%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' butelkowa zieleń: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%pudrow%') OR (description LIKE '%pudrow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' pudrowy róż: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%klasyczn%') OR (description LIKE '%klasyczn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' klasyczne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%bordow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' bordowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%do kola%') OR (description LIKE '%do kola%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' do kolan: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%niebiesk%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' niebieskie: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wiskoz%') OR (description LIKE '%wiskoz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z wiskozy: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%groch%') OR (description LIKE '%groch%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w grochy: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%poprawin%') OR (description LIKE '%poprawin%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na poprawiny: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%jedwab%') OR (description LIKE '%jedwab%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' jedwabne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%mała czar%') OR (description LIKE '%mała czar%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' mała czarna: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%ramiączk%') OR (description LIKE '%ramiączk%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na ramiączkach: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%szmizjer%') OR (description LIKE '%szmizjer%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' szmizjerki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wełnian%') OR (description LIKE '%wełnian%') OR (name LIKE '%wełna %') OR (description LIKE '%wełna %') OR (name LIKE '%wełny %') OR (description LIKE '%wełny %') OR (name LIKE '% wełna%') OR (description LIKE '% wełna%') OR (name LIKE '% wełny%') OR (description LIKE '% wełny%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' wełniane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%brokatow%') OR (description LIKE '%brokatow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' brokatowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%haftow%') OR (description LIKE '%haftow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' haftowane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%bomb%') OR (description LIKE '%bomb%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' bombki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%gorset%') OR (description LIKE '%gorset%') OR (shopcategory LIKE '%gorset%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z gorsetem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%gipiur%') OR (description LIKE '%gipiur%') OR (shopcategory LIKE '%gipiur%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z gipiury: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%złot%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' złote: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%welur%') OR (description LIKE '%welur%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' welurowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%baskin%') OR (description LIKE '%baskin%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z baskinką: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%paski %') OR (description LIKE '%paski %') OR (name LIKE '% paski%') OR (description LIKE '% paski%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w paski: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%żółt%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' żółte: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%marynar%') OR (description LIKE '%marynar%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' marynarki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%panter%') OR (description LIKE '%panter%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w panterkę: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%żakiet%') OR (description LIKE '%żakiet%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' żakietowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%satyn%') OR (description LIKE '%satyn%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' satynowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%t shirt%') OR (description LIKE '%t shirt%') OR (name LIKE '%t-shirt%') OR (description LIKE '%t-shirt%') OR (name LIKE '%T-shirt%') OR (description LIKE '%T-shirt%') OR (name LIKE '%T shirt%') OR (description LIKE '%T shirt%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' T-shirt: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%ogrodnicz%') OR (description LIKE '%ogrodnicz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' ogrodniczki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%ażur%') OR (description LIKE '%ażur%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' ażurowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%beż%') OR (description LIKE '%beż%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' beżowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%golf%') OR (description LIKE '%golf%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z golfem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%fiolet%') OR (description LIKE '%fiolet%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' fioletowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%druhn%') OR (description LIKE '%druhn%') OR (name LIKE '%druhe%') OR (description LIKE '%druhe%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' dla druhen: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%srebr%') OR (description LIKE '%srebr%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' srebrne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%błyszcz%') OR (description LIKE '%błyszcz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' błyszczące: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%błękit%') OR (description LIKE '%błękit%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' błękitne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%fuksj%') OR (description LIKE '%fuksj%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' fuksja: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%chabr%') OR (description LIKE '%chabr%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' chabrowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%rozcięc%') OR (description LIKE '%rozcięc%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z rozcięciem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%guzik%') OR (description LIKE '%guzik%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z guzikami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%odcinan%') OR (description LIKE '%odcinan%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' odcinane pod biustem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%prążkow%') OR (description LIKE '%prążkow%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' prążkowane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%skór%') OR (description LIKE '%skór%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' skórzane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%kołnierz%') OR (description LIKE '%kołnierz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z kołnierzykiem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%szelk%') OR (description LIKE '%szelk%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na szelkach: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%serek%') OR (description LIKE '%serek%') OR ((name LIKE '%dekol%') AND (name LIKE '% v %')) OR ((description LIKE '%dekol%') AND (description LIKE '% v %')))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z dekoltem v: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%wyszczupl%') OR (description LIKE '%wyszczupl%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' wyszczuplające: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%piór%') OR (description LIKE '%piór%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z piórami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%dwuczęści%') OR (description LIKE '%dwuczęści%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' dwuczęściowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%marszczeni%') OR (description LIKE '%marszczeni%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z marszczeniem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%drapowan%') OR (description LIKE '%drapowan%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' drapowane: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%szar%') OR (description LIKE '%szar%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' szare: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%pomarańczo%') OR (description LIKE '%pomarańczo%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' pomarańczowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%krata %') OR (description LIKE '%krata %') OR (name LIKE '%kratę %') OR (description LIKE '%kratę %') OR (name LIKE '% krata%') OR (description LIKE '% krata%') OR (name LIKE '% kratę%') OR (description LIKE '% kratę%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w kratę: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%stój%') OR (description LIKE '%stój%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' ze stójką: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%lawend%') OR (description LIKE '%lawend%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' lawendowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%szmaragd%') OR (description LIKE '%szmaragd%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' szmaragdowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%aksamit%') OR (description LIKE '%aksamit%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' aksamitne: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%kaptur%') OR (description LIKE '%kaptur%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z kapturem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%pepitk%') OR (description LIKE '%pepitk%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' w pepitkę: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%rozpork%') OR (description LIKE '%rozpork%') OR (name LIKE '%rozpore%') OR (description LIKE '%rozpore%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z rozporkiem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%dwurzęd%') OR (description LIKE '%dwurzęd%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' dwurzędowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%szydeł%') OR (description LIKE '%szydeł%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' na szydełku: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}


$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%turkus%') OR (description LIKE '%turkus%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' turkusowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}

$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%zamsz%') OR (description LIKE '%zamsz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' zamszowe: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%kieszen%') OR (description LIKE '%kieszen%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z kieszeniami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%z wycięci%') OR (description LIKE '%z wycięci%') OR (name LIKE '%z dziuram%') OR (description LIKE '%z dziuram%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z wycięciami: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}




$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%siatecz%') OR (description LIKE '%siatecz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' z siateczki: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}



$sql = "SELECT COUNT(*)"

." FROM `jos_get_xml_three`"

." WHERE name LIKE '%sukienka %'"

."AND ((name LIKE '%ściągacz%') OR (description LIKE '%ściągacz%'))"

." AND filterone='tak'"

;



$result = mysql_query($sql);

echo ' ze ściągaczem: ';

if (mysql_result($result, 0) >= 30) {

	echo mysql_result($result, 0);

	$dataCounter++;

}




echo ' all: ';

echo $dataCounter;



/*while($row = mysql_fetch_row($result)) {

	$data[] = $row[0];

}



$data_count = count($data);

echo $data_count;

echo "\n";

echo $data_count/30;*/


