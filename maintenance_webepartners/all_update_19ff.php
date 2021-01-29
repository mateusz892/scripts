<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/06a551ad447cbd2ccc4820f966cc070e_Lejdi.sklep.pl 2_125.xml',
'http://weben1.com/XML/20001/1c8f6ad20cb673a2c946185f794162d9_Your_Style.pl_2_302.xml',
'http://weben1.com/XML/20001/5127a926ccdb6ec533a654008339c1dd_zoio%201_2117.xml',
'http://weben1.com/XML/20001/9fa80e175795759b2749da4ab953784d_wec.com.pl 2_114.xml',
'http://weben1.com/XML/20001/a42434c7a619630f358df0642b4dd7ff_VISCIOLA_FASHION_2_704.xml',
'http://weben1.com/XML/20001/84c747c5f47c2da1ea8f0bf81f2b6e11_Torebki_Zawsze_Lubiane_2_5369.xml',
'http://weben1.com/XML/20001/bfe85ad27c37e6bb601d57cccbaed4eb_Termoaktywnie%202_1884.xml',
'http://weben1.com/XML/20001/1eccc72bac34be6d4791e43d8874abc4_Szewska_Pasja_2_1979.xml'
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