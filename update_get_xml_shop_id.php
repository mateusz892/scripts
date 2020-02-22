<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sqlSklep = "SELECT `sklep_id`, `sklep`"
."FROM `jos_sklep`"
;

$resultSklep = mysql_query($sqlSklep);

if(!$resultSklep) {
	echo 'error';
} else {
	echo 'succes';
}

while($xmlSklep = mysql_fetch_object($resultSklep)) {

	$sql = "UPDATE `jos_get_xml_two`"
	."SET shopId='$xmlSklep->sklep_id'"
	."WHERE shopName='$xmlSklep->sklep'"
	."AND shopId='0'"
	;
	
	$result = mysql_query($sql);

	if(!$result) {
		echo 'error';
	} else {
		echo 'succes';
	}
}
