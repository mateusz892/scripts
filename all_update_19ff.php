<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$url_array = array(
	array('Butik Kesi', 'https://service.weben1.com/xml/31be6612-5166-486b-8890-8d08b164be51.xml', ''),
	array('ButyRaj', 'https://service.weben1.com/xml/1fc9190b-d439-4ba9-8c89-649b9ac962ff.xml', ''),
	array('bonprix', 'https://service.weben1.com/xml/0efba87c-a8f4-4698-8b8f-4dca2511e35f.xml', 'bonprixb')
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