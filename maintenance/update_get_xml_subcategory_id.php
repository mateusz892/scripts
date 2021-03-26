<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sqlKategoriaSubkategoria = "SELECT `kategoria_subkategoria_id`, `kategoria_subkategoria`"
."FROM `jos_kategoria_subkategoria`"
."WHERE kategoria_subkategoria_level='subcategoryOne'"
;

$resultKategoriaSubkategoria = mysql_query($sqlKategoriaSubkategoria);

if(!$resultKategoriaSubkategoria) {
	echo 'error';
} else {
	echo 'succes';
}

while($xmlKategoriaSubkategoria = mysql_fetch_object($resultKategoriaSubkategoria)) {

	$sql = "UPDATE `jos_get_xml_two`"
	."SET subcategoryOneId='$xmlKategoriaSubkategoria->kategoria_subkategoria_id'"
	."WHERE subcategoryOne='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
	."AND subcategoryOneId='0'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
