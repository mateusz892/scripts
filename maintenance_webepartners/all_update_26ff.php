<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/ad6b3f18e191227dcffda2e9a4118d91_be_trendy_1_3275.xml',
'http://weben1.com/XML/20001/ef5d2bfe2d638498f34261df115dfd3d_Gemre.com.pl%202_2136.xml',
//'http://weben1.com/XML/20001/8dda4f8ad13f00fbc214ee90dbcd2665_brodrene_1_5472.xml',
'http://weben1.com/XML/20001/f8db36f4eb09c494a1619ebe4d8db028_makana_1_8582.xml',
'http://weben1.com/XML/20001/d4aa3819fa81ce7edefa6cd564645656_SuperGalanteria.pl%202_11826.xml',
'http://weben1.com/XML/20001/2ced2374e1cf9ee67f3d7f9a3a1a2b26_VEROSTILO%202_2122.xml',
'http://weben1.com/XML/20001/af7244bb99debb4a1152fa49a993a05c_biżuteria.co_1_9630.xml',
'http://weben1.com/XML/20001/bde34e7721e5a33091503ba45b3f8ea5_pi%C5%BCamka%201_5371.xml',
'http://weben1.com/XML/20001/74003f585934ff31d164241113dc5a24_selfieroom_11818.xml',
'http://weben1.com/XML/20001/a2f42f936446626e7dd5766806c9f5c9_NUNU%202_8569.xml',
'http://weben1.com/XML/20001/fc0a87e43ede1f423412583293815598_Fajna-Bi%C5%BCuteria%202_3271.xml'
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