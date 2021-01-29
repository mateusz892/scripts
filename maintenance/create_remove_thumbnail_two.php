<?php
ob_start();
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$formatFromLink = array('ą','ć','ę','ł','ń','ó','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q',' ');
$formatToLink = array('a','c','e','l','n','o','s','z','z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','-');
$old_polish_signs = array('Ą','Ć','Ę','Ł','Ó','Ń','Ś','Ż','Ź','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','W','X','Y','Z','Q','V');
$new_polish_signs = array('ą','ć','ę','ł','ó','ń','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','v');
$prolog_link = "https://longfashion.pl/images/";
$thumb = "thumbnaills/";
$thumbJoomla = "longfashion.pl/images/thumbnaills/";
$jpg = ".jpg";
$png = ".png";

$sql = "SELECT `id`, `awLink`, `name`, `awImage`, `link_image`, `awThumb`, `shop`"
." FROM `jos_get_xml_two`"
." WHERE `link_image` NOT LIKE '%http%'"
." AND canUpdate='tak'"
." LIMIT 60"
;

$result = mysql_query($sql);

if(!mysql_num_rows($result) == 0) {
	
	while ($row = mysql_fetch_object($result)) {

		print_r($row->shop);
		$id = $row->id;
		$awLink = $row->awLink;
		$string = $row->name;
		$string = str_replace($old_polish_signs, $new_polish_signs, $string);
		$string = str_replace($formatFromLink, $formatToLink, $string);
		$string = preg_replace('/[^\p{L}0-9\s]+/u', '-', $string);
		$string = rtrim($string, '-');
		$string = ltrim($string, '-');
		$nameAlias = $string.'-'.$id;
		$string = $id.'-'.$string;

		$link = $row->awImage;
		$awThumb = $row->awThumb;
		$awImage_save = substr($link, 7);
		$awImage_save = str_replace("/", "", $awImage_save);
        $awImage_save = str_replace(".", "", $awImage_save);
		
		$filehandle = $thumb.$string.$jpg;

		$ch = curl_init($link);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_TIMEOUT,2);
		$output = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if ($httpcode === 0) {
			if (($awThumb == null) || ($awThumb == '')) {
				$awThumb = 'httpnic';
			}
			$sql_update_three = "UPDATE `jos_get_xml_two`"
			."SET filterone='nie'"
			."WHERE id='$id'"
			;

			$result_update_three = mysql_query($sql_update_three);

			$sqlB = "UPDATE `jos_get_xml_two`"
			."SET nameAlias='$nameAlias'"
			."WHERE id=$id"
			;
			
			$resultB = mysql_query($sqlB);

			$sql_update_two = "UPDATE `jos_get_xml_two`"
			."SET link_image='$awThumb'"
			."WHERE id='$id'"
			;

			$result_update_two = mysql_query($sql_update_two);
			
			echo 'nie';
			curl_close($ch);
		} else {
			if (exif_imagetype($link) == IMAGETYPE_JPEG) {
				$filehandle = $thumb.$string.$jpg;
				try {
					$im = new Imagick(''.$link.'');
					$im->thumbnailImage(240, 240, true);
					$im->setImageCompressionQuality(95);
					$im->writeImage($thumb.$string.$jpg);
					rename('thumbnaills/'.$string.$jpg, '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/'.$string.$jpg);
		
					$sql_update_filter = "UPDATE `jos_get_xml_two`"
					."SET filterone='tak'"
					."WHERE id='$id'"
					;
		
					$result_update_filter = mysql_query($sql_update_filter);
		
					$sqlB = "UPDATE `jos_get_xml_two`"
					."SET nameAlias='$nameAlias'"
					."WHERE id=$id"
					;
					
					$resultB = mysql_query($sqlB);
		
					$add_to_database = $prolog_link.$filehandle;
	
					$sql_update = "UPDATE `jos_get_xml_two`"
					."SET link_image='$add_to_database'"
					."WHERE id='$id'"
					;
		
					$result_update = mysql_query($sql_update);

					$sql_affiliate_redirects = "INSERT INTO `jos_affiliate_redirects` (`previousId`, `awLink`)"
					.'VALUES ("'.$id.'", "'.$awLink.'")';
					$result_affiliate_redirects = mysql_query($sql_affiliate_redirects);
				
					echo 'tak';
				}
				catch (Exception $e) {
					if (($awThumb == null) || ($awThumb == '')) {
						$awThumb = 'httpnic';
					}
					$sql_update_three = "UPDATE `jos_get_xml_two`"
					."SET filterone='nie'"
					."WHERE id='$id'"
					;
		
					$result_update_three = mysql_query($sql_update_three);
		
					$sqlB = "UPDATE `jos_get_xml_two`"
					."SET nameAlias='$nameAlias'"
					."WHERE id=$id"
					;
					
					$resultB = mysql_query($sqlB);
		
					$sql_update_two = "UPDATE `jos_get_xml_two`"
					."SET link_image='$awThumb'"
					."WHERE id='$id'"
					;
		
					$result_update_two = mysql_query($sql_update_two);
					
					echo 'nie';
				}

				curl_close($ch);
	
			} elseif (exif_imagetype($link) == IMAGETYPE_PNG) {
				$filehandle = $thumb.$string.$png;
				try {
					$im = new Imagick(''.$link.'');
					$im->thumbnailImage(240, 240, true);
					$im->setImageCompressionQuality(95);
					$im->writeImage($thumb.$string.$png);
					rename('thumbnaills/'.$string.$png, '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/'.$string.$png);
				
					$sql_update_filter = "UPDATE `jos_get_xml_two`"
					."SET filterone='tak'"
					."WHERE id='$id'"
					;
		
					$result_update_filter = mysql_query($sql_update_filter);
		
					$sqlB = "UPDATE `jos_get_xml_two`"
					."SET nameAlias='$nameAlias'"
					."WHERE id=$id"
					;
					
					$resultB = mysql_query($sqlB);
		
					$add_to_database = $prolog_link.$filehandle;
					$sql_update = "UPDATE `jos_get_xml_two`"
					."SET link_image='$add_to_database'"
					."WHERE id='$id'"
					;
		
					$result_update = mysql_query($sql_update);

					$sql_affiliate_redirects = "INSERT INTO `jos_affiliate_redirects` (`previousId`, `awLink`)"
					.'VALUES ("'.$id.'", "'.$awLink.'")';
					$result_affiliate_redirects = mysql_query($sql_affiliate_redirects);
				
					echo 'tak';
				}
				catch (Exception $e) {
					if (($awThumb == null) || ($awThumb == '')) {
						$awThumb = 'httpnic';
					}
					$sql_update_three = "UPDATE `jos_get_xml_two`"
					."SET filterone='nie'"
					."WHERE id='$id'"
					;
		
					$result_update_three = mysql_query($sql_update_three);
		
					$sqlB = "UPDATE `jos_get_xml_two`"
					."SET nameAlias='$nameAlias'"
					."WHERE id=$id"
					;
					
					$resultB = mysql_query($sqlB);
		
					$sql_update_two = "UPDATE `jos_get_xml_two`"
					."SET link_image='$awThumb'"
					."WHERE id='$id'"
					;
		
					$result_update_two = mysql_query($sql_update_two);
					
					echo 'nie';
				}

				curl_close($ch);
	
			} else {
				if (($awThumb == null) || ($awThumb == '')) {
					$awThumb = 'httpnic';
				}
				$sql_update_three = "UPDATE `jos_get_xml_two`"
				."SET filterone='nie'"
				."WHERE id='$id'"
				;
	
				$result_update_three = mysql_query($sql_update_three);
	
				$sqlB = "UPDATE `jos_get_xml_two`"
				."SET nameAlias='$nameAlias'"
				."WHERE id=$id"
				;
				
				$resultB = mysql_query($sqlB);
	
				$sql_update_two = "UPDATE `jos_get_xml_two`"
				."SET link_image='$awThumb'"
				."WHERE id='$id'"
				;
	
				$result_update_two = mysql_query($sql_update_two);
				
				echo 'nie';
				curl_close($ch);
	
			}
		}
		
	}
	
} else {

	$i = 0;
	if (isset($_COOKIE["removethumbs"])) {
		$i = htmlspecialchars($_COOKIE["removethumbs"]);
	}

	$iEnd = $i + 100;

	$files = array();

	foreach(glob('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/*.*') as $file) {
		$files[] = $file;
	}

	$files = array_slice($files, $i, 100);

	foreach ($files as &$file) {

		$endOfLinkImage = str_replace('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/', '', $file);
		$linkImage = 'https://longfashion.pl/images/thumbnaills/'.$endOfLinkImage;
		//echo 'https://longfashion.pl/images/thumbnaills/'.$endOfLinkImage;

		$sql_check = "SELECT `id`"
		."FROM `jos_get_xml_two`"
		." WHERE link_image='$linkImage'"
		."LIMIT 1"
		;

		if(mysql_num_rows(mysql_query($sql_check)) == 0) {
			$iEnd = $iEnd - 1;
			//echo 'filehandle';
			echo ''.$file.'';
			unlink($file);
		}
	}
	if ($iEnd > 300000) {
        $iEnd = 0;
    }
	setcookie("removethumbs", $iEnd, time() + (86400 * 30), "/");

	echo $iEnd;

}
ob_end_flush();
?>     
<head>
  <meta http-equiv="refresh" content="3">
</head>
