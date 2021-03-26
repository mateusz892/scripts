<?php
ob_start();
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

/*foreach(glob('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/*.*') as $file) {
	$files[] = $file;
}

$i = 0;
$files = array_slice($files, $i, 30000);
foreach ($files as &$file) {

	copy($file, str_replace("/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/", "/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails_prev/", $file));

}*/

foreach(glob('/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails_prev/*.*') as $file) {
	$files[] = $file;
}

print_r(count($files));
/*$i = 0;/home/mateusz/Pulpit/copy_thumbnails.php
$files = array_slice($files, $i, 30000);
foreach ($files as &$file) {

	copy($file, str_replace("/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnaills/", "/home/klient.dhosting.pl/mateuszotre/longfashion.pl/public_html/images/thumbnails_prev/", $file));

}*/
