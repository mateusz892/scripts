<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/8bee14e7f73fc44d9db69ff8bccfe36a_wec.com.pl_114.xml',
'http://weben1.com/XML/20001/7681530fd4955629b6260d4dfb682e5a_viscolla%20fashion%201_704.xml',
'http://weben1.com/XML/20001/b05596af74c76d3e1d54e797a8a2e688_torebki%20zawsze%20lubiane%201_5369.xml',
'http://weben1.com/XML/20001/52bd90a3be645143af3c4ad082803269_termoaktywnie%201_1884.xml',
'http://weben1.com/XML/20001/ec01a34f7fc3b03448cc52f2a89d52e8_szewska%20pasja%201_1979.xml',
'http://weben1.com/XML/20001/ed543025badd2a6d5d1a58126a067bc3_styloweobcasy.pl%201_2046.xml',
'http://weben1.com/XML/20001/ac02166ad1e62e310dc1a89e2ec24ce7_stylizara.pl%201_443.xml'
);

$z = new XMLReader;
$doc = new DOMDocument;

$error = 0;
$help = 0;
$aValues = array();
$cenzura_apostrof = array('"', "'");
$zamiana_apostrof = array('', '');
$prolog_link = "http://serwer1538689.home.pl/autoinstalator/scripts/";
$thumb = "thumbnails/";
$thumbJoomla = "joomla1/images/thumbnails/";
$jpg = ".jpg";
$png = ".png";

foreach ($url_array as &$url) {
  
    $z->open($url);
	
	while ($z->read() && $z->name !== 'prod');
	
	while ($z->name === 'prod') {
	$row = simplexml_import_dom($doc->importNode($z->expand(), true));
	$shopname = $row['programName'];
	$all_sql_check = array();
	$sql_check = "SELECT `check_in_database`"
	."FROM `jos_get_xml`"
	."WHERE shop='$shopname'"
	;
	
	$result = mysql_query($sql_check);

	while($row = mysql_fetch_object($result)) {
		
		if($row!=null) {
			$check_in_database = $row->check_in_database;
			$all_sql_check[] = $check_in_database;
		}
	}
	
	$z->next('prod');
	break;
	}
	while ($z->name === 'prod') {
		
		if ($help == 10){
			
			$sql = "INSERT INTO `jos_get_xml` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `size`, `shop`, `rand`, `filterone`, `check_in_database`, `brandName`, `sizeName`, `shopName`, `previousPrice`, `wyprzedaze`, `wyprzedazeName`)"
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
		
		$awId = $row['awId'];
		$name = $row -> name;
		$price = $row -> price -> display;
		$awImage = $row -> awImage;
		$pId = $row -> pId;
		$allCheckDom = $pId.$price.$name.$awImage;
		$pattern = '/[^A-Za-z0-9]/';
		$replacement = '';
		$allCheckDom = preg_replace($pattern, $replacement, $allCheckDom);
		$allCheckDom = substr($allCheckDom, 0, 99);
		
		//echo ''.$name.'';
		if(!in_array($allCheckDom, $all_sql_check)) {
		
			$awId = $row['awId'];
			$name = $row -> name;
			$desc = $row -> desc;
			$brand = $row -> brand;	
			$price = $row -> price -> display;
			$awLink = $row -> awLink;
			$awThumb = $row -> awThumb;
			$awImage = $row -> awImage;
			$awCat = $row -> cat -> awCat;
			$mCat = $row -> cat -> mCat;
			$shop = $row['programName'];
			$pId = $row -> pId;
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
			
			if($row->atribute[0]['Name']=='Rozmiar') {
				
				$sizes = $row->atribute[0];
				
			} elseif($row->atribute[1]['Name']=='Rozmiar') {
				
				$sizes = $row->atribute[1];
				
			} elseif($row->atribute[2]['Name']=='Rozmiar') {
				
				$sizes = $row->atribute[2];
				
			} elseif($row->atribute[3]['Name']=='Rozmiar') {
				
				$sizes = $row->atribute[3];
				
			} elseif($row->atribute[4]['Name']=='Rozmiar') {
				
				$sizes = $row->atribute[4];
				
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
			
			$previousPriceCheck = $row->atribute[0]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[0];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[1]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[1];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[2]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[2];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[3]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[3];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[4]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[4];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[5]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[5];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[6]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[6];
				$wyprzedaze = 'wyprzedaże';
				$wyprzedazeName = 'wyprzedaze';
			}
			$previousPriceCheck = $row->atribute[7]['Name'];
			if ($previousPriceCheck == 'PreviousPrice') {
				$previousPrice = $row->atribute[7];
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
			
			$aValues[] = '("'.$awId.'","'.$name.'","'.$desc.'","'.$brand.'","'.(int)$price.'","'.$awLink.'","'.$awThumb.'","'.$awImage.'","'.$link_image.'","'.$size.'","'.$shop.'","'.$rand.'","'.$filterone.'","'.$check_in_database.'","'.$brandName.'","'.$sizeName.'","'.$shopName.'","'.(int)$previousPrice.'","'.$wyprzedaze.'", "'.$wyprzedazeName.'")';

			$help = $help + 1;
			
		} else {

		}
		
	$z->next('prod');
	
	}
	
	$sql = "INSERT INTO `jos_get_xml` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `size`, `shop`, `rand`, `filterone`, `check_in_database`, `brandName`, `sizeName`, `shopName`, `previousPrice`, `wyprzedaze`, `wyprzedazeName`)"
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