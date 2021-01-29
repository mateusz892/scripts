<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Bizuteria-damska'"
."WHERE (categoryOne='Bransoletki'"
."OR categoryOne='Broszki'"
."OR categoryOne='Lancuszki'"
."OR categoryOne='Klipsy'"
."OR categoryOne='Naszyjniki'"
."OR categoryOne='Kolczyki'"
."OR categoryOne='Pierscionki'"
."OR categoryOne='Wisiorki'"
."OR categoryOne='Zawieszki')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Bluzki-damskie'"
."WHERE (categoryOne='Bluzki-koronkowe'"
."OR categoryOne='Bluzki-oversize'"
."OR categoryOne='Bluzki-sportowe'"
."OR categoryOne='Bluzki-wieczorowe'"
."OR categoryOne='Bluzki-z-nadrukiem')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory=''"
."WHERE maincategory='Bluzki-damskie'"
."AND ((name LIKE '%dziewczę%') OR (description LIKE '%dziewczę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Bluzy-damskie'"
."WHERE (categoryOne='Bluzy-polarowe-damskie'"
."OR categoryOne='Bluzy-sportowe-damskie'"
."OR categoryOne='Bluzy-z-kapturem-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory=''"
."WHERE maincategory='Bluzy-damskie'"
."AND ((name LIKE '%męsk%') OR (description LIKE '%męsk%') OR (name LIKE '%Mam super kobietę%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Buty-damskie'"
."WHERE (categoryOne='Baleriny-damskie'"
."OR categoryOne='Botki-damskie'"
."OR categoryOne='Buty-sportowe-damskie'"
."OR categoryOne='Buty-trekkingowe-damskie'"
."OR categoryOne='Czolenka-damskie'"
."OR categoryOne='Espadryle-damskie'"
."OR categoryOne='Kalosze-damskie'"
."OR categoryOne='Kapcie-damskie'"
."OR categoryOne='Klapki-damskie'"
."OR categoryOne='Kozaki-damskie'"
."OR categoryOne='Lordsy-damskie'"
."OR categoryOne='Polbuty-damskie'"
."OR categoryOne='Szpilki-damskie'"
."OR categoryOne='Trampki-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Dresy-damskie'"
."WHERE ((name LIKE '%dres %'))"
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
."SET maincategory=''"
."WHERE (((name LIKE '%iżama%') OR (description LIKE '%iżama%') OR (name LIKE '%andres%')) AND (maincategory='Dresy-damskie'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Koszule-damskie'"
."WHERE (categoryOne='Koszule-jeansowe-damskie'"
."OR categoryOne='Koszule-w-krate-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Kurtki-damskie'"
."WHERE (categoryOne='Kurtki-do-biegania-damskie'"
."OR categoryOne='Kurtki-jeansowe-damskie'"
."OR categoryOne='Kurtki-parki-damskie'"
."OR categoryOne='Kurtki-pikowane-damskie'"
."OR categoryOne='Kurtki-przejsciowe-damskie'"
."OR categoryOne='Kurtki-puchowe-damskie'"
."OR categoryOne='Kurtki-skorzane-damskie'"
."OR categoryOne='Kurtki-sportowe-damskie'"
."OR categoryOne='Kurtki-zimowe-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Plaszcze-damskie'"
."WHERE (categoryOne='Plaszcze-oversize'"
."OR categoryOne='Plaszcze-pikowane'"
."OR categoryOne='Plaszcze-welniane'"
."OR categoryOne='Plaszcze-z-futerkiem'"
."OR categoryOne='Plaszcze-z-kapturem'"
."OR categoryOne='Plaszcze-zimowe')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Spodnie-damskie'"
."WHERE (categoryOne='Alladynki-damskie'"
."OR categoryOne='Bojowki-damskie'"
."OR categoryOne='Chinosy-damskie'"
."OR categoryOne='Rybaczki-damskie'"
."OR categoryOne='Spodnie-bootcut'"
."OR categoryOne='Spodnie-culotte'"
."OR categoryOne='Spodnie-cygaretki'"
."OR categoryOne='Spodnie-dresowe-damskie'"
."OR categoryOne='Spodnie-rurki-damskie'"
."OR categoryOne='Spodnie-skinny'"
."OR categoryOne='Spodnie-sportowe-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Spodnice'"
."WHERE (categoryOne='Spodnice-asymetryczne'"
."OR categoryOne='Spodnice-jeansowe'"
."OR categoryOne='Spodnice-maxi'"
."OR categoryOne='Spodnice-midi'"
."OR categoryOne='Spodnice-mini'"
."OR categoryOne='Spodnice-olowkowe'"
."OR categoryOne='Spodnice-plisowane'"
."OR categoryOne='Spodnice-rozkloszowane'"
."OR categoryOne='Spodnice-skorzane'"
."OR categoryOne='Spodnice-sportowe'"
."OR categoryOne='Spodnice-tiulowe'"
."OR categoryOne='Spodnice-trapezowe')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Swetry-damskie'"
."WHERE (categoryOne='Dlugie-swetry-damskie'"
."OR categoryOne='Golfy-damskie'"
."OR categoryOne='Kardigany-damskie'"
."OR categoryOne='Swetry-rozpinane-damskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Sukienki'"
."WHERE (categoryOne='Sukienki-asymetryczne'"
."OR categoryOne='Sukienki-dla-puszystych'"
."OR categoryOne='Sukienki-do-pracy'"
."OR categoryOne='Sukienki-dresowe'"
."OR categoryOne='Sukienki-dzinsowe'"
."OR categoryOne='Sukienki-gorsetowe'"
."OR categoryOne='Sukienki-koktajlowe'"
."OR categoryOne='Sukienki-koronkowe'"
."OR categoryOne='Sukienki-koszulowe'"
."OR categoryOne='Sukienki-maxi'"
."OR categoryOne='Sukienki-midi'"
."OR categoryOne='Sukienki-mini'"
."OR categoryOne='Sukienki-mlodziezowe'"
."OR categoryOne='Sukienki-na-wesele'"
."OR categoryOne='Sukienki-olowkowe'"
."OR categoryOne='Sukienki-pastelowe'"
."OR categoryOne='Sukienki-plus-size'"
."OR categoryOne='Sukienki-rozkloszowane'"
."OR categoryOne='Sukienki-sportowe'"
."OR categoryOne='Sukienki-trapezowe'"
."OR categoryOne='Sukienki-wieczorowe'"
."OR categoryOne='Sukienki-wizytowe'"
."OR categoryOne='Sukienki-z-cekinami'"
."OR categoryOne='Sukienki-z-fredzlami'"
."OR categoryOne='Sukienki-z-odkrytymi-plecami'"
."OR categoryOne='Sukienki-za-kolano')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Torebki-damskie'"
."WHERE (categoryOne='Kopertowki'"
."OR categoryOne='Plecaki-damskie'"
."OR (((name LIKE '%zakupy%') OR (description LIKE '%zakupy%')) AND (name LIKE '%torba %')))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Akcesoria-meskie'"
."WHERE (categoryOne='Czapki-meskie'"
."OR categoryOne='Kapelusze-meskie'"
."OR categoryOne='Krawaty'"
."OR categoryOne='Muchy-meskie'"
."OR categoryOne='Okulary-meskie'"
."OR categoryOne='Paski-meskie'"
."OR categoryOne='Portfele-meskie'"
."OR categoryOne='Poszetki')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Bielizna-meska'"
."WHERE (categoryOne='Kalesony'"
."OR categoryOne='Kapielowki'"
."OR categoryOne='Majtki-meskie'"
."OR categoryOne='Pizamy-meskie'"
."OR categoryOne='Podkoszulki-meskie'"
."OR categoryOne='Skarpetki-meskie'"
."OR categoryOne='Szlafroki-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Bizuteria-meska'"
."WHERE (categoryOne='Bransolety'"
."OR categoryOne='Naszyjniki-meskie'"
."OR categoryOne='Sygnety-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Buty-meskie'"
."WHERE (categoryOne='Buty-sportowe-meskie'"
."OR categoryOne='Buty-trekkingowe-meskie'"
."OR categoryOne='Buty-wizytowe-meskie'"
."OR categoryOne='Buty-zimowe-meskie'"
."OR categoryOne='Espadryle-meskie'"
."OR categoryOne='Kalosze-meskie'"
."OR categoryOne='Kapcie-meskie'"
."OR categoryOne='Klapki-meskie'"
."OR categoryOne='Polbuty-meskie'"
."OR categoryOne='Sandaly-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Dresy-meskie'"
."WHERE ((name LIKE '%dres%'))"
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
."SET maincategory='Garnitury-meskie'"
."WHERE ((name LIKE '%garnitur %'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Koszule-meskie'"
."WHERE (categoryOne='Koszule-jeansowe-meskie'"
."OR categoryOne='Koszule-meskie-slim'"
."OR categoryOne='Koszule-meskie-sportowe'"
."OR categoryOne='Koszule-w-krate-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Koszulki-meskie'"
."WHERE (categoryOne='Koszulki-polo-meskie'"
."OR categoryOne='Koszulki-z-dlugim-rekawem-meskie'"
."OR categoryOne='T-shirty-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Kurtki-meskie'"
."WHERE (categoryOne='Kurtki-jeansowe-meskie'"
."OR categoryOne='Kurtki-letnie-meskie'"
."OR categoryOne='Kurtki-pikowane-meskie'"
."OR categoryOne='Kurtki-przejsciowe-meskie'"
."OR categoryOne='Kurtki-puchowe-meskie'"
."OR categoryOne='Kurtki-skorzane-meskie'"
."OR categoryOne='Kurtki-sportowe-meskie'"
."OR categoryOne='Kurtki-zimowe-meskie'"
."OR categoryOne='Parki-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Spodnie-meskie'"
."WHERE (categoryOne='Boggy-meskie'"
."OR categoryOne='Bojowki-meskie'"
."OR categoryOne='Chinosy-meskie'"
."OR categoryOne='Spodnie-dresowe-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Torby-meskie'"
."WHERE (categoryOne='Plecaki-meskie'"
."OR categoryOne='Teczki-meskie'"
."OR categoryOne='Torby-meskie-na-ramie'"
."OR categoryOne='Torby-skorzane-meskie'"
."OR categoryOne='Torby-sportowe-meskie')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Buty-dzieciece'"
."WHERE (categoryOne='Balerinki-dziewczece'"
."OR categoryOne='Buty-sportowe-dzieciece'"
."OR categoryOne='Kalosze-dzieciece'"
."OR categoryOne='Kozaki-dziewczece'"
."OR categoryOne='Polbuty-dzieciece'"
."OR categoryOne='Sandaly-dzieciece'"
."OR categoryOne='Trampki-dzieciece')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Kamizelki-dzieciece'"
."WHERE (categoryOne='Kamizelki-chlopiece'"
."OR categoryOne='Kamizelki-dziewczece')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Kurtki-dzieciece'"
."WHERE (categoryOne='Kurtki-chlopiece'"
."OR categoryOne='Kurtki-dziewczece')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Spodnie-dzieciece'"
."WHERE (categoryOne='Spodnie-chlopiece'"
."OR categoryOne='Spodnie-dziewczece')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Spodnice-dziewczece'"
."WHERE ((name LIKE '%spodnica%'))"
."AND ((name LIKE '%dziewczęc%') OR (description LIKE '%dziewczęc%') OR (name LIKE '%dziewczyn%') OR (description LIKE '%dziewczyn%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Sukienki-dziewczece'"
."WHERE ((name LIKE '%sukienka %'))"
."AND ((name LIKE '%dziecko%') OR (description LIKE '%dziecka%') OR (name LIKE '%dziecięc%') OR (description LIKE '%dziewczynka%') OR (description LIKE '%dziewczynki%'))"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

/*$sql = "UPDATE `jos_get_xml`"
."SET maincategory='Swetry-dzieciece'"
."WHERE (categoryOne='Swetry-chlopiece'"
."OR categoryOne='Swetry-dziewczece')"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

// kolory

$sql = "UPDATE `jos_get_xml`"
."SET color='czerwone', colorName='czerwone'"
."WHERE name LIKE '%czerwo%'"
."AND color=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET color='białe', colorName='biale'"
."WHERE (name LIKE '%biał%')"
."AND color=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET color='czarne', colorName='czarne'"
."WHERE name LIKE '%czarn%'"
."AND color=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml`"
."SET color='granatowe', colorName='granatowe'"
."WHERE name LIKE '%granatow%'"
."AND color=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='pudrowy róż', colorName='pudrowy-roz'"
."WHERE name LIKE '%granatow%'"
."AND ((name LIKE '%pudrow%') OR (description LIKE '%pudrow%'))"
."AND maincategory='Sukienki'"
."AND color=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}