<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$formatFromLink = array('ą','ć','ę','ł','ń','ó','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q',' ');
$formatToLink = array('a','c','e','l','n','o','s','z','z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','-');
$old_polish_signs = array('Ą','Ć','Ę','Ł','Ó','Ń','Ś','Ż','Ź','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','W','X','Y','Z','Q','V');
$new_polish_signs = array('ą','ć','ę','ł','ó','ń','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','v');
$stringEnd = '.jpg';

$i = 0;
if (isset($_COOKIE["updatethumbs"])) {
	$i = htmlspecialchars($_COOKIE["updatethumbs"]);
}
$iEnd = $i + 10;
setcookie("updatethumbs", $iEnd, time() + (86400 * 30), "/");

echo $iEnd;
$allResult = array();

$sqlA = "SELECT `id`, `name`, `link_image`"
."FROM `jos_get_xml`"
."LIMIT $i, 10"
;

$resultA = mysql_query($sqlA);

while($rowA = mysql_fetch_object($resultA)) {

	$allResult[] = $rowA;

}

foreach($allResult as &$row) {

	$id = $row->id;
	$string = $row->name;
	$linkImage = str_replace('http://serwer1538689.home.pl/autoinstalator/scripts/thumbnails/', '', $row->link_image);

	if (strpos($linkImage, '.png') !== false) {
		$stringEnd = '.png';
	}

	$string = str_replace($old_polish_signs, $new_polish_signs, $string);
	$string = str_replace($formatFromLink, $formatToLink, $string);
	$string = $id.'-'.$string;
	$string = preg_replace('/[^\p{L}0-9\s]+/u', '-', $string);
	$string = rtrim($string, '-');
	$string = '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/'.$string.$stringEnd;
	echo $string;
}



/*$files = array();

foreach(glob('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/*.*') as $file) {
	$files[] = $file;
}

$files = array_slice($files, $i, 100);

foreach ($files as &$file) {

	$endOfLinkImage = str_replace('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/', '', $file);
	$stringEnd = '.jpg';

	if (strpos($endOfLinkImage, '.png') !== false) {
		$stringEnd = '.png';
	}

	$linkImage = 'http://serwer1538689.home.pl/autoinstalator/scripts/thumbnails/'.$endOfLinkImage;
	//echo 'http://serwer1538689.home.pl/autoinstalator/scripts/thumbnails/'.$endOfLinkImage;

	$sql_check = "SELECT `id`, `name`"
	."FROM `jos_get_xml`"
	." WHERE link_image='$linkImage'"
	;

	$result = mysql_query($sql_check);

	if ($result) {
		$row = mysql_fetch_row($result);
		$id = $row[0];
		$string = $row[1];
		$string = str_replace($old_polish_signs, $new_polish_signs, $string);
		$string = str_replace($formatFromLink, $formatToLink, $string);
		$string = $id.'-'.$string;
		$string = preg_replace('/[^\p{L}0-9\s]+/u', '-', $string);
		$string = rtrim($string, '-');
		//rename('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/'.$endOfLinkImage, '/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/'.$string.$stringEnd);
	}
}*/





?>     
