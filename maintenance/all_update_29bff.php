<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array(
	array('Monarti', 'https://service.weben1.com/xml/0b7ad5ce-3b51-407c-a0d9-4a04a0eacdf2.xml', ''),
	array('Moremoi', 'https://service.weben1.com/xml/df669a39-3998-4e3a-acd5-2d33c18a8942.xml', ''),
	array('Myness.pl', 'https://service.weben1.com/xml/1348895f-f319-435e-9e93-bc3eb2083670.xml', '')
);

$z = new XMLReader;
$doc = new DOMDocument;

foreach ($url_array as &$url) {

	$checkArray = array();
	$shop = $url[0];
	$check_in_database_help = $url[2];
    $z->open($url[1]);
	
	while ($z->read() && $z->name !== 'offer');
	
	while ($z->name === 'offer') {

		$row = simplexml_import_dom($doc->importNode($z->expand(), true));

		$parsedAttributes = [];
		foreach ( $row->property as $attributeElement ) {
			$parsedAttributes[ (string)$attributeElement['name'] ] = (string)$attributeElement;
		}
		$awId = $row -> id;
		$pId = $parsedAttributes['ShopProductId'];
		$name = str_replace(array('ä', 'ä', 'ä', 'ĺ', 'ĺ', 'ăł', 'ĺ', 'ĺź', 'ĺş', 'ĺť', 'ĺ', 'ĺ', 'Ä', 'Ä', 'Ä', 'Ĺ', 'Ĺ', 'Ăł', 'Ĺ', 'Ĺź', 'Ĺş', 'Ĺť', 'Ĺ', 'Ĺ'), array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł', 'ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł'), $row -> name);
		$price = $row -> price;
		$awImage = $row -> image;
		$allCheckDom = $pId.$price.$name.$awImage;
		$pattern = '/[^A-Za-z0-9]/';
		$replacement = '';
		$allCheckDom = preg_replace($pattern, $replacement, $allCheckDom);
		$allCheckDom = substr($allCheckDom, 0, 99);
		$checkArray[] = $allCheckDom;
		$shop = $url[0];
		$check_in_database_help = $url[2];
		$z->next('offer');
	
	}
	
	$z->close();

	$sql = "SELECT `id`, `check_in_database`, `awId`, `name`, `awLink`, `link_image`, `shop`, `awImage`"
	."FROM `jos_get_xml_two`"
	."WHERE shop='$shop'"
	."AND check_in_database_help='$check_in_database_help'"
	;
	
	$thumb = "/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/";
	$jpg = ".jpg";
		
	$result = mysql_query($sql);
	echo ''.$shop.'';

	if(!mysql_num_rows($result) == 0) {
		
		while ($row = mysql_fetch_object($result)) {
			
			$link = $row->awImage;	
			$linkImageFixed = $row->link_image;
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

				$sql_delete = "DELETE FROM `jos_get_xml_two`"
				."WHERE id='$id'"
				;
				$result_delete = mysql_query($sql_delete);

       			$sql_check = "SELECT `id`"
				."FROM `jos_get_xml_two`"
				." WHERE link_image='$linkImageFixed'"
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