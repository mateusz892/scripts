<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$data = array();

$sqlShop = "SELECT DISTINCT `shopName`"
."FROM `jos_get_xml_two`"
//."WHERE link_image!=''"
//."WHERE link_image=''"
//."WHERE `link_image` LIKE '%http%'"
;

$resultShop = mysql_query($sqlShop);

while($row = mysql_fetch_row($resultShop)) {
	$shopName = $row[0];
	$sqlShopCount = "SELECT COUNT(*)"
	."FROM `jos_get_xml_two`"
	."WHERE shopName='$shopName'"
	."AND maincategory='Sukienki'"
	."AND filterone='tak'"
	;
	
	$resultShopCount = mysql_result(mysql_query($sqlShopCount), 0);
	if ($resultShopCount > 0) {
		echo $shopName;
		echo $resultShopCount;
	}

}
