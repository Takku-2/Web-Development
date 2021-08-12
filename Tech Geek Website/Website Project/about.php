<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="about.css">
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
   </nav>
 <?php } ?>
 <div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="images/title.png" alt="Profile pic"/>
		</div>

		<div id="name">
			<h1 class="quickFade delayTwo">Harshit Thakkar</h1>
			<h2 class="quickFade delayThree">Web Developer</h2>
		</div>

		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="mailto:galacticharshit@gmail.com" target="_blank">galacticharshit@gmail.com</a></li>
				<li>m: 9004133380</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>

				<div class="sectionContent">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>

			<div class="sectionContent">
				<article>
					<h2>Software Engineer at Google</h2>
					<p class="subDetails">September 2020 - Present</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>

				<article>
					<h2>Software Engineer at L&T</h2>
					<p class="subDetails">Janruary 2017 - March 2019</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</article>

			</div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>

			<div class="sectionContent">
				<ul class="keySkills">
					<li>Web development</li>
					<li>Python</li>
					<li>Java</li>
					<li>C++</li>
					<li>C</li>
					<li>Data Management</li>
					<li>Yoga</li>
					<li>Badminton</li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>

			<div class="sectionContent">
				<article>
					<h2>Mukesh Patel School of Technologu Management and Engineering/NMIMS</h2>
					<p class="subDetails">Qualification-Btech(Integrated)</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>

	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
