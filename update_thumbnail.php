<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$prolog_link = "http://serwer1538689.home.pl/autoinstalator/scripts/";
$thumb = "thumbnaills/";
$jpg = ".jpg";
$png = ".png";

$sql = "SELECT `id`, `link_image`, `awImage`, `awThumb`"
." FROM `jos_get_xml_two`"
." WHERE zmiana!='tak'"
." LIMIT 60"
;

$result = mysql_query($sql);

if(!mysql_num_rows($result) == 0) {

	while ($row = mysql_fetch_object($result)) {

           $id = $row->id;
		$link = $row->link_image;
		$awImage_save = substr($link, 63);
	
		$awImage_save = str_replace(".jpg", "", $awImage_save);
        $awImage_save = str_replace(".png", "", $awImage_save);
   
		$filehandle = $thumb.$awImage_save.$jpg;

		if (exif_imagetype($link) == IMAGETYPE_JPEG) {
			$filehandle = $thumb.$awImage_save.$jpg;
			$im = new Imagick(''.$link.'');
			$im->setImageCompressionQuality(95);
			$im->writeImage($filehandle);
			rename('thumbnaills/'.$awImage_save.$jpg, '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/'.$awImage_save.$jpg);
			
			$sql_update_filter = "UPDATE `jos_get_xml_two`"
			."SET zmiana='tak'"
			."WHERE id='$id'"
			;

			$result_update_filter = mysql_query($sql_update_filter);

		} elseif (exif_imagetype($link) == IMAGETYPE_PNG) {
			$filehandle = $thumb.$awImage_save.$png;
			$im = new Imagick(''.$link.'');
			$im->setImageCompressionQuality(95);
			$im->writeImage($filehandle);
			rename('thumbnaills/'.$awImage_save.$png, '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/'.$awImage_save.$png);
			
			$sql_update_filter = "UPDATE `jos_get_xml_two`"
			."SET zmiana='tak'"
			."WHERE id='$id'"
			;

			$result_update_filter = mysql_query($sql_update_filter);

		} else {
			$sql_update_filter_two = "UPDATE `jos_get_xml_two`"
			."SET zmiana='tak'"
			."WHERE id='$id'"
			;

			$result_update_filter_two = mysql_query($sql_update_filter_two);

           }

	}

}

?>     

