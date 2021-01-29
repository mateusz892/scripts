<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$rand = 1183;
$randChanger = 0;
$counter = 0;

$sqlGetXml = "SELECT `name`, `shop`, `brand`, `awImage`"
." FROM `jos_get_xml`"
." WHERE popularity=5"
." ORDER BY `popularity`"
;

$resultGetXml = mysql_query($sqlGetXml);

if (!mysql_num_rows($resultGetXml) == 0) {
	
	while ($row = mysql_fetch_object($resultGetXml)) {

		if ($randChanger === 100) {
			$rand = $rand - 1;
			$randChanger = 0;
		}

		$name = $row->name;
		$shop = $row->shop;
		$brand = $row->brand;
		$awImage = $row->awImage;

		echo 'name: ';
		echo $name;
		echo 'shop: ';
		echo $shop;
		echo 'brand: ';
		echo $brand;
		echo 'awImage: ';
		echo $awImage;

		$sqlCheckGetXmlTwo = "SELECT `name`"
		."FROM `jos_get_xml_two`"
		." WHERE name='$name'"
		."LIMIT 1"
		;
		
		if (mysql_num_rows(mysql_query($sqlCheckGetXmlTwo)) != 0) {

			$sqlUpdateXmlTwo = "UPDATE `jos_get_xml_two`"
			."SET rand='$rand'"
			."WHERE name='$name'"
			;

			$resultUpdateXmlTwo = mysql_query($sqlUpdateXmlTwo);
			$randChanger = $randChanger + 1;
			$counter = $counter + 1;
		}
	}
}

echo $counter;

?>     
