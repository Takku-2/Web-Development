<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="animation_script.css">
  </head>
  <body>
    <div class="checkmark-circle">
 <div class="background"></div>
 <div class="checkmark draw"></div>
</div>
<?php
ob_start();
session_start();
echo $_SESSION["Success"];
header('Location:http://localhost/Website%20Project/index.php');
 ?>
  </body>

</html>
