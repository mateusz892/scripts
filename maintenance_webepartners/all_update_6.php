<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Biustonosze'"
."WHERE (subcategoryOne='Biustonosze-balkonetka'"
."OR subcategoryOne='Biustonosze-bardotki'"
."OR subcategoryOne='Biustonosze-koronkowe'"
."OR subcategoryOne='Biustonosze-push-up'"
."OR subcategoryOne='Biustonosze-sportowe'"
."OR subcategoryOne='Biustonosze-miekkie'"
."OR subcategoryOne='Biustonosze-minimizer'"
."OR subcategoryOne='Biustonosze-usztywniane'"
."OR ((name LIKE '%biustonosz %') AND (subcategoryTwo='') AND (subcategoryThree='')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Body-damskie'"
."WHERE ((name LIKE '%body %'))"
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
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%') OR (name LIKE '%perfect body%') OR (name LIKE '%craft body%') OR (name LIKE '%body powder%') OR (name LIKE '%skarpetki%')  OR (name LIKE '%leginsy%')  OR (name LIKE '%body warmer%')  OR (name LIKE '%crossbody%')  OR (name LIKE '%gatta body%')  OR (name LIKE '%shepa body%') OR (name LIKE '%body gimnastyczne%') OR (name LIKE '%fiore body%') OR (name LIKE '%piżama%') OR (name LIKE '%taro%') OR (name LIKE '%packtowl%') OR (name LIKE '%ręcznik%') OR (name LIKE '%t-shirt%') OR (name LIKE '%lylou%') OR (name LIKE '%balsam do ciała%') OR (description LIKE '%dzieciaków%') OR (name LIKE '%Nobody%') OR (description LIKE '%Nobody%')) AND (categoryOne='Body-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Gorsety-damskie'"
."WHERE ((name LIKE '%gorset %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Majtki-damskie'"
."WHERE (subcategoryOne='Bokserki-damskie'"
."OR subcategoryOne='Figi-damskie'"
."OR subcategoryOne='Stringi-damskie'"
."OR (((name LIKE '%majtki %')) AND ((name LIKE '%damsk%') OR (description LIKE '%damsk%') OR (name LIKE '%kobie%') OR (description LIKE '%kobie%'))  AND (subcategoryTwo='') AND (subcategoryThree='')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Pasy-do-ponczoch'"
."WHERE ((name LIKE '%pas%'))"
."AND ((name LIKE '%do poń%') OR (description LIKE '%do poń%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Podkolanowki-damskie'"
."WHERE ((name LIKE '%podkolanówki %'))"
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
."SET categoryOne='Ponczochy-damskie'"
."WHERE ((name LIKE '%pończochy %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Rajstopy-damskie'"
."WHERE ((name LIKE '%rajstopy %'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%niemowl%') OR (description LIKE '%niemowl%') OR (name LIKE '%junior%') OR (name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%') OR (name LIKE '%chłopię%') OR (description LIKE '%chłopię%')) AND (categoryOne='Rajstopy-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Skarpetki-damskie'"
."WHERE ((name LIKE '%skarpetki %'))"
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
."SET categoryOne='Stroje-kapielowe-damskie'"
."WHERE (subcategoryOne='Bikini'"
."OR subcategoryOne='Stroje-kapielowe-dwuczesciowe'"
."OR subcategoryOne='Stroje-kapielowe-jednoczesciowe'"
."OR subcategoryOne='Stroje-kapielowe-push-up'"
."OR subcategoryOne='Monokini'"
."OR subcategoryOne='Tankini')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Zakolanowki'"
."WHERE ((name LIKE '%zakolanówki %'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%niemowl%') OR (description LIKE '%niemowl%')) AND (categoryOne='Zakolanowki'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Kalesony'"
."WHERE ((name LIKE '%kalesony %'))"
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
."WHERE (((name LIKE '%dla dzieci%') OR (name LIKE '%damskie%') OR (name LIKE '%chłopię%') OR (name LIKE '%dziecię%') OR (name LIKE '%women%') OR (description LIKE '%women%') OR (description LIKE '%dla dzieci%') OR (description LIKE '%damskie%') OR (description LIKE '%chłopię%') OR (description LIKE '%dziecię%')) AND (categoryOne='Kalesony'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Kapielowki'"
."WHERE ((name LIKE '%kapielowki %'))"
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
."WHERE (((name LIKE '%dziecięc%') OR (description LIKE '%dziecięc%') OR (name LIKE '%chłopię%') OR (description LIKE '%chłopię%')) AND (categoryOne='Kapielowki'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Majtki-meskie'"
."WHERE (subcategoryOne='Bokserki-meskie'"
."OR subcategoryOne='Slipy-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Pizamy-meskie'"
."WHERE ((name LIKE '%piżama %'))"
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
."WHERE ((name LIKE '%piżama %'))"
."AND (((name LIKE '%zimęs%') OR (description LIKE '%zimęs%') OR (name LIKE '%damsk%') OR (description LIKE '%damsk%')) AND (categoryOne='Pizamy-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Podkoszulki-meskie'"
."WHERE ((name LIKE '%podkoszulek %'))"
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
."SET categoryOne='Skarpetki-meskie'"
."WHERE ((name LIKE '%skarpetki %'))"
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
."SET categoryOne='Szlafroki-meskie'"
."WHERE ((name LIKE '%szlafrok %'))"
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
."WHERE (((description LIKE '%niejednego mężczyz%') OR (description LIKE '%twojego mężczyzn%') OR (description LIKE '%męskład%') OR (name LIKE '%męskład%')) AND (categoryOne='Szlafroki-meskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Bransoletki'"
."WHERE ((name LIKE '%bransoletka %'))"
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
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%')) AND (categoryOne='Bransoletki'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Broszki'"
."WHERE ((name LIKE '%broszka %') OR (name LIKE '%broszki %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Lancuszki'"
."WHERE ((name LIKE '%łańcuszek %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Klipsy'"
."WHERE ((name LIKE '%klipsy %'))"
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
."WHERE (((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%') OR (name LIKE '%do kołnierz%') OR (description LIKE '%do kołnierz%')) AND (categoryOne='Klipsy'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Kolczyki'"
."WHERE ((name LIKE '%kolczyki %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Naszyjniki'"
."WHERE ((name LIKE '%naszyjnik %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Pierscionki'"
."WHERE ((name LIKE '%pierścionek %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Sygnety-damskie'"
."WHERE ((name LIKE '%sygnet%'))"
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
."SET categoryOne='Wisiorki'"
."WHERE ((name LIKE '%wisiorek %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Zawieszki'"
."WHERE ((name LIKE '%zawieszka %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Bransolety'"
."WHERE ((name LIKE '%bransoleta%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET categoryOne='Naszyjniki-meskie'"
."WHERE ((name LIKE '%naszyjnik%'))"
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
."SET categoryOne='Sygnety-meskie'"
."WHERE ((name LIKE '%sygnet%'))"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%mężczyzn%') OR (description LIKE '%mężczyzn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/