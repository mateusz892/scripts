<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sqlA = "SELECT `facility`"
."FROM `jos_seo_facilities`"
."WHERE name='sitemapExcludeCategories'"
;

$resultA = explode(',', mysql_result(mysql_query($sqlA), 0));

foreach ($resultA as $row) {
	$newRow = ucfirst($row);

	$sqlB = "UPDATE `jos_kategoria_subkategoria`"
	."SET kategoria_subkategoria_search='tak'"
	."WHERE kategoria_subkategoria='$newRow'"
	;
	
	$resultB = mysql_query($sqlB);
	if (!$resultB) {
		echo 'error';
	} else {
		echo 'succes';
	}

}

?>
