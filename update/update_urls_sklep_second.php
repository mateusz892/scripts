<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$allResultA = array();
$allResultB = array();

$sqlA = "SELECT `id`, `shopName`"
."FROM `jos_get_xml`"
;

$resultA = mysql_query($sqlA);

while($row = mysql_fetch_object($resultA)) {

	$allResultA[] = $row;

}

foreach($allResultA as &$row) {

	$id = $row->id;
	$string = $row->shopName;
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$string = preg_replace($pattern, $replacement, $string);
	$string = preg_replace('/-{2,}/','-',$string);
	if ($string[0] === '-') {
		$string = ltrim($string, '-');
	}
	if (substr($string, -1)) {
		$string = rtrim($string, '-');
	}

	$sqlB = "UPDATE `jos_get_xml`"
	."SET shopName='$string'"
	."WHERE id=$id"
	;

	$resultB = mysql_query($sqlB);
	if(!$resultB) {
		echo 'error';
	} else {
		echo 'succes';
	}

}

$sqlC = "SELECT *"
."FROM `jos_sklep`"
;

$resultC = mysql_query($sqlC);

while($row = mysql_fetch_object($resultC)) {

	$allResultC[] = $row;

}

foreach($allResultC as &$row) {

	$id = $row->sklep_id;
	$string = $row->sklep;
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$string = preg_replace($pattern, $replacement, $string);
	$string = preg_replace('/-{2,}/','-',$string);
	if ($string[0] === '-') {
		$string = ltrim($string, '-');
	}
	if (substr($string, -1)) {
		$string = rtrim($string, '-');
	}

	$sqlD = "UPDATE `jos_sklep`"
	."SET sklep='$string'"
	."WHERE sklep_id=$id"
	;

	$resultD = mysql_query($sqlD);
	if(!$resultD) {
		echo 'error';
	} else {
		echo 'succes';
	}

}

?>
