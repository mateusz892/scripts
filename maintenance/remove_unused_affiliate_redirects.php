<?php

error_reporting(0);
$com=mysql_connect("localhost", "u705076634_longfash" ,"Dds76sd67gdcg");
mysql_set_charset('utf8',$com);
mysql_select_db("u705076634_longfash", $com) or die(mysql_error());

$sqlAffiliateRedirects = "SELECT `previousId`, `awLink`"
."FROM `jos_affiliate_redirects`"
;

$resultAffiliateRedirects = mysql_query($sqlAffiliateRedirects);

while ($xmlAffiliateRedirects = mysql_fetch_object($resultAffiliateRedirects)) {
    $sqlGetXmlTwo = "SELECT `id`"
    ."FROM `jos_get_xml_two`"
    ."WHERE id='$xmlAffiliateRedirects->previousId'"
    ;

    $resultGetXmlTwo = mysql_result(mysql_query($sqlGetXmlTwo), 0);
    if (!$resultGetXmlTwo) {
        $sqlDelete = "DELETE FROM `jos_affiliate_redirects`"
        ."WHERE previousId='$xmlAffiliateRedirects->previousId'"
        ;
        $resultDelete = mysql_query($sqlDelete);
    }
}
