<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sqlKategoriaSubkategoria = "SELECT `kategoria_subkategoria_id`, `kategoria_subkategoria`"
."FROM `jos_kategoria_subkategoria`"
."WHERE kategoria_subkategoria_level='categoryOne'"
;

$resultKategoriaSubkategoria = mysql_query($sqlKategoriaSubkategoria);

if(!$resultKategoriaSubkategoria) {
	echo 'error';
} else {
	echo 'succes';
}

while($xmlKategoriaSubkategoria = mysql_fetch_object($resultKategoriaSubkategoria)) {

	$sql = "UPDATE `jos_get_xml_two`"
	."SET categoryOneId='$xmlKategoriaSubkategoria->kategoria_subkategoria_id'"
	."WHERE categoryOne='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
	."AND categoryOneId='0'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
