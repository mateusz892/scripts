<?php
error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sql = "UPDATE `jos_get_xml_two`"
."SET maincategory=''"
."WHERE id IN (SELECT * "
."FROM (SELECT id FROM `jos_get_xml_two`"
."GROUP BY name HAVING (COUNT(*) > 1)"
.") AS a)"
;

$result = mysql_query($sql);
if(!$result) {
	echo 'error';
} else {
	echo 'succes';
}

// more categories
/*
echo '\n';
echo '\n';
echo 'przerwactwo';
echo '\n';
echo '\n';

$sql = "SELECT *"
."FROM `jos_get_xml_two`"
."WHERE categoryTwo!=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_object($result)) {
	
	if($row!=null) {
		$awId = $row->awId;
		$name = $row->name;
		$desc = $row->description;
		$brand = $row->brand;
		$price = $row->price;
		$awLink = $row->awLink;
		$awThumb = $row->awThumb;
		$awImage = $row->awImage;
		$color = $row->color;
		$size = $row->size;
		$shop = $row->shop;
		$sizes = $row->sizes;
		$search = $row->search;
		$popularity = $row->popularity;
		$previousPrice = $row->previousPrice;
		$wyprzedaze = $row->wyprzedaze;
		$rand = $row->rand;
		$link_popularity = $row->link_popularity;
                $link_image = $row->link_image;
		$filterone = $row->filterone;
		$check_in_database = $row->check_in_database;
		$maincategory = '';
		$categoryOne = $row->categoryTwo;
		$categoryTwo = '';
		$categoryThree = $row->categoryThree;
		$subcategoryOne = '';
		$subcategoryTwo = $row->subcategoryTwo;
		$subcategoryThree = $row->subcategoryThree;
		$brandName = $row->brandName;
		$sizeName = $row->sizeName;
		$shopName = $row->shopName;
		echo '\n';
		echo 'awId';
		echo ''.$awId.'';
		echo 'name';
		echo ''.$name.'';
		echo 'awLink';
		echo ''.$awLink.'';
		echo 'shop';
		echo ''.$shop.'';
		echo 'categoryTwo';
		echo ''.$categoryOne.'';
	
		$sql_new = "INSERT INTO `jos_get_xml_two` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `color`, `size`, `shop`, `sizes`, `categoryOne`, `subcategoryOne`, `search`, `popularity`, `rand`, `link_popularity`, `link_image`, `filterone`, `maincategory`, `subcategoryTwo`, `subcategoryThree`, `categoryTwo`, `categoryThree`, `previousPrice`, `wyprzedaze`, `check_in_database`, `brandName`, `sizeName`, `shopName`)"
		."VALUES ('$awId', '$name', '$desc', '$brand', '$price', '$awLink', '$awThumb', '$awImage', '$color', '$size', '$shop', '$sizes', '$categoryOne', '$subcategoryOne', '$search', '$popularity', '$rand', '$link_popularity', $link_image, '$filterone', '$maincategory', '$subcategoryTwo', '$subcategoryThree', '$categoryTwo', '$categoryThree', '$previousPrice', '$wyprzedaze', '$check_in_database', '$brandName', '$sizeName', '$shopName')";
		$result_new = mysql_query($sql_new);

		if(!$result_new){
		
			echo 'error';
		} else {
		
			echo 'succes';
		}
	}
}

echo '\n';
echo '\n';
echo 'przerwacthree';
echo '\n';
echo '\n';

$sql = "SELECT *"
."FROM `jos_get_xml_two`"
."WHERE categoryThree!=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_object($result)) {
	
	if($row!=null) {
		$awId = $row->awId;
		$name = $row->name;
		$desc = $row->description;
		$brand = $row->brand;
		$price = $row->price;
		$awLink = $row->awLink;
		$awThumb = $row->awThumb;
		$awImage = $row->awImage;
		$color = $row->color;
		$size = $row->size;
		$shop = $row->shop;
		$sizes = $row->sizes;
		$search = $row->search;
		$popularity = $row->popularity;
		$previousPrice = $row->previousPrice;
		$wyprzedaze = $row->wyprzedaze;
		$rand = $row->rand;
		$link_popularity = $row->link_popularity;
                $link_image = $row->link_image;
		$filterone = $row->filterone;
		$check_in_database = $row->check_in_database;
		$maincategory = '';
		$categoryThree = '';
		$categoryTwo = $row->categoryTwo;
		$categoryOne = $row->categoryThree;
		$subcategoryOne = '';
		$subcategoryTwo = $row->subcategoryTwo;
		$subcategoryThree = $row->subcategoryThree;
		$brandName = $row->brandName;
		$sizeName = $row->sizeName;
		$shopName = $row->shopName;
		echo '\n';
		echo 'awId';
		echo ''.$awId.'';
		echo 'name';
		echo ''.$name.'';
		echo 'awLink';
		echo ''.$awLink.'';
		echo 'shop';
		echo ''.$shop.'';
		echo 'categoryThree';
		echo ''.$categoryOne.'';
	
		$sql_new = "INSERT INTO `jos_get_xml_two` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `color`, `size`, `shop`, `sizes`, `categoryOne`, `subcategoryOne`, `search`, `popularity`, `rand`, `link_popularity`, `link_image`, `filterone`, `maincategory`, `subcategoryTwo`, `subcategoryThree`, `categoryTwo`, `categoryThree`, `previousPrice`, `wyprzedaze`, `check_in_database`, `brandName`, `sizeName`, `shopName`)"
		."VALUES ('$awId', '$name', '$desc', '$brand', '$price', '$awLink', '$awThumb', '$awImage', '$color', '$size', '$shop', '$sizes', '$categoryOne', '$subcategoryOne', '$search', '$popularity', '$rand', '$link_popularity', $link_image, '$filterone', '$maincategory', '$subcategoryTwo', '$subcategoryThree', '$categoryTwo', '$categoryThree', '$previousPrice', '$wyprzedaze', '$check_in_database', '$brandName', '$sizeName', '$shopName')";
		$result_new = mysql_query($sql_new);

		if(!$result_new){
		
			echo 'error';
		} else {
		
			echo 'succes';
		}
	}
}

echo '\n';
echo '\n';
echo 'przerwastwo';
echo '\n';
echo '\n';

$sql = "SELECT *"
."FROM `jos_get_xml_two`"
."WHERE subcategoryTwo!=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_object($result)) {
	
	if($row!=null) {
		$awId = $row->awId;
		$name = $row->name;
		$desc = $row->description;
		$brand = $row->brand;
		$price = $row->price;
		$awLink = $row->awLink;
		$awThumb = $row->awThumb;
		$awImage = $row->awImage;
		$color = $row->color;
		$size = $row->size;
		$shop = $row->shop;
		$sizes = $row->sizes;
		$search = $row->search;
		$popularity = $row->popularity;
		$previousPrice = $row->previousPrice;
		$wyprzedaze = $row->wyprzedaze;
		$rand = $row->rand;
		$link_popularity = $row->link_popularity;
                $link_image = $row->link_image;
		$filterone = $row->filterone;
		$check_in_database = $row->check_in_database;
		$maincategory = '';
		$categoryOne = '';
		$categoryTwo = $row->categoryTwo;
		$categoryThree = $row->categoryThree;
		$subcategoryTwo = '';
		$subcategoryOne = $row->subcategoryTwo;
		$subcategoryThree = $row->subcategoryThree;
		$brandName = $row->brandName;
		$sizeName = $row->sizeName;
		$shopName = $row->shopName;
		echo '\n';
		echo 'awId';
		echo ''.$awId.'';
		echo 'name';
		echo ''.$name.'';
		echo 'awLink';
		echo ''.$awLink.'';
		echo 'shop';
		echo ''.$shop.'';
		echo 'subcategoryTwo';
		echo ''.$subcategoryOne.'';
	
		$sql_new = "INSERT INTO `jos_get_xml_two` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `color`, `size`, `shop`, `sizes`, `categoryOne`, `subcategoryOne`, `search`, `popularity`, `rand`, `link_popularity`, `link_image`, `filterone`, `maincategory`, `subcategoryTwo`, `subcategoryThree`, `categoryTwo`, `categoryThree`, `previousPrice`, `wyprzedaze`, `check_in_database`, `brandName`, `sizeName`, `shopName`)"
		."VALUES ('$awId', '$name', '$desc', '$brand', '$price', '$awLink', '$awThumb', '$awImage', '$color', '$size', '$shop', '$sizes', '$categoryOne', '$subcategoryOne', '$search', '$popularity', '$rand', '$link_popularity', $link_image, '$filterone', '$maincategory', '$subcategoryTwo', '$subcategoryThree', '$categoryTwo', '$categoryThree', '$previousPrice', '$wyprzedaze', '$check_in_database', '$brandName', '$sizeName', '$shopName')";
		$result_new = mysql_query($sql_new);

		if(!$result_new){
		
			echo 'error';
		} else {
		
			echo 'succes';
		}
	}
}

echo '\n';
echo '\n';
echo 'przerwasthree';
echo '\n';
echo '\n';

$sql = "SELECT *"
."FROM `jos_get_xml_two`"
."WHERE subcategoryThree!=''"
."AND canUpdate!='tak'"
;

$result = mysql_query($sql);

while($row = mysql_fetch_object($result)) {
	
	if($row!=null) {
		$awId = $row->awId;
		$name = $row->name;
		$desc = $row->description;
		$brand = $row->brand;
		$price = $row->price;
		$awLink = $row->awLink;
		$awThumb = $row->awThumb;
		$awImage = $row->awImage;
		$color = $row->color;
		$size = $row->size;
		$shop = $row->shop;
		$sizes = $row->sizes;
		$search = $row->search;
		$popularity = $row->popularity;
		$previousPrice = $row->previousPrice;
		$wyprzedaze = $row->wyprzedaze;
		$rand = $row->rand;
		$link_popularity = $row->link_popularity;
                $link_image = $row->link_image;
		$filterone = $row->filterone;
		$check_in_database = $row->check_in_database;
		$maincategory = '';
		$categoryOne = '';
		$categoryTwo = $row->categoryTwo;
		$categoryThree = $row->categoryThree;
		$subcategoryTwo = $row->subcategoryTwo;
		$subcategoryThree = '';
		$subcategoryOne = $row->subcategoryThree;
		$brandName = $row->brandName;
		$sizeName = $row->sizeName;
		$shopName = $row->shopName;
		echo '\n';
		echo 'awId';
		echo ''.$awId.'';
		echo 'name';
		echo ''.$name.'';
		echo 'awLink';
		echo ''.$awLink.'';
		echo 'shop';
		echo ''.$shop.'';
		echo 'subcategoryThree';
		echo ''.$subcategoryOne.'';
	
		$sql_new = "INSERT INTO `jos_get_xml_two` (`awId`, `name`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `color`, `size`, `shop`, `sizes`, `categoryOne`, `subcategoryOne`, `search`, `popularity`, `rand`, `link_popularity`, `link_image`, `filterone`, `maincategory`, `subcategoryTwo`, `subcategoryThree`, `categoryTwo`, `categoryThree`, `previousPrice`, `wyprzedaze`, `check_in_database`, `brandName`, `sizeName`, `shopName`)"
		."VALUES ('$awId', '$name', '$desc', '$brand', '$price', '$awLink', '$awThumb', '$awImage', '$color', '$size', '$shop', '$sizes', '$categoryOne', '$subcategoryOne', '$search', '$popularity', '$rand', '$link_popularity', $link_image, '$filterone', '$maincategory', '$subcategoryTwo', '$subcategoryThree', '$categoryTwo', '$categoryThree', '$previousPrice', '$wyprzedaze', '$check_in_database', '$brandName', '$sizeName', '$shopName')";
		$result_new = mysql_query($sql_new);

		if(!$result_new){
		
			echo 'error';
		} else {
		
			echo 'succes';
		}
	}
}*/
