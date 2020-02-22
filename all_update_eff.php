<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$url_array = array(
	array('Sin Fashion', 'https://service.weben1.com/xml/65e377b0-bd39-4ace-b167-7a479b5ffa8a.xml', ''),
	array('Sklep Kamil', 'https://service.weben1.com/xml/17ff7603-43cd-4ac6-9a94-478f67f4926b.xml', ''),
	array('Skórzana.com', 'https://service.weben1.com/xml/e61be327-035a-4578-aca1-b6b6dff95b76.xml', ''),
	array('Slimwallet', 'https://service.weben1.com/xml/7ab6c13b-8b56-4741-bfe0-210bc430fd5f.xml', ''),
	array('SneakerStudio', 'https://service.weben1.com/xml/f8a4c9a6-ebe7-4a8f-a250-b23ea505b3f5.xml', ''),
	array('Solier.pl', 'https://service.weben1.com/xml/42e29a3c-9410-4baa-9cb4-6cc8cd9f9afa.xml', '')
);

$z = new XMLReader;
$doc = new DOMDocument;

$error = 0;
$help = 0;
$aValues = array();
$cenzura_apostrof = array('"', "'");
$zamiana_apostrof = array('', '');
$prolog_link = "http://serwer1538689.home.pl/autoinstalator/scripts/";
$thumb = "thumbnaills/";
$thumbJoomla = "joomla1/images/thumbnaills/";
$jpg = ".jpg";
$png = ".png";

foreach ($url_array as &$url) {
  
    $z->open($url[1]);
	
	while ($z->read() && $z->name !== 'offer');
	
	while ($z->name === 'offer') {
	$row = simplexml_import_dom($doc->importNode($z->expand(), true));
	$shopname = $url[0];
	$check_in_database_help = $url[2];
	$all_sql_check = array();
	$sql_check = "SELECT `check_in_database`"
	."FROM `jos_get_xml_two`"
	."WHERE shop='$shopname'"
	."AND check_in_database_help='$check_in_database_help'"
	;
	
	$result = mysql_query($sql_check);

	while($row = mysql_fetch_object($result)) {
		
		if($row!=null) {
			$check_in_database = $row->check_in_database;
			$all_sql_check[] = $check_in_database;
		}
	}
	
	$z->next('offer');
	break;
	}
	while ($z->name === 'offer') {
		
		if ($help == 10){
			
			$sql = "INSERT INTO `jos_get_xml_two` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `size`, `shop`, `rand`, `filterone`, `check_in_database`, `brandName`, `sizeName`, `shopName`, `previousPrice`, `wyprzedaze`, `wyprzedazeName`, `check_in_database_help`)"
			.'VALUES '.implode(',',$aValues).';';
			$result = mysql_query($sql);
			if(!$result){
				$error = $error + 10;
				//echo 'error';
			} else {
			
				//echo 'succes';
				//echo memory_get_usage();
				//echo "\n";
				
			}
			$aValues = array();
			$help = 0;
		}

		$row = simplexml_import_dom($doc->importNode($z->expand(), true));
		
		$parsedAttributes = [];
		foreach ( $row->property as $attributeElement ) {
			$parsedAttributes[ (string)$attributeElement['name'] ] = (string)$attributeElement;
		}
		$awId = $row -> id;
		$name = str_replace(array('ä', 'ä', 'ä', 'ĺ', 'ĺ', 'ăł', 'ĺ', 'ĺź', 'ĺş', 'ĺť', 'ĺ', 'ĺ', 'Ä', 'Ä', 'Ä', 'Ĺ', 'Ĺ', 'Ăł', 'Ĺ', 'Ĺź', 'Ĺş', 'Ĺť', 'Ĺ', 'Ĺ'), array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł', 'ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł'), $row -> name);
		$price = $row -> price;
		$awImage = $row -> image;
		$pId = $parsedAttributes['ShopProductId'];
		$allCheckDom = $pId.$price.$name.$awImage;
		$pattern = '/[^A-Za-z0-9]/';
		$replacement = '';
		$allCheckDom = preg_replace($pattern, $replacement, $allCheckDom);
		$allCheckDom = substr($allCheckDom, 0, 99);
		
		//echo ''.$name.'';
		if(!in_array($allCheckDom, $all_sql_check)) {
		
			$awId = $row -> id;
			$name = str_replace(array('ä', 'ä', 'ä', 'ĺ', 'ĺ', 'ăł', 'ĺ', 'ĺź', 'ĺş', 'ĺť', 'ĺ', 'ĺ', 'Ä', 'Ä', 'Ä', 'Ĺ', 'Ĺ', 'Ăł', 'Ĺ', 'Ĺź', 'Ĺş', 'Ĺť', 'Ĺ', 'Ĺ'), array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł', 'ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł'), $row -> name);
			$desc = str_replace(array('ä', 'ä', 'ä', 'ĺ', 'ĺ', 'ăł', 'ĺ', 'ĺź', 'ĺş', 'ĺť', 'ĺ', 'ĺ', 'Ä', 'Ä', 'Ä', 'Ĺ', 'Ĺ', 'Ăł', 'Ĺ', 'Ĺź', 'Ĺş', 'Ĺť', 'Ĺ', 'Ĺ'), array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł', 'ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź', 'Ż', 'Ś', 'Ł'), $row -> description);
			$brand = $row -> producer;	
			$price = $row -> price;
			$awLink = $row -> url;
			$awThumb = str_replace(array('/i/', '.jpg', '.png'), array('/img/', '_250x250.jpg', '_250x250.png'), $row -> image);
			$awImage = $row -> image;
			$awCat = $row -> category;
			$mCat = $row -> shopcategory;
			$check_in_database_help = $url[2];
			$shop = $url[0];
			$pId = $parsedAttributes['ShopProductId'];
			$previousPrice = 0;
			$wyprzedaze = '';
			$wyprzedazeName = '';
			echo '\n';
			/*echo 'awId';
			echo ''.$awId.'';
			echo 'name';
			echo ''.$name.'';
			echo 'awLink';
			echo ''.$awLink.'';*/
			echo 'shop';
			echo ''.$shop.'';
			
			$getSizesElements = array();

			if($brand == '') {
			
				$brand = $shop;
				$brand = substr($brand, 0, -3);
				
			}
			
			if($row->property[0]['name']=='Rozmiar') {
				
				$sizes = $row->property[0];
				
			} elseif($row->property[1]['name']=='Rozmiar') {
				
				$sizes = $row->property[1];
				
			} elseif($row->property[2]['name']=='Rozmiar') {
				
				$sizes = $row->property[2];
				
			} elseif($row->property[3]['name']=='Rozmiar') {
				
				$sizes = $row->property[3];
				
			} elseif($row->property[4]['name']=='Rozmiar') {
				
				$sizes = $row->property[4];
				
			} else {
				
				$sizes = '';
				
			}
			
			if (strpos($sizes, ';') !== false) {
				//echo 'tak';
				$getSizesElements = explode(';', $sizes);	
			} elseif (strpos($sizes, ',') !== false) {
				$getSizesElements = explode(',', $sizes);
			}
			
			if (strpos($sizes, "; ") !== false) {
				$cenzura = array('; ');
				$zamiana = array(';');
				$sizes = str_replace( $cenzura, $zamiana, $sizes);
			}
			
			$size = $sizes;

			$sizeTwo = $getSizesElements[1];
			if ($sizeTwo == '') {
				$sizeTwo = 'nothing';
			}
			$sizeThree = $getSizesElements[2];
			if ($sizeThree == '') {
				$sizeThree = 'nothing';
			}
			$sizeFour = $getSizesElements[3];
			if ($sizeFour == '') {
				$sizeFour = 'nothing';
			}

			$search = 'szukaj';
			$filterone = 'nie';
			$rand = rand(1, 1000);
			$link_popularity = $awImage;
			$cenzura = array(':', '/');
			$zamiana = array('', '');
			$link_popularity = str_replace( $cenzura, $zamiana, $link_popularity);
			$link_popularity = substr($link_popularity, 0, -4);

			$filename = $awImage;
			$link_image = substr($filename, 22); 
			$cenzura = array( '/');
			$zamiana = array( '');
			$link_image = str_replace( $cenzura, $zamiana, $link_image);
			$link_image = 'http://localhost/Pictures/'.$link_image;
			
			//echo ''.$shop.'';  
			//echo ''.$colors.'';  
			//echo ''.$size.'';
			
			$previousPriceCheck = $row->property[0]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[0];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[1]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[1];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[2]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[2];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[3]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[3];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[4]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[4];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[5]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[5];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[6]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[6];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->property[7]['name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->property[7];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}

			if ($wyprzedaze == 'wyprzedaże') {
				if ((int)$previousPrice <= (int)$price) {
					$wyprzedaze = '';
					$wyprzedazeName = '';
				}
			}
			
			$awImage_save = substr($awImage, 7);
			$awImage_save = str_replace("/", "", $awImage_save);
			$awImage_save = str_replace(".", "", $awImage_save);
			$add_to_database = '';
			$filehandle = $thumb.$awImage_save.$jpg;

			if (file_exists($thumbJoomla.$awImage_save.$jpg)) {
				$filterone = 'pretak';
				$add_to_database = $prolog_link.$filehandle;
			} else {
				$filehandle = $thumb.$awImage_save.$png;
				if (file_exists($thumbJoomla.$awImage_save.$png)) {
					$filterone = 'pretak';
					$add_to_database = $prolog_link.$filehandle;
				}
			}

			$check_in_database = $pId.$price.$name.$awImage;
			$pattern = '/[^A-Za-z0-9]/';
			$replacement = '';
			$check_in_database = preg_replace($pattern, $replacement, $check_in_database);
			$check_in_database = substr($check_in_database, 0, 99);
			$name = str_replace($cenzura_apostrof, $zamiana_apostrof, $name);
			$desc = str_replace($cenzura_apostrof, $zamiana_apostrof, $desc);
			if ((stripos($mCat, 'damsk') !== false) || (stripos($mCat, 'ona/') !== false) || (stripos($mCat, 'dla kobie') !== false)) {
				$desc = "fake_damskie_gender".$desc;
			}
			if ((stripos($mCat, 'męski') !== false) || (stripos($mCat, 'on/') !== false) || (stripos($mCat, 'dla mężczy') !== false)) {
				$desc = "fake_męskie_gender".$desc;
			}
			if (stripos($mCat, 'chłopi') !== false) {
				$desc = "fake_chłopięce_gender".$desc;
			}
			if (stripos($mCat, 'dziewcz') !== false) {
				$desc = "fake_dziewczęce_gender".$desc;
			}
			if ((stripos($mCat, 'dzieck') !== false) || (stripos($mCat, 'dziecię') !== false)) {
				$desc = "fake_dziecięce_gender".$desc;
			}
			$brand = str_replace($cenzura_apostrof, $zamiana_apostrof, $brand);
			$price = str_replace($cenzura_apostrof, $zamiana_apostrof, $price);
			$awLink = str_replace($cenzura_apostrof, $zamiana_apostrof, $awLink);
			$awThumb = str_replace($cenzura_apostrof, $zamiana_apostrof, $awThumb);
			$awImage = str_replace($cenzura_apostrof, $zamiana_apostrof, $awImage);
			$size = str_replace($cenzura_apostrof, $zamiana_apostrof, $size);
			$shop = str_replace($cenzura_apostrof, $zamiana_apostrof, $shop);
			$sizes = str_replace($cenzura_apostrof, $zamiana_apostrof, $sizes);
			$link_popularity = str_replace($cenzura_apostrof, $zamiana_apostrof, $link_popularity);
			$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
			$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
			$brandName = str_replace( $cenzura, $zamiana, $brand);
			$brandName = str_replace(' ', '-', strtolower($brandName)); 
			$brandName = str_replace('-', '-', strtolower($brandName)); 
			$brandName = str_replace('/', '-', strtolower($brandName));
			$pattern = '/[^A-Za-z0-9]/';
			$replacement = '-';
			$brandName = preg_replace($pattern, $replacement, $brandName);
			$brandName = preg_replace('/-{2,}/','-',$brandName);
			if ($brandName[0] === '-') {
				$brandName = ltrim($brandName, '-');
			}
			if (substr($brandName, -1)) {
				$brandName = rtrim($brandName, '-');
			}
			$sizeName = str_replace( $cenzura, $zamiana, $size);
			$sizeName = str_replace(' ', '-', strtolower($sizeName)); 
			$sizeName = str_replace('-', '-', strtolower($sizeName)); 
			$sizeName = str_replace('/', '-', strtolower($sizeName));
			$pattern = '/[^A-Za-z0-9];/';
			$replacement = '-';
			$sizeName = preg_replace($pattern, $replacement, $sizeName);
			$sizeName = preg_replace('/-{2,}/','-',$sizeName);
			if ($sizeName[0] === '-') {
				$sizeName = ltrim($sizeName, '-');
			}
			if (substr($sizeName, -1)) {
				$sizeName = rtrim($sizeName, '-');
			}
			$shopName = str_replace( $cenzura, $zamiana, $shop);
			$shopName = str_replace(' ', '-', strtolower($shopName));
			$shopName = str_replace('-', '-', strtolower($shopName));
			$shopName = str_replace('/', '-', strtolower($shopName));
			$pattern = '/[^A-Za-z0-9]/';
			$replacement = '-';
			$shopName = preg_replace($pattern, $replacement, $shopName);
			$shopName = preg_replace('/-{2,}/','-',$shopName);
			if ($shopName[0] === '-') {
				$shopName = ltrim($shopName, '-');
			}
			if (substr($shopName, -1)) {
				$shopName = rtrim($shopName, '-');
			}
			
			$aValues[] = '("'.$awId.'","'.$name.'","'.$desc.'","'.$brand.'","'.(int)$price.'","'.$awLink.'","'.$awThumb.'","'.$awImage.'","'.$size.'","'.$shop.'","'.$rand.'","'.$filterone.'","'.$check_in_database.'","'.$brandName.'","'.$sizeName.'","'.$shopName.'","'.(int)$previousPrice.'","'.$wyprzedaze.'", "'.$wyprzedazeName.'","'.$check_in_database_help.'")';

			$help = $help + 1;
			
		} else {
			$previousPrice = $price;
			if ($parsedAttributes['PreviousPrice']) {
				$previousPrice = $parsedAttributes['PreviousPrice'];
			}
			$sqlUpdateXmlTwo = "UPDATE `jos_get_xml_two`"
			."SET previousPrice='$previousPrice'"
			."WHERE check_in_database='$allCheckDom'"
			;

			$resultUpdateXmlTwo = mysql_query($sqlUpdateXmlTwo);
		}
		
	$z->next('offer');
	
	}
	
	$sql = "INSERT INTO `jos_get_xml_two` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `size`, `shop`, `rand`, `filterone`, `check_in_database`, `brandName`, `sizeName`, `shopName`, `previousPrice`, `wyprzedaze`, `wyprzedazeName`, `check_in_database_help`)"
	.'VALUES '.implode(',',$aValues).';';
	$result = mysql_query($sql);
	if(!$result) {
		$error = $error + $help;
		//echo 'error';
	} else {
	
		//echo 'succes';
		//echo memory_get_usage();
		//echo "\n";
		
	}
	
	$aValues = array();
	$help = 0;
	$z->close();
  
}

echo ''.$error.'';