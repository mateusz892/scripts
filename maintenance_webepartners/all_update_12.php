<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-wizytowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%wizyt%') OR (description LIKE '%wizyt%'))"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-z-cekinami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%cekin%') OR (description LIKE '%cekin%'))"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-z-fredzlami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%frędzl%') OR (description LIKE '%frędzl%'))"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-z-odkrytymi-plecami'"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%plec%') OR (description LIKE '%plec%')) AND ((name LIKE '%odkry%') OR (description LIKE '%odkry%') OR (name LIKE '%wcię%') OR (description LIKE '%wcię%')))"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sukienki-za-kolano'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%za kolan%') OR (description LIKE '%za kolan%'))"
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

$sql = "UPDATE `jos_get_xml`"
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
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%')) AND ((categoryOne='Sukienki-asymetryczne') OR (categoryOne='Sukienki-do-pracy') OR (categoryOne='Sukienki-dresowe') OR (categoryOne='Sukienki-dzinsowe') OR (categoryOne='Sukienki-gorsetowe') OR (categoryOne='Sukienki-koktajlowe') OR (categoryOne='Sukienki-koronkowe') OR (categoryOne='Sukienki-koszulowe') OR (categoryOne='Sukienki-maxi') OR (categoryOne='Sukienki-midi') OR (categoryOne='Sukienki-mini') OR (categoryOne='Sukienki-na-wesele') OR (categoryOne='Sukienki-olowkowe') OR (categoryOne='Sukienki-pastelowe') OR (categoryOne='Sukienki-plus-size') OR (categoryOne='Sukienki-rozkloszowane') OR (categoryOne='Sukienki-sportowe') OR (categoryOne='Sukienki-trapezowe') OR (categoryOne='Sukienki-wieczorowe') OR (categoryOne='Sukienki-wizytowe') OR (categoryOne='Sukienki-z-cekinami') OR (categoryOne='Sukienki-z-fredzlami') OR (categoryOne='Sukienki-z-odkrytymi-plecami') OR (categoryOne='Sukienki-za-kolano')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

/*$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

/*$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

/*$sql = "UPDATE `jos_get_xml`"
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

/*$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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

$sql = "UPDATE `jos_get_xml`"
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