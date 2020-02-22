<?php
error_reporting(0);
$com=mysql_connect("mateuszotre.mysql.dhosting.pl", "yozi9e_longfash" ,"Yi6eerawim4b");
mysql_set_charset('utf8',$com);
mysql_select_db("sa7ihi_longfash", $com) or die(mysql_error());

// update

$sql = "UPDATE `jos_get_xml_two`"
."SET canUpdate='tak'"
."WHERE ((maincategory!='') OR (categoryOne!='') OR (subcategoryOne!=''))"
."AND ((maincategoryId!='0') OR (categoryOneId!='0') OR (subcategoryOneId!='0'))"
."AND shopId!='0'"
."AND nameAlias!=''"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sqlFilterone = "UPDATE `jos_get_xml_two`"
."SET filterone='tak'"
."WHERE filterone='pretak'"
;

$resultFilterone = mysql_query($sqlFilterone);
if(!$resultFilterone) {
	echo 'error';
} else {
	echo 'succes';
}

// y do e

/*$sql = "UPDATE `jos_get_xml_two`"
."SET color='granatowe'"
."WHERE color LIKE '%ranatowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='beżowe'"
."WHERE color LIKE '%eżowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='białe'"
."WHERE color LIKE '%iały%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='czarne'"
."WHERE color LIKE '%zarny%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='czerwone'"
."WHERE color LIKE '%zerwony%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='fioletowe'"
."WHERE color LIKE '%ioletowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='grafitowe'"
."WHERE color LIKE '%rafitowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='jasnoróżowe'"
."WHERE color LIKE '%asnoróżowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='jasnoszare'"
."WHERE color LIKE '%asnoszary%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='koralowe'"
."WHERE color LIKE '%oralowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='kremowe'"
."WHERE color LIKE '%remowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='lazurowe'"
."WHERE color LIKE '%azurowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='limonkowe'"
."WHERE color LIKE '%imonkowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='miętowe'"
."WHERE color LIKE '%iętowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='morelowe'"
."WHERE color LIKE '%orelowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='musztardowe'"
."WHERE color LIKE '%usztardowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='oliwkowe'"
."WHERE color LIKE '%liwkowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='pomarańczowe'"
."WHERE color LIKE '%omarańczowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='różowe'"
."WHERE color LIKE '%óżowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='seledynowe'"
."WHERE color LIKE '%eledynowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='srebrne'"
."WHERE color LIKE '%rebrny%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='szare'"
."WHERE color LIKE '%zary%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='turkusowe'"
."WHERE color LIKE '%urkusowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='zielone'"
."WHERE color LIKE '%ielony%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='żółte'"
."WHERE color LIKE '%ółty%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='złote'"
."WHERE color LIKE '%łoty%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='łososiowe'"
."WHERE color LIKE '%ososiowy%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='niebieskie'"
."WHERE color LIKE '%iebieski%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

$sql = "UPDATE `jos_get_xml_two`"
."SET color='morskie'"
."WHERE color LIKE '%orski%'"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}*/

// kategoria_subkategoria

/*$all = array();
$all_name = array();

$sql = "SELECT DISTINCT `maincategory`"
."FROM `jos_get_xml_two`"
."ORDER BY `maincategory`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
		$all_name[] = 'maincategory';
	}
}

$sql = "SELECT DISTINCT `categoryOne`"
."FROM `jos_get_xml_two`"
."ORDER BY `categoryOne`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
		$all_name[] = 'categoryOne';
	}
}

$sql = "SELECT DISTINCT `subcategoryOne`"
."FROM `jos_get_xml_two`"
."ORDER BY `subcategoryOne`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
		$all_name[] = 'subcategoryOne';
	}
}

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `kategoria_subkategoria`"
."FROM `jos_kategoria_subkategoria`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
	
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$kategoria_subkategoria = $all[$i-1];
	$kategoria_subkategoria_name = $all_name[$i-1];

	if (in_array($kategoria_subkategoria, $all_confirm)) {
		continue;
	} else {
	$sql = "INSERT INTO `jos_kategoria_subkategoria` (`kategoria_subkategoria`, `kategoria_subkategoria_nazwa`)"
	."VALUES ('$kategoria_subkategoria', '$kategoria_subkategoria_name')"
	;
	$result = mysql_query($sql);
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `kategoria_subkategoria`"
."FROM `jos_kategoria_subkategoria`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
	
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$kategoria_subkategoria = $all_confirm_second[$i-1];

	if (in_array($kategoria_subkategoria, $all)) {
		continue;
	} else {
		$sql = "DELETE FROM `jos_kategoria_subkategoria`"
		."WHERE kategoria_subkategoria='$kategoria_subkategoria'"
		;
		$result = mysql_query($sql);
	}
}*/

// sklep

$all = array();

$sql = "SELECT DISTINCT `shop`"
."FROM `jos_get_xml_two`"
."ORDER BY `shop`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
	}
}

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `sklep_name`"
."FROM `jos_sklep`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
	
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$sklep_name = $all[$i-1];
	$alias = $sklep_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($sklep_name, $all_confirm)) {
		continue;
	} else {
	$sql = "INSERT INTO `jos_sklep` (`sklep`,`sklep_name`)"
	."VALUES ('$alias','$sklep_name')"
	;
	$result = mysql_query($sql);
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `sklep_name`"
."FROM `jos_sklep`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
		
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$sklep_name = $all_confirm_second[$i-1];
	$alias = $sklep_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($sklep_name, $all)) {
		continue;
	} else {		
		$sql = "DELETE FROM `jos_sklep`"
		."WHERE sklep_name='$sklep_name'"
		;
		$result = mysql_query($sql);
	}
}

// optymalizacja

$all = array();

$sql = "SELECT DISTINCT `categoryOne`"
."FROM `jos_get_xml_two`"
."ORDER BY `categoryOne`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
	}
}

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `categoryOne`"
."FROM `jos_optimizationCategoryOne_get_xml`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
	
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$categoryOne = $all[$i-1];
	if (in_array($categoryOne, $all_confirm)) {
		continue;
	} else {
	$sql = "INSERT INTO `jos_optimizationCategoryOne_get_xml` (`categoryOne`)"
	."VALUES ('$categoryOne')"
	;
	$result = mysql_query($sql);
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `categoryOne`"
."FROM `jos_optimizationCategoryOne_get_xml`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
		
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$categoryOne = $all_confirm_second[$i-1];
	if (in_array($categoryOne, $all)) {
		continue;
	} else {		
		$sql = "DELETE FROM `jos_optimizationCategoryOne_get_xml`"
		."WHERE categoryOne='$categoryOne'"
		;
		$result = mysql_query($sql);
	}
}

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

// marka

$all = array();

$sql = "SELECT DISTINCT `brand`"
."FROM `jos_get_xml_two`"
."WHERE ((filterone!='nie') && (maincategory!=''))"
."ORDER BY `brand`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
	}
}

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `marka_name`"
."FROM `jos_marka`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
	
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$marka_name = $all[$i-1];
	$alias = $marka_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($marka_name, $all_confirm)) {
		continue;
	} else {
	$sql = "INSERT INTO `jos_marka` (`marka`,`marka_name`)"
	."VALUES ('$alias','$marka_name')"
	;
	$result = mysql_query($sql);
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `marka_name`"
."FROM `jos_marka`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
	
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$marka_name = $all_confirm_second[$i-1];
	$alias = $marka_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($marka_name, $all)) {
		continue;
	} else {
		/*$sql = "DELETE FROM `jos_marka`"
		."WHERE marka_name='$marka_name'"
		;
		$result = mysql_query($sql);*/
	}
}

$shop_confirm = array();

$sql_confirm = "SELECT DISTINCT `sklep`"
."FROM `jos_sklep`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$shop_confirm[] = $row[0];
	
	}
}

$all_confirm_third = array();

$sql_confirm_third = "SELECT DISTINCT `marka`"
."FROM `jos_marka`"
;

$result_confirm_third = mysql_query($sql_confirm_third);

while($row = mysql_fetch_array($result_confirm_third)) {
	
	if($row[0]!=null) {
		
		$all_confirm_third[] = $row[0];
	
	}
}

$amount_all_confirm_third = count($all_confirm_third);

for($i=1;$i<=$amount_all_confirm_third;$i++) {

	$marka = $all_confirm_third[$i-1];
	
	if (in_array($marka, $shop_confirm)) {
		$sql = "DELETE FROM `jos_marka`"
		."WHERE marka='$marka'"
		;
		$result = mysql_query($sql);
	}
}

$category_confirm = array();

$sql_confirm = "SELECT DISTINCT `kategoria_subkategoria`"
."FROM `jos_kategoria_subkategoria`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$category_confirm[] = lcfirst($row[0]);
	
	}
}

$all_confirm_fourth = array();

$sql_confirm_fourth = "SELECT DISTINCT `marka`"
."FROM `jos_marka`"
;

$result_confirm_fourth = mysql_query($sql_confirm_fourth);

while($row = mysql_fetch_array($result_confirm_fourth)) {
	
	if($row[0]!=null) {
		
		$all_confirm_fourth[] = $row[0];
	
	}
}

$amount_all_confirm_fourth = count($all_confirm_fourth);

for($i=1;$i<=$amount_all_confirm_fourth;$i++) {

	$marka = $all_confirm_fourth[$i-1];
	
	if (in_array($marka, $category_confirm)) {
		$sql = "DELETE FROM `jos_marka`"
		."WHERE marka='$marka'"
		;
		$result = mysql_query($sql);
	}
}

$sql = " DELETE m1"
." FROM `jos_marka` AS m1"
." INNER JOIN `jos_marka` AS m2"
." WHERE m1.marka_id > m2.marka_id"
." AND m1.marka = m2.marka"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

// kolor

$all = array();

$sql = "SELECT DISTINCT `color`"
."FROM `jos_get_xml_two`"
."ORDER BY `color`"
;

$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
	}
}

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `kolor_name`"
."FROM `jos_kolor`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
		
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$kolor_name = $all[$i-1];
	$alias = $kolor_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($kolor_name, $all_confirm)) {
		continue;
	} else {
		$sql = "INSERT INTO `jos_kolor` (`kolor`,`kolor_name`)"
		."VALUES ('$alias','$kolor_name')"
		;
		$result = mysql_query($sql);
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `kolor_name`"
."FROM `jos_kolor`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
	
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$kolor_name = $all_confirm_second[$i-1];
	$alias = $kolor_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($kolor_name, $all)) {
		continue;
	} else {		
		$sql = "DELETE FROM `jos_kolor`"
		."WHERE kolor_name='$kolor_name'"
		;
		$result = mysql_query($sql);
	}
}

// rozmiar

$all = array();

$sql = "SELECT DISTINCT `size`"
."FROM `jos_get_xml_two`"
."ORDER BY `size`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {

		
		$all = array_merge($all, explode(";", $row[0]));
		$all = array_values(array_unique($all));
	}
}

/*$sql = "SELECT DISTINCT `sizeTwo`"
."FROM `jos_get_xml_two`"
."ORDER BY `sizeTwo`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
		
	}
}

$sql = "SELECT DISTINCT `sizeThree`"
."FROM `jos_get_xml_two`"
."ORDER BY `sizeThree`"
;

$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {
	
	if($row[0]!=null) {
		
		$all[] = $row[0];
		
	}
}*/

$amount_all = count($all);

$all_confirm = array();

$sql_confirm = "SELECT DISTINCT `rozmiar_name`"
."FROM `jos_rozmiar`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$all_confirm[] = $row[0];
	
	}
}

for($i=1;$i<=$amount_all;$i++) {

	$rozmiar_name = $all[$i-1];
	$alias = $rozmiar_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if ($rozmiar_name == 'nothing') {
		continue;
	}
	if (empty($rozmiar_name)) {
		continue;
	}
	if (in_array($rozmiar_name, $all_confirm)) {
		continue;
	} else {
		$sql = "INSERT INTO `jos_rozmiar` (`rozmiar`,`rozmiar_name`)"
		."VALUES ('$alias','$rozmiar_name')"
		;
		$result = mysql_query($sql);
		
	}
}

$all_confirm_second = array();

$sql_confirm_second = "SELECT DISTINCT `rozmiar_name`"
."FROM `jos_rozmiar`"
;

$result_confirm_second = mysql_query($sql_confirm_second);

while($row = mysql_fetch_array($result_confirm_second)) {
	
	if($row[0]!=null) {
		
		$all_confirm_second[] = $row[0];
	
	}
}

$amount_all_confirm_second = count($all_confirm_second);

for($i=1;$i<=$amount_all_confirm_second;$i++) {

	$rozmiar_name = $all_confirm_second[$i-1];
	$alias = $rozmiar_name;
	$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź','Ą', 'Ć', 'Ł', 'Ó', 'Ś', 'Ę', 'Ń', 'Ż', 'Ź' );
	$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z','A', 'C', 'L', 'O', 'S', 'E', 'N', 'Z', 'Z' );
	$alias=str_replace( $cenzura, $zamiana, $alias);
	$alias=str_replace(' ', '-', strtolower($alias)); 
	$alias=str_replace('-', '-', strtolower($alias));
	$alias=str_replace('/', '-', strtolower($alias));
	$pattern = '/[^A-Za-z0-9]/';
	$replacement = '-';
	$alias = preg_replace($pattern, $replacement, $alias);
	$alias = preg_replace('/-{2,}/','-',$alias);
	if ($alias[0] === '-') {
		$alias = ltrim($alias, '-');
	}
	if (substr($alias, -1)) {
		$alias = rtrim($alias, '-');
	}
	if (in_array($rozmiar_name, $all)) {
		continue;
	} else {
		/*$sql = "DELETE FROM `jos_rozmiar`"
		."WHERE rozmiar_name='$rozmiar_name'"
		;
		$result = mysql_query($sql);*/
	}
}

$color_confirm = array();

$sql_confirm = "SELECT DISTINCT `kolor`"
."FROM `jos_kolor`"
;

$result_confirm = mysql_query($sql_confirm);

while($row = mysql_fetch_array($result_confirm)) {
	
	if($row[0]!=null) {
		
		$color_confirm[] = $row[0];
	
	}
}

$all_confirm_third = array();

$sql_confirm_third = "SELECT DISTINCT `rozmiar`"
."FROM `jos_rozmiar`"
;

$result_confirm_third = mysql_query($sql_confirm_third);

while($row = mysql_fetch_array($result_confirm_third)) {
	
	if($row[0]!=null) {
		
		$all_confirm_third[] = $row[0];
	
	}
}

$amount_all_confirm_third = count($all_confirm_third);

for($i=1;$i<=$amount_all_confirm_third;$i++) {

	$rozmiar = $all_confirm_third[$i-1];
	
	if (in_array($rozmiar, $color_confirm)) {
		$sql = "DELETE FROM `jos_rozmiar`"
		."WHERE rozmiar='$rozmiar'"
		;
		$result = mysql_query($sql);
	}
}

$sql = " DELETE m1"
." FROM `jos_rozmiar` AS m1"
." INNER JOIN `jos_rozmiar` AS m2"
." WHERE m1.rozmiar_id > m2.rozmiar_id"
." AND m1.rozmiar = m2.rozmiar"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

echo '\n';
echo '\n';
echo 'przerwa';
echo '\n';
echo '\n';
