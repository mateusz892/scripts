<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, 'na studniówkę;'), occasionName= CONCAT(occasionName, 'na-studniowke;')"
."WHERE ((name LIKE '%studnió%') OR (description LIKE '%studnió%') OR (categoryOne LIKE '%Sukienki-koronkowe%'))"
."AND occasion NOT LIKE '%na studniówkę%'"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, 'na wesele;'), occasionName= CONCAT(occasionName, 'na-wesele;')"
."WHERE ((name LIKE '%wesel%') OR (description LIKE '%wesel%') OR (categoryOne LIKE '%Sukienki-z-cekinami%') OR (categoryOne LIKE '%Sukienki-koktajlowe%') OR (categoryOne LIKE '%Sukienki-koronkowe%') OR (categoryOne LIKE '%Sukienki-pastelowe%'))"
."AND occasion NOT LIKE '%na wesele%'"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET occasion= CONCAT(occasion, 'wieczorowe;'), occasionName= CONCAT(occasionName, 'wieczorowe;')"
."WHERE ((name LIKE '%wiecz%') OR (description LIKE '%wiecz%') OR (categoryOne LIKE '%Sukienki-z-cekinami%') OR (categoryOne LIKE '%Sukienki-koktajlowe%'))"
."AND occasion NOT LIKE '%wieczorowe%'"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
