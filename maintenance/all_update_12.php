<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-wizytowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wizyt%') OR (description LIKE '%wizyt%') OR (shopcategory LIKE '%wizyt%'))"
."AND categoryOne NOT LIKE '%Sukienki-wizytowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-wizytowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wizyt%') OR (description LIKE '%wizyt%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-wizytowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-wizytowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wizyt%') OR (description LIKE '%wizyt%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-wizytowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-wizytowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-z-cekinami;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%cekin%') OR (description LIKE '%cekin%') OR (shopcategory LIKE '%cekin%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-z-cekinami%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-z-cekinami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%cekin%') OR (description LIKE '%cekin%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-z-cekinami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-z-cekinami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%cekin%') OR (description LIKE '%cekin%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-z-cekinami'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-z-cekinami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-z-fredzlami;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%') OR (shopcategory LIKE '%frędzl%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-z-fredzlami%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-z-fredzlami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-z-fredzlami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-z-fredzlami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-z-fredzlami'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-z-fredzlami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-z-odkrytymi-plecami;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%plec%') OR (description LIKE '%plec%') OR (shopcategory LIKE '%plec%')) AND ((name LIKE '%odkry%') OR (description LIKE '%odkry%') OR (name LIKE '%wcię%') OR (description LIKE '%wcię%') OR (shopcategory LIKE '%odkry%') OR (shopcategory LIKE '%wcię%')))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-z-odkrytymi-plecami%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-z-odkrytymi-plecami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%plec%') OR (description LIKE '%plec%')) AND ((name LIKE '%odkry%') OR (description LIKE '%odkry%') OR (name LIKE '%wcię%') OR (description LIKE '%wcię%')))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-z-odkrytymi-plecami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-z-odkrytymi-plecami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%plec%') OR (description LIKE '%plec%')) AND ((name LIKE '%odkry%') OR (description LIKE '%odkry%') OR (name LIKE '%wcię%') OR (description LIKE '%wcię%')))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-z-odkrytymi-plecami'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-z-odkrytymi-plecami'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-za-kolano;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%za kolan%') OR (description LIKE '%za kolan%') OR (shopcategory LIKE '%za kolan%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-za-kolano%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-za-kolano'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%za kolan%') OR (description LIKE '%za kolan%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-za-kolano'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-za-kolano'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%za kolan%') OR (description LIKE '%za kolan%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-za-kolano'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-za-kolano'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-na-sylwestra;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sylwestr%') OR (description LIKE '%sylwestr%') OR (shopcategory LIKE '%sylwestr%') OR (description LIKE '%cekin%') OR (name LIKE '%cekin%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-na-sylwestra%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-na-sylwestra'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sylwestr%') OR (description LIKE '%sylwestr%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-sylwestra'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-na-sylwestra'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%sylwestr%') OR (description LIKE '%sylwestr%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-sylwestra'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-na-sylwestra'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-letnie;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%lato%') OR (description LIKE '%lato%') OR (shopcategory LIKE '%lato%') OR (description LIKE '%letn%') OR (name LIKE '%letn%') OR (shopcategory LIKE '%letn%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-letnie%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-letnie'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%lato%') OR (description LIKE '%lato%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-letnie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-letnie'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%lato%') OR (description LIKE '%lato%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-letnie'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-letnie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-na-studniowke;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%studniów%') OR (description LIKE '%studniów%') OR (shopcategory LIKE '%studniów%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-na-studniowke%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-na-studniowke'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%studniów%') OR (description LIKE '%studniów%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-studniowke'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-na-studniowke'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%studniów%') OR (description LIKE '%studniów%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-studniowke'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-na-studniowke'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-na-komunie;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%komun%') OR (description LIKE '%komun%') OR (shopcategory LIKE '%komun%'))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-na-komunie%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-na-komunie'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%komun%') OR (description LIKE '%komun%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-komunie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-na-komunie'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%komun%') OR (description LIKE '%komun%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-na-komunie'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-na-komunie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-boho;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%boho%') OR (description LIKE '%boho%') OR (shopcategory LIKE '%boho%') OR (((description LIKE '%kwiat%') OR (name LIKE '%kwiat%')) AND ((description LIKE '%koronk%') OR (name LIKE '%koronk%'))))"
//."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-boho%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-boho'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%boho%') OR (description LIKE '%boho%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-boho'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-boho'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%boho%') OR (description LIKE '%boho%'))"
//."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-boho'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-boho'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND ((categoryOne LIKE '%Sukienki-asymetryczne%') OR (categoryOne LIKE '%Sukienki-do-pracy%') OR (categoryOne LIKE '%Sukienki-dresowe%') OR (categoryOne LIKE '%Sukienki-dzinsowe%') OR (categoryOne LIKE '%Sukienki-gorsetowe%') OR (categoryOne LIKE '%Sukienki-koktajlowe%') OR (categoryOne LIKE '%Sukienki-koronkowe%') OR (categoryOne LIKE '%Sukienki-koszulowe%') OR (categoryOne LIKE '%Sukienki-maxi%') OR (categoryOne LIKE '%Sukienki-midi%') OR (categoryOne LIKE '%Sukienki-mini%') OR (categoryOne LIKE '%Sukienki-na-wesele%') OR (categoryOne LIKE '%Sukienki-olowkowe%') OR (categoryOne LIKE '%Sukienki-pastelowe%') OR (categoryOne LIKE '%Sukienki-plus-size%') OR (categoryOne LIKE '%Sukienki-rozkloszowane%') OR (categoryOne LIKE '%Sukienki-sportowe%') OR (categoryOne LIKE '%Sukienki-trapezowe%') OR (categoryOne LIKE '%Sukienki-wieczorowe%') OR (categoryOne LIKE '%Sukienki-wizytowe%') OR (categoryOne LIKE '%Sukienki-z-cekinami%') OR (categoryOne LIKE '%Sukienki-z-fredzlami%') OR (categoryOne LIKE '%Sukienki-z-odkrytymi-plecami%') OR (categoryOne LIKE '%Sukienki-za-kolano%')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND ((categoryTwo='Sukienki-asymetryczne') OR (categoryTwo='Sukienki-do-pracy') OR (categoryTwo='Sukienki-dresowe') OR (categoryTwo='Sukienki-dzinsowe') OR (categoryTwo='Sukienki-gorsetowe') OR (categoryTwo='Sukienki-koktajlowe') OR (categoryTwo='Sukienki-koronkowe') OR (categoryTwo='Sukienki-koszulowe') OR (categoryTwo='Sukienki-maxi') OR (categoryTwo='Sukienki-midi') OR (categoryTwo='Sukienki-mini') OR (categoryTwo='Sukienki-na-wesele') OR (categoryTwo='Sukienki-olowkowe') OR (categoryTwo='Sukienki-pastelowe') OR (categoryTwo='Sukienki-plus-size') OR (categoryTwo='Sukienki-rozkloszowane') OR (categoryTwo='Sukienki-sportowe') OR (categoryTwo='Sukienki-trapezowe') OR (categoryTwo='Sukienki-wieczorowe') OR (categoryTwo='Sukienki-wizytowe') OR (categoryTwo='Sukienki-z-cekinami') OR (categoryTwo='Sukienki-z-fredzlami') OR (categoryTwo='Sukienki-z-odkrytymi-plecami') OR (categoryTwo='Sukienki-za-kolano')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND ((categoryThree='Sukienki-asymetryczne') OR (categoryThree='Sukienki-do-pracy') OR (categoryThree='Sukienki-dresowe') OR (categoryThree='Sukienki-dzinsowe') OR (categoryThree='Sukienki-gorsetowe') OR (categoryThree='Sukienki-koktajlowe') OR (categoryThree='Sukienki-koronkowe') OR (categoryThree='Sukienki-koszulowe') OR (categoryThree='Sukienki-maxi') OR (categoryThree='Sukienki-midi') OR (categoryThree='Sukienki-mini') OR (categoryThree='Sukienki-na-wesele') OR (categoryThree='Sukienki-olowkowe') OR (categoryThree='Sukienki-pastelowe') OR (categoryThree='Sukienki-plus-size') OR (categoryThree='Sukienki-rozkloszowane') OR (categoryThree='Sukienki-sportowe') OR (categoryThree='Sukienki-trapezowe') OR (categoryThree='Sukienki-wieczorowe') OR (categoryThree='Sukienki-wizytowe') OR (categoryThree='Sukienki-z-cekinami') OR (categoryThree='Sukienki-z-fredzlami') OR (categoryThree='Sukienki-z-odkrytymi-plecami') OR (categoryThree='Sukienki-za-kolano')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Dlugie-swetry-damskie'"
."WHERE ((name LIKE '%sweter %'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND ((name LIKE '%dług%') OR (description LIKE '%dług%'))"
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
."WHERE (((description LIKE '%długie szlifowania%') OR (description LIKE '%długo szlifowania%') OR (description LIKE '%długo szlifierki%') OR (description LIKE '%długie rękawy%')) AND (categoryOne='Dlugie-swetry-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Golfy-damskie'"
."WHERE ((name LIKE '%golf %'))"
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
."SET categoryOne='Kardigany-damskie'"
."WHERE ((name LIKE '%kardigan %'))"
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
."SET categoryOne='Swetry-rozpinane-damskie'"
."WHERE ((name LIKE '%sweter %'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND ((name LIKE '% rozpinan%') OR (description LIKE '% rozpinan%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Swetry-chlopiece'"
."WHERE ((name LIKE '%sweter%'))"
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
."SET categoryOne='Swetry-dziewczece'"
."WHERE ((name LIKE '%sweter%'))"
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
."SET categoryOne='Plecaki-meskie'"
."WHERE ((name LIKE '%plecak %'))"
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
."SET categoryOne='Teczki-meskie'"
."WHERE ((name LIKE '%teczka %'))"
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
."SET categoryOne='Torby-sportowe-meskie'"
."WHERE ((name LIKE '%torba %'))"
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
."SET categoryOne=''"
."WHERE ((description LIKE '%transport%') AND (categoryOne='Torby-sportowe-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Torby-meskie-na-ramie'"
."WHERE ((name LIKE '%torba %'))"
."AND ((name LIKE '%rami%') OR (description LIKE '%rami%'))"
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
."SET categoryOne='Torby-skorzane-meskie'"
."WHERE ((name LIKE '%torba %'))"
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

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Kopertowki'"
."WHERE ((name LIKE '%kopertówka %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Nerki-damskie'"
."WHERE ((name LIKE '%nerka%') || (name LIKE '%nerki%'))"
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
."SET categoryOne='Plecaki-damskie'"
."WHERE ((name LIKE '%plecak %'))"
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
."SET categoryOne='Torby-na-zakupy'"
."WHERE ((name LIKE '%torba %'))"
."AND ((name LIKE '%zakupy%') OR (description LIKE '%zakupy%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Torby-plazowe'"
."WHERE ((name LIKE '%torba%'))"
."AND ((name LIKE '%plażowa%') OR (description LIKE '%plażowa%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

// maincategory

$sql = "UPDATE `jos_get_xml_two`"
."SET maincategory='Zegarki-damskie'"
."WHERE ((name LIKE '%zegarek %'))"
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
."SET maincategory='Zegarki-meskie'"
."WHERE ((name LIKE '%zegarek %'))"
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
."SET maincategory='Akcesoria-damskie'"
."WHERE (categoryOne='Czapki-damskie'"
."OR categoryOne='Kapelusze-damskie'"
."OR categoryOne='Nauszniki-damskie'"
."OR categoryOne='Okulary-damskie'"
."OR categoryOne='Ozdoby-do-wlosow'"
."OR categoryOne='Parasole-damskie'"
."OR categoryOne='Paski-damskie'"
."OR categoryOne='Portfele-damskie'"
."OR categoryOne='Rekawiczki-damskie'"
."OR categoryOne='Szaliki-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET maincategory='Bielizna-damska'"
."WHERE (categoryOne='Bielizna-nocna'"
."OR categoryOne='Biustonosze'"
."OR categoryOne='Body-damskie'"
."OR categoryOne='Gorsety-damskie'"
."OR categoryOne='Majtki-damskie'"
."OR categoryOne='Pasy-do-ponczoch'"
."OR categoryOne='Podkolanowki-damskie'"
."OR categoryOne='Ponczochy-damskie'"
."OR categoryOne='Rajstopy damskie'"
."OR categoryOne='Skarpetki-damskie'"
."OR categoryOne='Stroje-kapielowe-damskie'"
."OR categoryOne='Zakolanowki')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}