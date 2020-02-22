<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

// optymalizacja

$all = array();

$sql = "SELECT DISTINCT `subcategoryOne`"
."FROM `jos_get_xml_two`"
."ORDER BY `subcategoryOne`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
	}
}

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `subcategoryOne`"
."FROM `jos_optimizationSubcategoryOne_get_xml`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
	
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$subcategoryOne = $all[$i-1];
	if (in_array($subcategoryOne, $all_confirm)) {
		continue;
	} else {
	$sql = "INSERT INTO `jos_optimizationSubcategoryOne_get_xml` (`subcategoryOne`)"
	."VALUES ('$subcategoryOne')"
	;
	$result = mysql_query($sql);
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `subcategoryOne`"
."FROM `jos_optimizationSubcategoryOne_get_xml`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
		
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$subcategoryOne = $all_confirm_second[$i-1];
	if (in_array($subcategoryOne, $all)) {
		continue;
	} else {		
		$sql = "DELETE FROM `jos_optimizationSubcategoryOne_get_xml`"
		."WHERE subcategoryOne='$subcategoryOne'"
		;
		$result = mysql_query($sql);
	}
}