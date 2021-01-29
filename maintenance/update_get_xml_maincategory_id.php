<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sqlKategoriaSubkategoria = "SELECT `kategoria_subkategoria_id`, `kategoria_subkategoria`"
."FROM `jos_kategoria_subkategoria`"
."WHERE kategoria_subkategoria_level='maincategory'"
;

$resultKategoriaSubkategoria = mysql_query($sqlKategoriaSubkategoria);

if(!$resultKategoriaSubkategoria) {
	echo 'error';
} else {
	echo 'succes';
}

while($xmlKategoriaSubkategoria = mysql_fetch_object($resultKategoriaSubkategoria)) {

	$sql = "UPDATE `jos_get_xml_two`"
	."SET maincategoryId='$xmlKategoriaSubkategoria->kategoria_subkategoria_id'"
	."WHERE maincategory='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
	."AND maincategoryId='0'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
