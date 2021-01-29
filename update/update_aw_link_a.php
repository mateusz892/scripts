<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/710179ef2349eccc3856fbb894f72d80_avantisklep.com%202_2010.xml'
);

$z = new XMLReader;
$doc = new DOMDocument;

foreach ($url_array as &$url) {

	$checkArray = array();
	$allData = array();
	$shop = '';
    $z->open($url);
	
	while ($z->read() && $z->name !== 'prod');
	
	while ($z->name === 'prod') {

		$row = simplexml_import_dom($doc->importNode($z->expand(), true));
		$pId = $row -> pId;
		$name = $row -> name;
		$price = $row -> price -> display;
		$awImage = $row -> awImage;
		$allData[] = $row;
		$allCheckDom = $pId.$price.$name.$awImage;
		$pattern = '/[^A-Za-z0-9]/';
		$replacement = '';
		$allCheckDom = preg_replace($pattern, $replacement, $allCheckDom);
		$allCheckDom = substr($allCheckDom, 0, 99);
		$checkArray[] = $allCheckDom;
		$shop = $row['programName'];
		$z->next('prod');
	
	}
	
	$z->close();

	$all_sql_check = array();
	$aw_link_check = array();
	$sql_check = "SELECT `check_in_database`, `awLink`"
	."FROM `jos_get_xml`"
	."WHERE shop='$shop'"
	;
	
	$result = mysql_query($sql_check);

	while($row = mysql_fetch_object($result)) {
		
		if($row!=null) {
			$check_in_database = $row->check_in_database;
			$all_sql_check[] = $check_in_database;
			$aw_link_check[] = $row->awLink;
		}
	}
    $i = 0;
	foreach($allData as &$row) {
		$pId = $row -> pId;
		$name = $row -> name;
		$price = $row -> price -> display;
		$awImage = $row -> awImage;
		$awLink = $row -> awLink;
		$allCheckDom = $pId.$price.$name.$awImage;
		$pattern = '/[^A-Za-z0-9]/';
		$replacement = '';
		$allCheckDom = preg_replace($pattern, $replacement, $allCheckDom);
		$allCheckDom = substr($allCheckDom, 0, 99);
		
		if ((in_array($allCheckDom, $all_sql_check)) && (!in_array($awLink, $aw_link_check))) {
			print_r($name);
			$sql2 = "UPDATE `jos_get_xml`"
			."SET awLink='$awLink'"
			."WHERE check_in_database='$allCheckDom'"
			;
			
			$result2 = mysql_query($sql2);
			if(!$result2) {
				echo 'error';
			} else {
				echo 'succes';
			}
			$i = $i + 1;
		}
		if ($i === 100) {
			break;
		}
	
	}

}
