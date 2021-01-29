<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET `description` = replace(`description`,'<p>','')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET `description` = replace(`description`,'</p>',' ')"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryTwo=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryThree=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

// subcategory

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Koszulki-nocne'"
."WHERE ((name LIKE '%koszul%'))"
."AND ((name LIKE '%nocn%') OR (description LIKE '%nocn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')  OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%') OR (name LIKE '%dziewczynk%') OR (description LIKE '%dziewczynk%')) AND (subcategoryOne='Koszulki-nocne'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Pizamy-damskie'"
."WHERE ((name LIKE '%piżama %'))"
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
."SET subcategoryOne='Szlafroki-damskie'"
."WHERE ((name LIKE '%szlafrok %'))"
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
."SET subcategoryOne=''"
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (subcategoryOne='Szlafroki-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-balkonetka'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%balkonet%') OR (description LIKE '%balkonet%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-balkonetka'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%balkonet%') OR (description LIKE '%balkonet%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-balkonetka'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-balkonetka'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%balkonet%') OR (description LIKE '%balkonet%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-balkonetka'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-balkonetka'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-bardotki'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%bardotk%') OR (description LIKE '%bardotk%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-bardotki'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%bardotk%') OR (description LIKE '%bardotk%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-bardotki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-bardotki'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%bardotk%') OR (description LIKE '%bardotk%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-bardotki'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-bardotki'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-koronkowe'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%koronk%') OR (description LIKE '%koronk%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-koronkowe'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%koronk%') OR (description LIKE '%koronk%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-koronkowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-koronkowe'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%koronk%') OR (description LIKE '%koronk%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-koronkowe'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-koronkowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-push-up'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%push up%') OR (description LIKE '%push up%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-push-up'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%push up%') OR (description LIKE '%push up%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-push-up'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-push-up'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%push up%') OR (description LIKE '%push up%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-push-up'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-push-up'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-sportowe'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-sportowe'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-sportowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-sportowe'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%sportow%') OR (description LIKE '%sportow%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-sportowe'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-sportowe'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-miekkie'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%miękki%') OR (description LIKE '%miękki%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-miekkie'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%miękki%') OR (description LIKE '%miękki%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-miekkie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-miekkie'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%miękki%') OR (description LIKE '%miękki%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-miekkie'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-miekkie'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-minimizer'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%minimize%') OR (description LIKE '%minimize%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-minimizer'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%minimize%') OR (description LIKE '%minimize%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-minimizer'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-minimizer'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%minimize%') OR (description LIKE '%minimize%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-minimizer'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-minimizer'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Biustonosze-usztywniane'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%usztywnian%') OR (description LIKE '%usztywnian%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryTwo='Biustonosze-usztywniane'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%usztywnian%') OR (description LIKE '%usztywnian%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-usztywniane'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryThree='Biustonosze-usztywniane'"
."WHERE ((name LIKE '%biustonosz %'))"
."AND ((name LIKE '%usztywnian%') OR (description LIKE '%usztywnian%'))"
."AND canUpdate!='tak'"
."AND subcategoryOne!=''"
."AND subcategoryOne!='Biustonosze-usztywniane'"
."AND subcategoryTwo!=''"
."AND subcategoryTwo!='Biustonosze-usztywniane'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET subcategoryOne='Bokserki-damskie'"
."WHERE ((name LIKE '%bokserki %'))"
."AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobiet%') OR (description LIKE '%kobiet%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}