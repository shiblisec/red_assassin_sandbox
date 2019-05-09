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
  <h1>Upload your sitemap</h1>
  <p>Hint: The xml parser is vulnerable to XXE</p>
  <form action="parse.php" method="POST" enctype="multipart/form-data">
   <div class="form-group">
     <input type="file" name="sitemap" />
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>

<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">Made by <a target="_blank" href="http://twitter.com/PsychoCodes/">shibli2700</a></a>
  </div>
</footer>
</body>
</html>
