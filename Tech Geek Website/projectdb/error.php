<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="favicon.ico">
  </head>
  <body>
<img src="error_img.png" alt="error_img">
<?php
session_start();
echo $_SESSION["Error"];
 ?>
  </body>
</html>
