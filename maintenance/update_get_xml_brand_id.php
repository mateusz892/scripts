<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sqlMarka = "SELECT `marka_id`, `marka`"
."FROM `jos_marka`"
;

$resultMarka = mysql_query($sqlMarka);

if(!$resultMarka) {
	echo 'error';
} else {
	echo 'succes';
}

while($xmlMarka = mysql_fetch_object($resultMarka)) {

	$sql = "UPDATE `jos_get_xml_two`"
	."SET brandId='$xmlMarka->marka_id'"
	."WHERE brandName='$xmlMarka->marka'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
