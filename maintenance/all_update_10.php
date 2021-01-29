<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Spodnie-sportowe-damskie'"
."WHERE ((name LIKE '%spodnie %'))"
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
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%')) AND (categoryOne='Spodnie-sportowe-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Spodnie-wizytowe-damskie'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%wizytow%') OR (description LIKE '%wizytow%'))"
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
."SET categoryOne='Spodnie-chlopiece'"
."WHERE ((name LIKE '%spodnie %'))"
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
."SET categoryOne='Spodnie-dziewczece'"
."WHERE ((name LIKE '%spodnie %'))"
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

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Boggy-meskie'"
."WHERE ((name LIKE '%boggy%'))"
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
."SET categoryOne='Bojowki-meskie'"
."WHERE ((name LIKE '%bojówki%'))"
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
."SET categoryOne='Chinosy-meskie'"
."WHERE ((name LIKE '%chinosy%'))"
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
."SET categoryOne='Spodnie-dresowe-meskie'"
."WHERE ((name LIKE '%spodnie %'))"
."AND ((name LIKE '%dresow%') OR (description LIKE '%dresow%'))"
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
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-asymetryczne;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%asymetry%') OR (description LIKE '%asymetry%') OR (shopcategory LIKE '%asymetry%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-asymetryczne%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-asymetryczne'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%asymetry%') OR (description LIKE '%asymetry%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-asymetryczne'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-asymetryczne'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%asymetry%') OR (description LIKE '%asymetry%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-asymetryczne'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-asymetryczne'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne='Sukienki-dla-puszystych'"
."WHERE ((name LIKE '%sukienka%'))"
."AND ((name LIKE '%puszyst%') OR (description LIKE '%puszyst%'))"
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
."SET categoryTwo='Sukienki-dla-puszystych'"
."WHERE ((name LIKE '%sukienka%'))"
."AND ((name LIKE '%puszyst%') OR (description LIKE '%puszyst%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-dla-puszystych'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-dla-puszystych'"
."WHERE ((name LIKE '%sukienka%'))"
."AND ((name LIKE '%puszyst%') OR (description LIKE '%puszyst%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-dla-puszystych'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-dla-puszystych'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-do-pracy;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%prac%') OR (description LIKE '%prac%') OR (shopcategory LIKE '%prac%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-do-pracy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-do-pracy'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%prac%') OR (description LIKE '%prac%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-do-pracy'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-do-pracy'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%prac%') OR (description LIKE '%prac%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-do-pracy'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-do-pracy'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-dresowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%dreso%') OR (description LIKE '%dreso%') OR (shopcategory LIKE '%dreso%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-dresowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-dresowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%dreso%') OR (description LIKE '%dreso%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-dresowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-dresowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%dreso%') OR (description LIKE '%dreso%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-dresowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-dresowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-dzinsowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%dżinso%') OR (description LIKE '%dżinso%') OR (shopcategory LIKE '%dżinso%')) OR ((name LIKE '%jeanso%') OR (description LIKE '%jeanso%') OR (shopcategory LIKE '%jeanso%')))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-dzinsowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-dzinsowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%dżinso%') OR (description LIKE '%dżinso%')) OR ((name LIKE '%jeanso%') OR (description LIKE '%jeanso%')))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-dzinsowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-dzinsowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND (((name LIKE '%dżinso%') OR (description LIKE '%dżinso%')) OR ((name LIKE '%jeanso%') OR (description LIKE '%jeanso%')))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-dzinsowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-dzinsowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-gorsetowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%gorset%') OR (description LIKE '%gorset%') OR (shopcategory LIKE '%gorset%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-gorsetowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-gorsetowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%gorset%') OR (description LIKE '%gorset%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-gorsetowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-gorsetowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%gorset%') OR (description LIKE '%gorset%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-gorsetowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-gorsetowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-koktajlowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koktajlo%') OR (description LIKE '%koktajlo%') OR (shopcategory LIKE '%koktajlo%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-koktajlowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-koktajlowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koktajlo%') OR (description LIKE '%koktajlo%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-koktajlowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-koktajlowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koktajlo%') OR (description LIKE '%koktajlo%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-koktajlowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-koktajlowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-koronkowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koronko%') OR (description LIKE '%koronko%') OR (shopcategory LIKE '%koronko%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-koronkowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-koronkowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koronko%') OR (description LIKE '%koronko%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-koronkowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-koronkowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koronko%') OR (description LIKE '%koronko%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-koronkowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-koronkowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryOne= CONCAT(categoryOne, 'Sukienki-koszulowe;')"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koszulo%') OR (description LIKE '%koszulo%') OR (shopcategory LIKE '%koszulo%'))"
."AND canUpdate!='tak'"
."AND categoryOne NOT LIKE '%Sukienki-koszulowe%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryTwo='Sukienki-koszulowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koszulo%') OR (description LIKE '%koszulo%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-koszulowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET categoryThree='Sukienki-koszulowe'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%koszulo%') OR (description LIKE '%koszulo%'))"
."AND canUpdate!='tak'"
."AND categoryOne!=''"
."AND categoryOne!='Sukienki-koszulowe'"
."AND categoryTwo!=''"
."AND categoryTwo!='Sukienki-koszulowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}