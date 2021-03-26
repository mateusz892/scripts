<?php

$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

/*$newValues = array();
$newValuesCounter = 0;

$sqlGetXmlTwo = "SELECT `id`, `awLink`"
."FROM `jos_get_xml_two`"
;

$resultGetXmlTwo = mysql_query($sqlGetXmlTwo);

while ($xmlGetXmlTwo = mysql_fetch_object($resultGetXmlTwo)) {
    if ($newValuesCounter == 10) {

        $sql = "INSERT INTO `jos_affiliate_redirects` (`previousId`, `awLink`)"
        .'VALUES '.implode(',',$newValues).';';
        $result = mysql_query($sql);

        $newValues = array();
        $newValuesCounter = 0;
    }
    $newValues[] = '("'.$xmlGetXmlTwo->id.'","'.$xmlGetXmlTwo->awLink.'")';
    $newValuesCounter = $newValuesCounter + 1;
}

$sql = "INSERT INTO `jos_affiliate_redirects` (`previousId`, `awLink`)"
.'VALUES '.implode(',',$newValues).';';
$result = mysql_query($sql);*/


$newValues = array();
$newValuesCounter = 0;

$sqlGetXmlTwo = "SELECT *"
."FROM `jos_get_xml_two`"
;

$resultGetXmlTwo = mysql_query($sqlGetXmlTwo);

while ($xmlGetXmlTwo = mysql_fetch_object($resultGetXmlTwo)) {

    if ($newValuesCounter == 10) {

        $sql = "INSERT INTO `jos_get_xml_three` (`awId`, `name`, `nameAlias`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `color`, `size`, `shop`, `categoryOne`, `categoryTwo`, `categoryThree`, `subcategoryOne`, `subcategoryTwo`, `subcategoryThree`, `popularity`, `rand`, `filterone`, `maincategory`, `canUpdate`, `check_in_database`, `brandName`, `colorName`, `sizeName`, `shopName`, `previousPrice`, `wyprzedaze`, `material`, `materialName`, `pattern`, `patternName`, `season`, `seasonName`, `style`, `styleName`, `clasp`, `claspName`, `length`, `lengthName`, `sleeveLength`, `sleeveLengthName`, `occasion`, `occasionName`, `wyprzedazeName`, `check_in_database_help`, `brandId`, `colorId`, `shopId`, `maincategoryId`, `categoryOneId`, `subcategoryOneId`, `shopcategory`, `previousPopularity`, `counterPopularity`, `redirect_check_one`)"
        .'VALUES '.implode(',',$newValues).';';
        $result = mysql_query($sql);

        $newValues = array();
        $newValuesCounter = 0;
    }

    $awId = $xmlGetXmlTwo -> awId;
    $name = $xmlGetXmlTwo -> name;
    $nameAlias = $xmlGetXmlTwo -> nameAlias;
    $description = $xmlGetXmlTwo -> description;
    $brand = $xmlGetXmlTwo -> brand;
    $price = $xmlGetXmlTwo -> price;
    $awLink = $xmlGetXmlTwo -> awLink;
    $awThumb = $xmlGetXmlTwo -> awThumb;
    $awImage = $xmlGetXmlTwo -> awImage;
    $link_image = $xmlGetXmlTwo -> link_image;
    $color = $xmlGetXmlTwo -> color;
    $size = $xmlGetXmlTwo -> size;
    $shop = $xmlGetXmlTwo -> shop;
    $categoryOne = $xmlGetXmlTwo -> categoryOne;
    $categoryTwo = $xmlGetXmlTwo -> categoryTwo;
    $categoryThree = $xmlGetXmlTwo -> categoryThree;
    $subcategoryOne = $xmlGetXmlTwo -> subcategoryOne;
    $subcategoryTwo = $xmlGetXmlTwo -> subcategoryTwo;
    $subcategoryThree = $xmlGetXmlTwo -> subcategoryThree;
    $popularity = $xmlGetXmlTwo -> popularity;
    $rand = $xmlGetXmlTwo -> rand;
    $filterone = $xmlGetXmlTwo -> filterone;
    $maincategory = $xmlGetXmlTwo -> maincategory;
    $canUpdate = $xmlGetXmlTwo -> canUpdate;
    $check_in_database = $xmlGetXmlTwo -> check_in_database;
    $brandName = $xmlGetXmlTwo -> brandName;
    $colorName = $xmlGetXmlTwo -> colorName;
    $sizeName = $xmlGetXmlTwo -> sizeName;
    $shopName = $xmlGetXmlTwo -> shopName;
    $previousPrice = $xmlGetXmlTwo -> previousPrice;
    $wyprzedaze = $xmlGetXmlTwo -> wyprzedaze;
    $material = $xmlGetXmlTwo -> material;
    $materialName = $xmlGetXmlTwo -> materialName;
    $pattern = $xmlGetXmlTwo -> pattern;
    $patternName = $xmlGetXmlTwo -> patternName;
    $season = $xmlGetXmlTwo -> season;
    $seasonName = $xmlGetXmlTwo -> seasonName;
    $style = $xmlGetXmlTwo -> style;
    $styleName = $xmlGetXmlTwo -> styleName;
    $clasp = $xmlGetXmlTwo -> clasp;
    $claspName = $xmlGetXmlTwo -> claspName;
    $length = $xmlGetXmlTwo -> length;
    $lengthName = $xmlGetXmlTwo -> lengthName;
    $sleeveLength = $xmlGetXmlTwo -> sleeveLength;
    $sleeveLengthName = $xmlGetXmlTwo -> sleeveLengthName;
    $occasion = $xmlGetXmlTwo -> occasion;
     $occasionName = $xmlGetXmlTwo -> occasionName;
     $wyprzedazeName = $xmlGetXmlTwo -> wyprzedazeName;
     $check_in_database_help = $xmlGetXmlTwo -> check_in_database_help;
     $brandId = $xmlGetXmlTwo -> brandId;
     $colorId = $xmlGetXmlTwo -> colorId;
     $shopId = $xmlGetXmlTwo -> shopId;
      $maincategoryId = $xmlGetXmlTwo -> maincategoryId;
      $categoryOneId = $xmlGetXmlTwo -> categoryOneId;
      $subcategoryOneId = $xmlGetXmlTwo -> subcategoryOneId;
      $shopcategory = $xmlGetXmlTwo -> shopcategory;
      $previousPopularity = $xmlGetXmlTwo -> previousPopularity;
    $counterPopularity = $xmlGetXmlTwo -> counterPopularity;
    $redirect_check_one = $xmlGetXmlTwo -> redirect_check_one;

    $newValues[] = '("'.$awId.'","'.$name.'","'.$nameAlias.'","'.$description.'","'.$brand.'","'.$price.'","'.$awLink.'","'.$awThumb.'","'.$awImage.'","'.$link_image.'","'.$color.'","'.$size.'","'.$shop.'","'.$categoryOne.'","'.$categoryTwo.'","'.$categoryThree.'","'.$subcategoryOne.'","'.$subcategoryTwo.'","'.$subcategoryThree.'","'.$popularity.'","'.$rand.'","'.$filterone.'","'.$maincategory.'","'.$canUpdate.'","'.$check_in_database.'","'.$brandName.'","'.$colorName.'","'.$sizeName.'","'.$shopName.'","'.$previousPrice.'","'.$wyprzedaze.'","'.$material.'","'.$materialName.'","'.$pattern.'","'.$patternName.'","'.$season.'","'.$seasonName.'","'.$style.'","'.$styleName.'","'.$clasp.'","'.$claspName.'","'.$length.'","'.$lengthName.'","'.$sleeveLength.'","'.$sleeveLengthName.'","'.$occasion.'","'.$occasionName.'","'.$wyprzedazeName.'","'.$check_in_database_help.'","'.$brandId.'","'.$colorId.'","'.$shopId.'","'.$maincategoryId.'","'.$categoryOneId.'","'.$subcategoryOneId.'","'.$shopcategory.'","'.$previousPopularity.'","'.$counterPopularity.'","'.$redirect_check_one.'")';
    $newValuesCounter = $newValuesCounter + 1;
}

$sql = "INSERT INTO `jos_get_xml_three` (`awId`, `name`, `nameAlias`, `description`, `brand`, `price`, `awLink`, `awThumb`, `awImage`, `link_image`, `color`, `size`, `shop`, `categoryOne`, `categoryTwo`, `categoryThree`, `subcategoryOne`, `subcategoryTwo`, `subcategoryThree`, `popularity`, `rand`, `filterone`, `maincategory`, `canUpdate`, `check_in_database`, `brandName`, `colorName`, `sizeName`, `shopName`, `previousPrice`, `wyprzedaze`, `material`, `materialName`, `pattern`, `patternName`, `season`, `seasonName`, `style`, `styleName`, `clasp`, `claspName`, `length`, `lengthName`, `sleeveLength`, `sleeveLengthName`, `occasion`, `occasionName`, `wyprzedazeName`, `check_in_database_help`, `brandId`, `colorId`, `shopId`, `maincategoryId`, `categoryOneId`, `subcategoryOneId`, `shopcategory`, `previousPopularity`, `counterPopularity`, `redirect_check_one`)"
.'VALUES '.implode(',',$newValues).';';
$result = mysql_query($sql);
