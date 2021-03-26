<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "DELETE FROM `jos_kategoria_subkategoria`"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "ALTER TABLE `jos_kategoria_subkategoria` AUTO_INCREMENT = 1"
;

$result = mysql_query($sql);

$sql = "DELETE FROM `jos_sklep`"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "ALTER TABLE `jos_sklep` AUTO_INCREMENT = 1"
;

$result = mysql_query($sql);

$sql = "DELETE FROM `jos_rozmiar`"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "ALTER TABLE `jos_rozmiar` AUTO_INCREMENT = 1"
;

$result = mysql_query($sql);

$sql = "DELETE FROM `jos_kolor`"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "ALTER TABLE `jos_kolor` AUTO_INCREMENT = 1"
;

$result = mysql_query($sql);

$sql = "DELETE FROM `jos_marka`"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "ALTER TABLE `jos_marka` AUTO_INCREMENT = 1"
;

$result = mysql_query($sql);

$sql = "DELETE FROM `jos_get_xml`"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "ALTER TABLE `jos_get_xml` AUTO_INCREMENT = 1"
;

$result = mysql_query($sql);

?>