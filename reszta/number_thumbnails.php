<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$data = array();

$sql = "SELECT DISTINCT `awImage`, `link_image`, `awThumb`"
." FROM `jos_get_xml_two`"
." WHERE link_image NOT LIKE '%http%'"
." AND canUpdate='tak'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_row($result)) {
	$data[] = $row[0];
}

$data_count = count($data);
echo $data_count;
echo "\n";
echo $data_count/30;


