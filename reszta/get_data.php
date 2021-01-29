<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$data = array();

$sql = "SELECT DISTINCT `shop`"
."FROM `jos_get_xml`"
//."WHERE link_image!=''"
//."WHERE link_image=''"
//."WHERE `link_image` LIKE '%http%'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_row($result)) {
	$data[] = $row[0];
}
print_r($data);
$data_count = count($data);
echo $data_count;
echo "\n";
echo $data_count/30;

