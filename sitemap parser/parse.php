<?php

$file_content = file_get_contents($_FILES['sitemap']['tmp_name']);
$dom = new DOMDocument();
$dom->loadXML($file_content, LIBXML_NOENT | LIBXML_DTDLOAD);
$urls = simplexml_import_dom($dom);
echo $urls->loc;

?>
