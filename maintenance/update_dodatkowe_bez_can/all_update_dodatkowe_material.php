<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'dzianinowe;'), materialName= CONCAT(materialName, 'dzianinowe;')"
."WHERE ((name LIKE '%dzianin%') OR (description LIKE '%dzianin%'))"
."AND material NOT LIKE '%dzianinowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z poliestru;'), materialName= CONCAT(materialName, 'z-poliestru;')"
."WHERE ((name LIKE '%poliest%') OR (description LIKE '%poliest%'))"
."AND material NOT LIKE '%z poliestru%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Dresy-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (maincategory='Torby-meskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Muchy-meskie') OR (categoryOne='Paski-damskie') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'wełniane;'), materialName= CONCAT(materialName, 'welniane;')"
."WHERE ((name LIKE '%wełnian%') OR (description LIKE '%wełnian%') OR (name LIKE '%wełna %') OR (description LIKE '%wełna %') OR (name LIKE '%wełny %') OR (description LIKE '%wełny %'))"
."AND material NOT LIKE '%wełniane%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Krawaty') OR (categoryOne='Muchy-meskie') OR (categoryOne='Poszetki') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'bawełniane;'), materialName= CONCAT(materialName, 'bawelniane;')"
."WHERE ((name LIKE '%bawełnian%') OR (description LIKE '%bawełnian%') OR (name LIKE '%bawełna %') OR (description LIKE '%bawełna %') OR (name LIKE '%bawełny %') OR (description LIKE '%bawełny %'))"
."AND material NOT LIKE '%bawełniane%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Dresy-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Krawaty') OR (categoryOne='Muchy-meskie') OR (categoryOne='Poszetki') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z poliamidu;'), materialName= CONCAT(materialName, 'z-poliamidu;')"
."WHERE ((name LIKE '%poliami%') OR (description LIKE '%poliami%'))"
."AND material NOT LIKE '%z poliamidu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z elastanu;'), materialName= CONCAT(materialName, 'z-elastanu;')"
."WHERE ((name LIKE '%elastan%') OR (description LIKE '%elastan%'))"
."AND material NOT LIKE '%z elastanu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Rekawiczki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z wiskozy;'), materialName= CONCAT(materialName, 'z-wiskozy;')"
."WHERE ((name LIKE '%wiskoz%') OR (description LIKE '%wiskoz%'))"
."AND material NOT LIKE '%z wiskozy%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z poliakrylu;'), materialName= CONCAT(materialName, 'z-poliakrylu;')"
."WHERE ((name LIKE '%poliakry%') OR (description LIKE '%poliakry%'))"
."AND material NOT LIKE '%z poliakrylu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Szaliki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'kaszmirowe;'), materialName= CONCAT(materialName, 'kaszmirowe;')"
."WHERE ((name LIKE '%kaszmir%') OR (description LIKE '%kaszmir%'))"
."AND material NOT LIKE '%kaszmirowe%'"
."AND ((maincategory='Swetry-damskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Szaliki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z nylonu;'), materialName= CONCAT(materialName, 'z-nylonu;')"
."WHERE ((name LIKE '%nylon%') OR (description LIKE '%nylon%'))"
."AND material NOT LIKE '%z nylonu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (maincategory='Torby-meskie') OR (categoryOne='Czapki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szaliki-damskie') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'jeansowe;'), materialName= CONCAT(materialName, 'jeansowe;')"
."WHERE ((name LIKE '%jeans%') OR (description LIKE '%jeans%'))"
."AND material NOT LIKE '%jeansowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Szaliki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z jedwabiu;'), materialName= CONCAT(materialName, 'z-jedwabiu;')"
."WHERE ((name LIKE '%jedwab%') OR (description LIKE '%jedwab%'))"
."AND material NOT LIKE '%z jedwabiu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Sukienki') OR (categoryOne='Czapki-damskie') OR (categoryOne='Krawaty') OR (categoryOne='Muchy-meskie') OR (categoryOne='Poszetki') OR (subcategoryOne='Pizamy-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'skórzane;'), materialName= CONCAT(materialName, 'skorzane;')"
."WHERE ((name LIKE '%skórzan%') OR (description LIKE '%skórzan%') OR (name LIKE '%skóra %') OR (description LIKE '%skóra %') OR (name LIKE '%skóry %') OR (description LIKE '%skóry %'))"
."AND material NOT LIKE '%skórzane%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (maincategory='Torebki-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Paski-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Rekawiczki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'ze skóry ekologicznej;'), materialName= CONCAT(materialName, 'ze-skory-ekologicznej;')"
."WHERE ((name LIKE '%skóra ekologicz%') OR (description LIKE '%skóra ekologicz%') OR (name LIKE '%skóry ekologicz%') OR (description LIKE '%skóry ekologicz%'))"
."AND material NOT LIKE '%ze skóry ekologicznej%'"
."AND ((maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki') OR (maincategory='Torby-meskie') OR (maincategory='Torebki-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czapki-meskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Paski-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Rekawiczki-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'syntetyczne;'), materialName= CONCAT(materialName, 'syntetyczne;')"
."WHERE ((name LIKE '%syntet%') OR (description LIKE '%syntet%'))"
."AND material NOT LIKE '%syntetyczne%'"
."AND ((categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Paski-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z jerseyu;'), materialName= CONCAT(materialName, 'z-jerseyu;')"
."WHERE ((name LIKE '%jersey%') OR (description LIKE '%jersey%'))"
."AND material NOT LIKE '%z jerseyu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z tkaniny;'), materialName= CONCAT(materialName, 'z-tkaniny;')"
."WHERE ((name LIKE '%tkanin%') OR (description LIKE '%tkanin%'))"
."AND material NOT LIKE '%z tkaniny%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Dresy-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Plaszcze-damskie') OR (maincategory='Spodnice') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (maincategory='Swetry-damskie') OR (maincategory='Torby-meskie') OR (maincategory='Torebki-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z szyfonu;'), materialName= CONCAT(materialName, 'z-szyfonu;')"
."WHERE ((name LIKE '%szyfon%') OR (description LIKE '%szyfon%'))"
."AND material NOT LIKE '%z szyfonu%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'lniane;'), materialName= CONCAT(materialName, 'lniane;')"
."WHERE ((name LIKE '%len %') OR (description LIKE '%len %') OR (name LIKE '%lnu %') OR (description LIKE '%lnu %') OR (name LIKE '%lnian%') OR (description LIKE '%lnian%'))"
."AND material NOT LIKE '%lniane%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki') OR (categoryOne='Krawaty') OR (categoryOne='Poszetki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z lycry;'), materialName= CONCAT(materialName, 'z-lycry;')"
."WHERE ((name LIKE '%lycra%') OR (description LIKE '%lycra%') OR (name LIKE '%lycry%') OR (description LIKE '%lycry%'))"
."AND material NOT LIKE '%z lycry%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Dresy-damskie') OR (maincategory='Koszule-meskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Spodnie-meskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'welurowe;'), materialName= CONCAT(materialName, 'welurowe;')"
."WHERE ((name LIKE '%welur%') OR (description LIKE '%welur%'))"
."AND material NOT LIKE '%welurowe%'"
."AND ((maincategory='Bluzki-damskie') OR (maincategory='Bluzy-damskie') OR (maincategory='Sukienki') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'polarowe;'), materialName= CONCAT(materialName, 'polarowe;')"
."WHERE ((name LIKE '%polar%') OR (description LIKE '%polar%'))"
."AND material NOT LIKE '%polarowe%'"
."AND ((maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Plaszcze-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z dresówki;'), materialName= CONCAT(materialName, 'z-dresowki;')"
."WHERE ((name LIKE '%dresówk%') OR (description LIKE '%dresówk%'))"
."AND material NOT LIKE '%z dresówki%'"
."AND ((maincategory='Bluzy-damskie') OR (maincategory='Dresy-damskie') OR (maincategory='Koszulki-meskie') OR (maincategory='Kurtki-damskie') OR (maincategory='Kurtki-meskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie') OR (maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'sztruksowe;'), materialName= CONCAT(materialName, 'sztruksowe;')"
."WHERE ((name LIKE '%sztruks%') OR (description LIKE '%sztruks%'))"
."AND material NOT LIKE '%sztruksowe%'"
."AND ((maincategory='Bluzy-damskie') OR (maincategory='Spodnie-damskie') OR (maincategory='Spodnie-meskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z tworzywa sztucznego;'), materialName= CONCAT(materialName, 'z-tworzywa-sztucznego;')"
."WHERE ((name LIKE '%tworzywo sztucz%') OR (description LIKE '%tworzywo sztucz%') OR (name LIKE '%tworzywa sztucz%') OR (description LIKE '%tworzywa sztucz%'))"
."AND material NOT LIKE '%z tworzywa sztucznego%'"
."AND ((categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'zamszowe;'), materialName= CONCAT(materialName, 'zamszowe;')"
."WHERE ((name LIKE '%zamszow%') OR (description LIKE '%zamszow%') OR (name LIKE '%zamsz %') OR (description LIKE '%zamsz %') OR (name LIKE '%zamszu %') OR (description LIKE '%zamszu %'))"
."AND material NOT LIKE '%zamszowe%'"
."AND ((maincategory='Kurtki-damskie') OR (maincategory='Spodnice') OR (maincategory='Sukienki') OR (maincategory='Torebki-damskie') OR (categoryOne='Baleriny-damskie') OR (categoryOne='Muchy-meskie') OR (categoryOne='Plecaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z gumy;'), materialName= CONCAT(materialName, 'z-gumy;')"
."WHERE ((name LIKE '%guma %') OR (description LIKE '%guma %') OR (name LIKE '%gumy %') OR (description LIKE '%gumy %') OR (name LIKE '%gumow%') OR (description LIKE '%gumow%'))"
."AND material NOT LIKE '%z gumy%'"
."AND ((categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'z nubuku;'), materialName= CONCAT(materialName, 'z-nubuku;')"
."WHERE ((name LIKE '%nubuk%') OR (description LIKE '%nubuk%'))"
."AND material NOT LIKE '%z nubuku%'"
."AND ((categoryOne='Baleriny-damskie') OR (categoryOne='Botki-damskie') OR (categoryOne='Czolenka-damskie') OR (categoryOne='Kozaki-damskie') OR (categoryOne='Polbuty-damskie') OR (categoryOne='Polbuty-meskie') OR (categoryOne='Szpilki-damskie'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml_two`"
."SET material='tiulowe', materialName='tiulowe'"
."WHERE ((name LIKE '%tiul%') OR (description LIKE '%tiul%'))"
."AND material NOT LIKE '%dzianinowe%'"
."AND ((maincategory='Spodnice') OR (maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'satynowe;'), materialName= CONCAT(materialName, 'satynowe;')"
."WHERE ((name LIKE '%satyn%') OR (description LIKE '%satyn%'))"
."AND material NOT LIKE '%satynowe%'"
."AND ((maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'żakardowe;'), materialName= CONCAT(materialName, 'zakardowe;')"
."WHERE ((name LIKE '%żakar%') OR (description LIKE '%żakar%'))"
."AND material NOT LIKE '%żakardowe%'"
."AND ((maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET material= CONCAT(material, 'neoprenowe;'), materialName= CONCAT(materialName, 'neoprenowe;')"
."WHERE ((name LIKE '%neopren%') OR (description LIKE '%neopren%'))"
."AND material NOT LIKE '%neoprenowe%'"
."AND ((maincategory='Sukienki'))"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
