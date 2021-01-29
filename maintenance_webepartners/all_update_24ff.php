<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/042705c9448ec412a9f6ac0ac15d7000_ButyRaj%202_2171.xml',
'http://weben1.com/XML/20001/1b76e164419bfc8fd834c901ac8d616d_buty1%201%20_3245.xml',
'http://weben1.com/XML/20001/6f521dd735ccda98b373dae2db137a15_boutique%20bielizny%201_4309.xml',
'http://weben1.com/XML/20001/8eec7d1b475b38be606935be8e70fccd_borsaborsa%201_5417.xml',
'http://weben1.com/XML/20001/8c26208cf9ba6a6eeb781e0f3c3ddbae_BLUDSHOP%202_3201.xml',
'http://weben1.com/XML/20001/748fab8b7e42bd2467a07cbd200034b2_Blancz%202_346.xml',
'http://weben1.com/XML/20001/3dd13198e56a2d4d0a9880ce2e55e813_Bi%C5%BCuteria%20-%20Zegarki.pl%202_113.xml'
);

$z = new XMLReader;
$doc = new DOMDocument;

foreach ($url_array as &$url) {

	$checkArray = array();
	$shop = '';
    $z->open($url);
	
	while ($z->read() && $z->name !== 'prod');
	
	while ($z->name === 'prod') {

		$row = simplexml_import_dom($doc->importNode($z->expand(), true));
		$awId = $row['awId'];
		$pId = $row -> pId;
		$name = $row -> name;
		$price = $row -> price -> display;
		$awImage = $row -> awImage;
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

	$sql = "SELECT `id`, `check_in_database`, `awId`, `name`, `awLink`, `link_image`, `shop`, `awImage`"
	."FROM `jos_get_xml`"
	."WHERE shop='$shop'"
	;
	
	$thumb = "/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/";
	$jpg = ".jpg";
		
	$result = mysql_query($sql);
	echo ''.$shop.'';

	if(!mysql_num_rows($result) == 0) {
		
		while ($row = mysql_fetch_object($result)) {
			
			$link = $row->awImage;	
			$linkImage = $row->link_image;	
			$linkImage = str_replace("https://longfashion.pl/images/thumbnaills/", "", $linkImage);
			$awImage_save = substr($link, 7);
			$awImage_save = str_replace("/", "", $awImage_save);
			$awImage_save = str_replace(".", "", $awImage_save);

			$filehandle = $thumb.$linkImage;
			
			$check_in_database = $row->check_in_database;
			$awId = $row->awId;
			$name = $row->name;
			$awLink = $row->awLink;
			$shop = $row->shop;
            $id = $row->id;

			if (!in_array($check_in_database, $checkArray)) {
				
				echo '\n';
				echo 'check_in_databae';
				echo ''.$check_in_database.'';
				echo 'awId';
				echo ''.$awId.'';
				echo 'name';
				echo ''.$name.'';
				echo 'awLink';
				echo ''.$awLink.'';
				echo 'shop';
				echo ''.$shop.'';
				echo 'id';
				echo ''.$id.'';

				$sql_delete = "DELETE FROM `jos_get_xml`"
				."WHERE id='$id'"
				;
				$result_delete = mysql_query($sql_delete);

       			$sql_check = "SELECT `id`"
				."FROM `jos_get_xml`"
				." WHERE awImage='$link'"
				."LIMIT 1"
				;

				if(mysql_num_rows(mysql_query($sql_check)) == 0) {
					echo 'filehandle';
					echo ''.$filehandle.'';
					unlink($filehandle);
				}

			}

		}

	} else {
		echo 'brak sklepu';
		echo ''.$shop.'';
	}

}

echo 'tak';