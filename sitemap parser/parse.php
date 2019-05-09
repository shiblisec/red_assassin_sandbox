<?php

$file_content = file_get_contents($_FILES['sitemap']['tmp_name']);
$dom = new DOMDocument();
$dom->loadXML($file_content, LIBXML_NOENT | LIBXML_DTDLOAD);
$urls = simplexml_import_dom($dom);

echo $urls->loc;

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$urls->loc);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$output=curl_exec($ch);

echo $output;

curl_close($ch);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Welcome to XML parser</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
  <h1>Sitemap successfully crawled..</h1>
</div>
</body>
</html>
