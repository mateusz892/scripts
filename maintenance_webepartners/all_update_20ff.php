<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/6ffd0a7e2060229ac8e4b94807767abe_StyloweObcasy.pl%202_2046.xml',
'http://weben1.com/XML/20001/ac02166ad1e62e310dc1a89e2ec24ce7_stylizara.pl%201_443.xml',
'http://weben1.com/XML/20001/b66f3632dde622a8a86c7537a98cf039_STYLION%202_600.xml',
'http://weben1.com/XML/20001/e2aa765d127da9df8a5bbf1a9bb58be7_sport%20stylowo%201_2006.xml',
'http://weben1.com/XML/20001/71e006321468ab235f04588c420eb82a_soox%201_2058.xml',
'http://weben1.com/XML/20001/0cd7c6f5bb9886ed44b945ec78789b71_SKLEP-LUZ%202_3291.xml',
'http://weben1.com/XML/20001/e7af60d00f3dadf1f03a3bdbb2bc6364_sklepbufff.pl%201_724.xml',
'http://weben1.com/XML/20001/26ca4566b6f8f55b3e3f3c3017cf9ea5_Sklep%20Kamil%202_2085.xml',
'http://weben1.com/XML/20001/24f4220d71827b21200c0783fa0a3ca7_Sin%20Fashion%202_2035.xml',
'http://weben1.com/XML/20001/f5aa7691b4059b96dbdb0439f1b43c7f_rahi%201_2036.xml',
'http://weben1.com/XML/20001/69d1b01bf24853798374c5b12508d964_Olive.pl%202_104.xml'
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