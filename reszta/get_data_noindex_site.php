<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());
header('Content-Type: text/html; charset=utf-8');

// 1.
// filterName:    lengthName, sleeveLengthName, colorName, brandName, wyprzedazeName
// sqlFilterList: dlugosc,    dlugosc_rekawa,   kolor,     marka,     wyprzedaze

// 2.
// filterName:    materialName, occasionName, seasonName, styleName, patternName, claspName
// sqlFilterList: material,     okazja,       pora_roku,  styl,      wzor,        zapiecie

$minProductsAmount = 30;
$filterName = 'claspName';

$sql = "SELECT `facility`"
."FROM `jos_seo_facilities`"
."WHERE name='optimizationCategoryOne'"
;

$resultOptimizationCategoryOne = explode(',', mysql_result(mysql_query($sql), 0));

$sql = "SELECT `facility`"
."FROM `jos_seo_facilities`"
."WHERE name='optimizationSubcategoryOne'"
;

$resultOptimizationSubcategoryOne = explode(',', mysql_result(mysql_query($sql), 0));

$filterList = array();
$counter = 0;

$sqlFilterList = "SELECT DISTINCT `zapiecie`"
."FROM `jos_zapiecie`"
;

if ($filterName === 'brandName') {
	$sqlFilterList = "SELECT `brandName`"
	."FROM `jos_get_xml_two`"
	."WHERE filterone='tak'"
	."GROUP BY `brandName`"
	."HAVING COUNT(*) > $minProductsAmount"
	;
}

$resultFilterList = mysql_query($sqlFilterList);

while ($row = mysql_fetch_array($resultFilterList)) {
	if ($row[0]!=null) {
		$filterList[] = $row[0];
	}
}

$sqlKategoriaSubkategoria = "SELECT `kategoria_subkategoria`, `kategoria_subkategoria_level`"
."FROM `jos_kategoria_subkategoria`"
;

$resultKategoriaSubkategoria = mysql_query($sqlKategoriaSubkategoria);

if (!$resultKategoriaSubkategoria) {
	echo 'error';
}

/*while ($xmlKategoriaSubkategoria = mysql_fetch_object($resultKategoriaSubkategoria)) {

	if ($xmlKategoriaSubkategoria->kategoria_subkategoria_level === 'subcategoryOne') {

		foreach ($filterList as $filter) {
			if (in_array(lcfirst($xmlKategoriaSubkategoria->kategoria_subkategoria), $resultOptimizationSubcategoryOne)) {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName='$filter'"
				."AND subcategoryOne LIKE '%$xmlKategoriaSubkategoria->kategoria_subkategoria%'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			} else {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName='$filter'"
				."AND subcategoryOne='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			}
		}
	}
	if ($xmlKategoriaSubkategoria->kategoria_subkategoria_level === 'categoryOne') {
		foreach ($filterList as $filter) {
			if (in_array(lcfirst($xmlKategoriaSubkategoria->kategoria_subkategoria), $resultOptimizationCategoryOne)) {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName='$filter'"
				."AND categoryOne LIKE '%$xmlKategoriaSubkategoria->kategoria_subkategoria%'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			} else {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName='$filter'"
				."AND categoryOne='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			}
		}
	}
	if ($xmlKategoriaSubkategoria->kategoria_subkategoria_level === 'maincategory') {

		foreach ($filterList as $filter) {
			$sql = "SELECT COUNT(*)"
			."FROM `jos_get_xml_two`"
			."WHERE $filterName='$filter'"
			."AND maincategory='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
			."AND filterone='tak'"
			."HAVING COUNT(*) > $minProductsAmount"
			;
			
			$result = mysql_result(mysql_query($sql), 0);
			if ($result >= $minProductsAmount) {
				$counter = $counter + 1;
				echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
			}
		}
	}
}*/

while ($xmlKategoriaSubkategoria = mysql_fetch_object($resultKategoriaSubkategoria)) {

	if ($xmlKategoriaSubkategoria->kategoria_subkategoria_level === 'subcategoryOne') {

		foreach ($filterList as $filter) {
			if (in_array(lcfirst($xmlKategoriaSubkategoria->kategoria_subkategoria), $resultOptimizationSubcategoryOne)) {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName LIKE '%$filter%'"
				."AND subcategoryOne LIKE '%$xmlKategoriaSubkategoria->kategoria_subkategoria%'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			} else {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName LIKE '%$filter%'"
				."AND subcategoryOne='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			}
		}
	}
	if ($xmlKategoriaSubkategoria->kategoria_subkategoria_level === 'categoryOne') {
		foreach ($filterList as $filter) {
			if (in_array(lcfirst($xmlKategoriaSubkategoria->kategoria_subkategoria), $resultOptimizationCategoryOne)) {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName LIKE '%$filter%'"
				."AND categoryOne LIKE '%$xmlKategoriaSubkategoria->kategoria_subkategoria%'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			} else {
				$sql = "SELECT COUNT(*)"
				."FROM `jos_get_xml_two`"
				."WHERE $filterName LIKE '%$filter%'"
				."AND categoryOne='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
				."AND filterone='tak'"
				."HAVING COUNT(*) > $minProductsAmount"
				;
				
				$result = mysql_result(mysql_query($sql), 0);
				if ($result >= $minProductsAmount) {
					$counter = $counter + 1;
					echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
				}
			}
		}
	}
	if ($xmlKategoriaSubkategoria->kategoria_subkategoria_level === 'maincategory') {

		foreach ($filterList as $filter) {
			$sql = "SELECT COUNT(*)"
			."FROM `jos_get_xml_two`"
			."WHERE $filterName LIKE '%$filter%'"
			."AND maincategory='$xmlKategoriaSubkategoria->kategoria_subkategoria'"
			."AND filterone='tak'"
			."HAVING COUNT(*) > $minProductsAmount"
			;
			
			$result = mysql_result(mysql_query($sql), 0);
			if ($result >= $minProductsAmount) {
				$counter = $counter + 1;
				echo '/'.$xmlKategoriaSubkategoria->kategoria_subkategoria.'/'.$filter.'/'.'|';
			}
		}
	}
}

echo ' ';
echo $counter;
