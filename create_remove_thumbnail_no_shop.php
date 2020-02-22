<?php

$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$formatFromLink = array('ą','ć','ę','ł','ń','ó','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q',' ');
$formatToLink = array('a','c','e','l','n','o','s','z','z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','-');
$old_polish_signs = array('Ą','Ć','Ę','Ł','Ó','Ń','Ś','Ż','Ź','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','W','X','Y','Z','Q','V');
$new_polish_signs = array('ą','ć','ę','ł','ó','ń','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','v');
$prolog_link = "https://longfashion.pl/images/";
$thumb = "thumbnaills/";
$thumbJoomla = "longfashion.pl/images/thumbnaills/";
$jpg = ".jpg";
$png = ".png";

$sql = "SELECT `id`, `name`, `awImage`, `link_image`, `awThumb`, `shop`"
." FROM `jos_get_xml_two`"
." WHERE `link_image` NOT LIKE '%http%'"
." AND shop='BliskoCiala.com.pl'"
;

$result = mysql_query($sql);

if(!mysql_num_rows($result) == 0) {
	
	while ($row = mysql_fetch_object($result)) {

		$id = $row->id;
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
	
}

?>     
