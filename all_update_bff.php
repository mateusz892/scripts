<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$url_array = array(
	array('CoZaButy.pl', 'https://service.weben1.com/xml/2f97470c-6710-46ac-b92d-98eeedaa9726.xml', ''),
	array('Demar24', 'https://service.weben1.com/xml/a1dc0b86-1278-43fb-84cf-19dde7c9dfb1.xml', ''),
	array('Diores.pl', 'https://service.weben1.com/xml/6687b808-51de-4ec6-9b26-57de1b36d67d.xml', ''),
	array('Duhla', 'https://service.weben1.com/xml/aaa117ca-b326-4d63-9052-ad3c38d63f05.xml', ''),
	array('e-zegarki.pl', 'https://service.weben1.com/xml/e48fb78c-225d-4207-8e9b-62d4113ecea9.xml', ''),
	array('Ekskluzywna.pl', 'https://service.weben1.com/xml/0b1fa1f5-2f67-4272-9db4-3488225fde1d.xml', 'Ekskluzywna.pla'),
	array('Ekskluzywna.pl', 'https://service.weben1.com/xml/3af35cc2-1a57-421a-9f0d-32225e58c2f2.xml', 'Ekskluzywna.plb'),
	array('Elegancki Pan', 'https://service.weben1.com/xml/d8527f47-9b3e-4876-93d1-3a35e3bb166e.xml', ''),
	array('Elitabut', 'https://service.weben1.com/xml/f44c7b84-dc22-4bf0-b60a-796f1c9fda2c.xml', ''),
	array('Eminence.pl', 'https://service.weben1.com/xml/b3ab5eea-2bd4-4270-915e-cd482bef079c.xml', ''),
	array('evega.pl', 'https://service.weben1.com/xml/ada67dbf-bac6-4ca4-aad9-eba5bd887ae1.xml', ''),
	array('Fajna-Biżuteria', 'https://service.weben1.com/xml/1eeb304b-764c-4841-ba09-f8c91ece5c3f.xml', ''),
	array('Felice.pl', 'https://service.weben1.com/xml/0df7e262-a05f-45e2-abcb-c6e4bdac4a8b.xml', ''),
	array('Galante.pl', 'https://service.weben1.com/xml/29129ee7-b068-465a-aa3c-6afdfa866799.xml', ''),
	array('gentle-man.pl', 'https://service.weben1.com/xml/401d66e1-debf-44d7-aa7f-95bc08d679fd.xml', ''),
	array('iloko.pl', 'https://service.weben1.com/xml/1023f28e-0ffb-48ee-8e63-a7e23c7d190f.xml', ''),
	array('Jubilea.pl', 'https://service.weben1.com/xml/a536276f-8591-425e-a81f-5916a382ad67.xml', ''),
	array('Jubiler.pl', 'https://service.weben1.com/xml/53e3c93a-26e9-4e38-b827-cd2d386287a4.xml', ''),
	array('Kids Hits', 'https://service.weben1.com/xml/64d8e149-e3a9-40f6-a87b-9f41af159675.xml', ''),
	array('Kody Mody', 'https://service.weben1.com/xml/b99af976-155a-4fb7-917d-4ae324a80246.xml', ''),
	array('Kontri.pl', 'https://service.weben1.com/xml/13d23696-76c1-4e5e-8f4b-319834c1dd4a.xml', ''),
	array('Koszulkowo', 'https://service.weben1.com/xml/55f642bd-70b7-4853-b095-552be298b5fa.xml', ''),
	array('Lamai.pl', 'https://service.weben1.com/xml/08eaca07-6594-482a-a3da-09b42be487b8.xml', ''),
	array('Lejdi.pl', 'https://service.weben1.com/xml/e9e7d5c3-43ec-4be9-9c25-f42b324fab34.xml', ''),
	array('Madnezz', 'https://service.weben1.com/xml/2c7dcd7a-3b01-4cac-9c7e-aac326056845.xml', ''),
	array('Moja Walizka', 'https://service.weben1.com/xml/f62d9334-75f0-469b-99f2-68387271b5e9.xml', ''),
	array('Molly.pl', 'https://service.weben1.com/xml/52ed796f-9a3e-4eb0-99a3-ac36cf50709d.xml', '')
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