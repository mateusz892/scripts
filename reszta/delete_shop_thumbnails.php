<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "SELECT `link_image`" 
."FROM `jos_get_xml`"
."WHERE shop='Nike'"
;

$result = mysql_query($sql);

if(!mysql_num_rows($result) == 0) {
	while ($row = mysql_fetch_object($result)) {
		$link_image = substr($row->link_image, 52);
		$link_image = '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/'.$link_image;
		echo '\n';
		echo 'link_image: ';
		echo ''.$link_image.'';
		unlink($link_image);
	}
}

?>
