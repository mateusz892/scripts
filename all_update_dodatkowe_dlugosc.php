<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET length='długie', lengthName='dlugie'"
."WHERE ((name LIKE '%długa sukienk%') OR (description LIKE '%długa sukienk%') OR (name LIKE '%maxi%') OR (description LIKE '%maxi%'))"
."AND length=''"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET length='średnie', lengthName='srednie'"
."WHERE ((name LIKE '%średnia sukienk%') OR (description LIKE '%średnia sukienk%') OR (name LIKE '%midi%') OR (description LIKE '%midi%'))"
."AND length=''"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET length='krótkie', lengthName='krotkie'"
."WHERE ((name LIKE '%krótka sukienk%') OR (description LIKE '%krótka sukienk%') OR (name LIKE '%mini%') OR (description LIKE '%mini%'))"
."AND length=''"
."AND maincategory='Sukienki'"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}
