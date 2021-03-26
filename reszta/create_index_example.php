<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "CREATE INDEX `awId`"
."ON `jos_testy` (awId)"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

?>