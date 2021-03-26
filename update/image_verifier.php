<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$formatFromLink = array('ą','ć','ę','ł','ń','ó','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q',' ');
$formatToLink = array('a','c','e','l','n','o','s','z','z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','-');
$old_polish_signs = array('Ą','Ć','Ę','Ł','Ó','Ń','Ś','Ż','Ź','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','W','X','Y','Z','Q','V');
$new_polish_signs = array('ą','ć','ę','ł','ó','ń','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','v');

$i = 0;
if (isset($_COOKIE["imageverifier"])) {
	$i = htmlspecialchars($_COOKIE["imageverifier"]);
}
$iEnd = $i + 1000;
setcookie("imageverifier", $iEnd, time() + (86400 * 30), "/");

echo $iEnd;
$allResult = array();

$sqlA = "SELECT `id`, `link_image`"
."FROM `jos_get_xml`"
."LIMIT $i, 1000"
;

$resultA = mysql_query($sqlA);

while($rowA = mysql_fetch_object($resultA)) {

	$allResult[] = $rowA;

}

foreach($allResult as &$row) {

	$id = $row->id;
	$linkImage = str_replace('http://serwer1538689.home.pl/autoinstalator/scripts/thumbnails/', '', $row->link_image);

	if (exif_imagetype('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/'.$linkImage) == IMAGETYPE_JPEG) {
	} elseif (exif_imagetype('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails/'.$linkImage) == IMAGETYPE_PNG) {
	} else {
		$sql_update = "UPDATE `jos_get_xml`"
		."SET filterone='nie'"
		."WHERE id='$id'"
		;

		$result_update = mysql_query($sql_update);
	}
}

?>     
