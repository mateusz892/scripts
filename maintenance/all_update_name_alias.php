<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());
$formatFromLink = array('ą','ć','ę','ł','ń','ó','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q',' ');
$formatToLink = array('a','c','e','l','n','o','s','z','z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','-');
$old_polish_signs = array('Ą','Ć','Ę','Ł','Ó','Ń','Ś','Ż','Ź','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','W','X','Y','Z','Q','V');
$new_polish_signs = array('ą','ć','ę','ł','ó','ń','ś','ż','ż','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','w','x','y','z','q','v');
$allResult = array();

$sqlA = "SELECT `id`, `name`"
."FROM `jos_get_xml_two`"
."WHERE canUpdate!='tak'"
;

$resultA = mysql_query($sqlA);

while($row = mysql_fetch_object($resultA)) {

	$allResult[] = $row;

}

foreach($allResult as &$row) {

	$id = $row->id;
	$string = $row->name;
	$string = str_replace($old_polish_signs, $new_polish_signs, $string);
	$string = str_replace($formatFromLink, $formatToLink, $string);
	$string = preg_replace('/[^\p{L}0-9\s]+/u', '-', $string);
	$string = rtrim($string, '-');
	$string = ltrim($string, '-');
	$string = $string.'-'.$id;

	$sqlB = "UPDATE `jos_get_xml_two`"
	."SET nameAlias='$string'"
	."WHERE id=$id"
	;
	
	$resultB = mysql_query($sqlB);
	if(!$resultB) {
		echo 'error';
	} else {
		echo 'succes';
	}

}

?>
