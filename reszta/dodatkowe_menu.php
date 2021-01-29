<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$material =     array("dzianinowe", "z-poliestru", "welniane", "bawelniane", "z-poliamidu", "z-elastanu", "z-wiskozy", "z-poliakrylu", "kaszmirowe", "z-nylonu", "jeansowe", "z-jedwabiu", "ze-skory-ekologicznej", "syntetyczne", "z-jerseyu", "z-tkaniny", "z-szyfonu", "lniane", "z-lycry", "welurowe", "polarowe", "z-dresowki", "sztruksowe", "z-tworzywa-sztucznego", "zamszowe", "z-gumy", "z-nubuku", "satynowe", "zakardowe", "neoprenowe");
$materialName = array("dzianinowe", "z poliestru", "wełniane", "bawełniane", "z poliamidu", "z elastanu", "z wiskozy", "z poliakrylu", "kaszmirowe", "z nylonu", "jeansowe", "z jedwabiu", "ze skóry ekologicznej", "syntetyczne", "z jerseyu", "z tkaniny", "z szyfonu", "lniane", "z lycry", "welurowe", "polarowe", "z dresówki", "sztruksowe", "z tworzywa sztucznego", "zamszowe", "z gumy", "z nubuku", "satynowe", "żakardowe", "neoprenowe");

$countMaterial = count($material);

for($i=1;$i<=$countMaterial;$i++) {

	$materialDb = $material[$i-1];
	$materialNameDb = $materialName[$i-1];

	$sql = "INSERT INTO `jos_material` (`material`, `material_name`)"
	."VALUES ('$materialDb', '$materialNameDb')"
	;
	$result = mysql_query($sql);
}

$wzor =     array("bez-wzorow", "w-kratke", "z-nadrukiem", "w-paski", "z-aplikacja", "z-abstrakcja", "w-kwiaty", "w-grochy", "z-nadrukami", "z-motywem-zwierzecym", "z-napisami", "z-haftem", "w-geometryczne-wzory", "moro", "w-groszki", "w-krate", "paisley");
$wzorName = array("bez wzorów", "w kratkę", "z nadrukiem", "w paski", "z aplikacją", "z abstrakcją", "w kwiaty", "w grochy", "z nadrukami", "z motywem zwierzęcym", "z napisami", "z haftem", "w geometryczne wzory", "moro", "w groszki", "w kratę", "paisley");

$countWzor = count($wzor);

for($i=1;$i<=$countWzor;$i++) {

	$wzorDb = $wzor[$i-1];
	$wzorNameDb = $wzorName[$i-1];

	$sql = "INSERT INTO `jos_wzor` (`wzor`, `wzor_name`)"
	."VALUES ('$wzorDb', '$wzorNameDb')"
	;
	$result = mysql_query($sql);
}

$poraRoku =     array("na-wiosne", "na-lato", "na-jesien", "na-zime");
$poraRokuName = array("na wiosnę", "na lato", "na jesień", "na zimę");

$countPoraRoku = count($poraRoku);

for($i=1;$i<=$countPoraRoku;$i++) {

	$poraRokuDb = $poraRoku[$i-1];
	$poraRokuNameDb = $poraRokuName[$i-1];

	$sql = "INSERT INTO `jos_pora_roku` (`pora_roku`, `pora_roku_name`)"
	."VALUES ('$poraRokuDb', '$poraRokuNameDb')"
	;
	$result = mysql_query($sql);
}

$styl =     array("casualowe", "eleganckie", "boho", "klasyczne", "mlodziezowe", "retro", "street", "rockowe", "vintage", "sportowe", "marynarskie", "militarne", "etno", "biznesowe", "wakacyjne");
$stylName = array("casualowe", "eleganckie", "boho", "klasyczne", "młodzieżowe", "retro", "street", "rockowe", "vintage", "sportowe", "marynarskie", "militarne", "etno", "biznesowe", "wakacyjne");

$countStyl = count($styl);

for($i=1;$i<=$countStyl;$i++) {

	$stylDb = $styl[$i-1];
	$stylNameDb = $stylName[$i-1];

	$sql = "INSERT INTO `jos_styl` (`styl`, `styl_name`)"
	."VALUES ('$stylDb', '$stylNameDb')"
	;
	$result = mysql_query($sql);
}

$zapiecie =     array("bez-zapiecia", "sznurowane", "na-zamek", "z-klamrami", "na-rzepy");
$zapiecieName = array("bez zapięcia", "sznurowane", "na zamek", "z klamrami", "na rzepy");

$countZapiecie = count($zapiecie);

for($i=1;$i<=$countZapiecie;$i++) {

	$zapiecieDb = $zapiecie[$i-1];
	$zapiecieNameDb = $zapiecieName[$i-1];

	$sql = "INSERT INTO `jos_zapiecie` (`zapiecie`, `zapiecie_name`)"
	."VALUES ('$zapiecieDb', '$zapiecieNameDb')"
	;
	$result = mysql_query($sql);
}

$dlugosc =     array("dlugie", "srednie", "krotkie");
$dlugoscName = array("długie", "średnie", "krótkie");

$countDlugosc = count($dlugosc);

for($i=1;$i<=$countDlugosc;$i++) {

	$dlugoscDb = $dlugosc[$i-1];
	$dlugoscNameDb = $dlugoscName[$i-1];

	$sql = "INSERT INTO `jos_dlugosc` (`dlugosc`, `dlugosc_name`)"
	."VALUES ('$dlugoscDb', '$dlugoscNameDb')"
	;
	$result = mysql_query($sql);
}

$dlugoscRekawa =     array("z-dlugim-rekawem", "z-krotkim-rekawem", "bez-rekawa");
$dlugoscRekawaName = array("z długim rękawem", "z krótkim rękawem", "bez rękawa");

$countDlugoscRekawa = count($dlugoscRekawa);

for($i=1;$i<=$countDlugoscRekawa;$i++) {

	$dlugoscRekawaDb = $dlugoscRekawa[$i-1];
	$dlugoscRekawaNameDb = $dlugoscRekawaName[$i-1];

	$sql = "INSERT INTO `jos_dlugosc_rekawa` (`dlugosc_rekawa`, `dlugosc_rekawa_name`)"
	."VALUES ('$dlugoscRekawaDb', '$dlugoscRekawaNameDb')"
	;
	$result = mysql_query($sql);
}

$okazja =     array("na-studniowke", "na-wesele", "wieczorowe");
$okazjaName = array("na studniówkę", "na wesele", "wieczorowe");

$countOkazja = count($okazja);

for($i=1;$i<=$countOkazja;$i++) {

	$okazjaDb = $okazja[$i-1];
	$okazjaNameDb = $okazjaName[$i-1];

	$sql = "INSERT INTO `jos_okazja` (`okazja`, `okazja_name`)"
	."VALUES ('$okazjaDb', '$okazjaNameDb')"
	;
	$result = mysql_query($sql);
}
