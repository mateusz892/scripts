<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET occasion= CONCAT(occasion, 'na studniówkę;'), occasionName= CONCAT(occasionName, 'na-studniowke;')"
."WHERE ((name LIKE '%studnió%') OR (description LIKE '%studnió%') OR (categoryOne='Sukienki-koronkowe'))"
."AND occasion NOT LIKE '%na studniówkę%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET occasion= CONCAT(occasion, 'na wesele;'), occasionName= CONCAT(occasionName, 'na-wesele;')"
."WHERE ((name LIKE '%wesel%') OR (description LIKE '%wesel%') OR (categoryOne='Sukienki-z-cekinami') OR (categoryOne='Sukienki-koktajlowe') OR (categoryOne='Sukienki-koronkowe') OR (categoryOne='Sukienki-pastelowe'))"
."AND occasion NOT LIKE '%na wesele%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET occasion= CONCAT(occasion, 'wieczorowe;'), occasionName= CONCAT(occasionName, 'wieczorowe;')"
."WHERE ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%') OR (categoryOne='Sukienki-z-cekinami') OR (categoryOne='Sukienki-koktajlowe'))"
."AND occasion NOT LIKE '%wieczorowe%'"
."AND maincategory='Sukienki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
