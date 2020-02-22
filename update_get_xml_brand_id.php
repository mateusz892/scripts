<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

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
	."AND brandId='0'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
