<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "SELECT * "
."FROM `jos_get_xml_two`"
." WHERE id='965374'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_object($result)) {
	$link = $row->awImage;	
}

echo $link;
