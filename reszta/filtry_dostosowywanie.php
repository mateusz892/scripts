<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$kategoriaDostosowywanie = array(
["Biżuteria damska",  "beżowe",        "beżowy",          "beżowa",          "dzianinowe",    "dzianinowy",  "dzianinowa",  "casualowe",   "casualowy",   "casualowa",    "długie",   "długi",  "długa"],
["Odzież",            "białe",         "biały",           "biała",           "neoprenowe",    "neoprenowy",  "neoprenowa",  "eleganckie",  "elegancki",   "elegancka",    "średnie",  "średni", "średnia"],
["Bielizna damska",   "bordowe",       "bordowy",         "bordowa",         "wełniane",      "wełniany",    "wełniana",    "klasyczne",   "klasyczny",   "klasyczna",    "krótkie",  "krótki", "krótka"],
["Bielizna męska",    "brązowe",       "brązowy",         "brązowa",         "bawełniane",    "bawełniany",  "bawełniana",  "młodzieżowe", "młodzieżowy", "młodzieżowa",  null,          null,       null],
[null,                "błękitne",      "błękitny",        "błękitna",        "żakardowe",     "żakardowy",   "żakardowa",   "rockowe",     "rockowy",     "rockowa",      null,          null,       null],
[null,                "czarne",        "czarny",          "czarna",          "satynowe",      "satynowy",    "satynowa",    "sportowe",    "sportowy",    "sportowa",     null,          null,       null],
[null,                "czerwone",      "czerwony",        "czerwona",        "tiulowe",       "tiulowy",     "tiulowa",     "marynarskie", "marynarski",  "marynarska",   null,          null,       null],
[null,                "fioletowe",     "fioletowy",       "fioletowa",       "kaszmirowe",    "kaszmirowy",  "kaszmirowa",  "militarne",   "militarny",   "militarna",    null,          null,       null],
[null,                "granatowe",     "granatowy",       "granatowa",       "jeansowe",      "jeansowy",    "jeansowa",    "biznesowe",   "biznesowy",   "biznesowa",    null,          null,       null],
[null,                "miętowe",       "miętowy",         "miętowa",         "skórzane",      "skórzany",    "skórzana",    "wakacyjne",   "wakacyjny",   "wakacyjna",    null,          null,       null],
[null,                "niebieskie",    "niebieski",       "niebieska",       "syntetyczne",   "syntetyczny", "syntetyczna", null,          null,          null,           null,          null,       null],
[null,                "pomarańczowe",  "pomarańczowy",    "pomarańczowa",    "lniane",        "lniany",      "lniana",      null,          null,          null,           null,          null,       null],
[null,                "różowe",        "różowy",          "różowa",          "welurowe",      "welurowy",    "welurowa",    null,          null,          null,           null,          null,       null],
[null,                "srebrne",       "srebrny",         "srebrna",         "polarowe",      "polarowy",    "polarowa",    null,          null,          null,           null,          null,       null],
[null,                "szare",         "szary",           "szara",           "sztruksowe",    "sztruksowy",  "sztruksowa",  null,          null,          null,           null,          null,       null],
[null,                "turkusowe",     "turkusowy",       "turkusowa",       "zamszowe",      "zamszowy",    "zamszowa",    null,          null,          null,           null,          null,       null],
[null,                "wielokolorowe", "wielokolorowy",   "wielokolorowa",   null,            null,          null,          null,          null,          null,           null,          null,       null],
[null,                "zielone",       "zielony",         "zielona",         null,            null,          null,          null,          null,          null,           null,          null,       null],
[null,                "żółte",         "żółty",           "żółta",           null,            null,          null,          null,          null,          null,           null,          null,       null],
[null,                "złote",         "złoty",           "złota",           null,            null,          null,          null,          null,          null,           null,          null,       null]
);

$countKategoriaDostosowywanie = count($kategoriaDostosowywanie);

for($i=1; $i<=$countKategoriaDostosowywanie; $i++) {

	$kategoria = $kategoriaDostosowywanie[$i-1][0];
	$kolorA = $kategoriaDostosowywanie[$i-1][1];
	$kolorB = $kategoriaDostosowywanie[$i-1][3];
	$kolorC = $kategoriaDostosowywanie[$i-1][4];
	$materialA = $kategoriaDostosowywanie[$i-1][5];
	$materialB = $kategoriaDostosowywanie[$i-1][6];
	$materialC = $kategoriaDostosowywanie[$i-1][7];
	$stylA = $kategoriaDostosowywanie[$i-1][8];
	$stylB = $kategoriaDostosowywanie[$i-1][9];
	$stylC = $kategoriaDostosowywanie[$i-1][10];
	$dlugoscA = $kategoriaDostosowywanie[$i-1][11];
	$dlugoscB = $kategoriaDostosowywanie[$i-1][12];
	$dlugoscC = $kategoriaDostosowywanie[$i-1][13];

	$sql = "INSERT INTO `jos_filtry_odmiana` (`kategoria`, `kolor_a`, `kolor_b`, `kolor_c`, `material_a`, `material_b`, `material_c`, `styl_a`, `styl_b`, `styl_c`, `dlugosc_a`, `dlugosc_b`, `dlugosc_c`)"
	."VALUES ('$kategoria', '$kolorA', '$kolorB', '$kolorC', '$materialA', '$materialB', '$materialC', '$stylA', '$stylB', '$stylC', '$dlugoscA', '$dlugoscB', '$dlugoscC')"
	;
	$result = mysql_query($sql);
}
