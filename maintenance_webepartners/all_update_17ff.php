<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$url_array = array('http://weben1.com/XML/20001/f97d788a22ab92e3acdeb322f96bb335_ELEGANCKI%20PAN%202_5367.xml',
'http://weben1.com/XML/20001/62bd738b34b531c688288d719e54d5f8_20%20in%20love%202_4342.xml',
'http://weben1.com/XML/20001/4e13cab9991e5cfbfcdc71acc908495b_alfasan%202_5456.xml',
'http://weben1.com/XML/20001/5261961cfcb904628f54edd0c5f9739f_atwora.pl%202_2138.xml',
'http://weben1.com/XML/20001/710179ef2349eccc3856fbb894f72d80_avantisklep.com%202_2010.xml',
'http://weben1.com/XML/20001/69573e0fbe6e2c4b7409ce92e366d865_bigielek1.pl_830.xml'
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