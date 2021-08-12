<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Contact_me</title>
  <link rel="stylesheet" href="contact_styles.css">
  <link rel="icon" href="favicon.ico">
</head>

<body>
  <?php
  session_start();
  if(!isset($_GET['sub']))
      {
   ?>
  <nav class="menu">
    <ul class="menu__list">
      <li class="menu__group"><a href="index.html" class="menu__link">Home</a></li>
      <li class="menu__group"><a href="Sign_up.html" class="menu__link">Sign Up</a></li>
      <li class="menu__group"><a href="Log_in.html" class="menu__link">Log In</a></li>
      <li class="menu__group"><a href="Contact.php" class="menu__link">Contact US</a></li>
      <li class="menu__group"><a href="about.php" class="menu__link">About us</a></li>
    </ul>
    <br>
  </nav>
  <?php }
  else {
   ?>
   <nav class="menu">
     <ul class="menu__list">
       <li class="menu__group"><a href="index.php" class="menu__link">Home</a></li>
       <li class="menu__group"><a href="info.html" class="menu__link">Update-Info</a></li>
       <li class="menu__group"><a href="#" class="menu__link">Contact US</a></li>
       <li class="menu__group"><a href="about.php?sub='1'" class="menu__link">About us</a></li>
       <li class="menu__group"><a href="index.html" onclick="alert('You have been logged out')" class="menu__link">logout</a></li>
     </ul>
     <br>
   </nav>
 <?php } ?>
  <div class="co">
  <h1>Contact number:</h1>
  <p>9004133380</p>
  <br>
  <h1>Email:</h1>
  <p>galacticharshit@gmail.com</p>
    </div>
  <hr>
  <br>
  <br>
  <form class="cf" action="mailto:galacticharshit@gmail.com"  name="myForm" method="post"  onsubmit="return formValidation()" enctype="text/plain">
    <h1 id="alag"> Contact me</h1>
    <label><b>Your Name:</b></label><br>
    <input type="text" value="" class="name" placeholder="Name" name = "Name"><br><br>
    <label><b>Your Email:</b></label><br>
    <input type="email"  name="Mail" value="" class="email" placeholder="Email"><br><br>
    <label><b>Your Text:</b></label><br>
    <textarea name="textarea" rows="8" cols="50" placeholder="Comment" class="ta"></textarea><br><br>
    <input type="submit" class="button">
  </form>
</body>

</html>
