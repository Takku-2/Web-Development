<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Tech Geek</title>
  <link rel="stylesheet" href="main.css">
  <link rel="icon" href="favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
  <nav class="menu">
    <ul class="menu__list">
      <li class="menu__group"><a href="#" class="menu__link">Home</a></li>
      <li class="menu__group"><a href="info.html" class="menu__link">Update/Delete</a></li>
      <li class="menu__group"><a href="Contact.php?sub='1'" class="menu__link">Contact US</a></li>
      <li class="menu__group"><a href="about.php?sub='1'" class="menu__link">About us</a></li>
      <li class="menu__group"><a href="index.html" onclick="alert('You have been logged out')" class="menu__link">logout</a></li>
    </ul>
  </nav>
  <div class="title">
    <h1 class="main_head" style="text-align:center">Tech Geek</h1>
  </div>
  <hr>
  <div class="fling-minislide">
    <img src="images\slide3.jpg" alt="Slide 4" />
    <img src="images\slide2.jpg" alt="Slide 3" />
    <img src="images\slide1.webp" alt="Slide 2" />
    <img src="images\slide4.png" alt="Slide 1" />
  </div>
  <div class="fixed">
  </div>
  <h2 class="main_head2"style="text-align:center">News</h2>

  <div class="center">
  <div class="property-card">
    <a href="display.html">
      <div class="property-image">
        <div class="property-image-title">
        </div>
      </div></a>
    <div class="property-description">
      <h5> Display Tech </h5>
      <p>Know more about the display you use everyday.An electronic device for the visual presentation of data or images.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
      </div>
    </a>
  </div>
  <div class="property-card">
    <a href="https://www.bbc.co.uk/bitesize/guides/zws8d2p/revision/1" target="_blank">
      <div class="property-image">
        <div class="property-image-title">

        </div>
      </div></a>
    <div class="property-description">
      <h5> Inside a Processor </h5>
      <p>Learn about the Heart of an electronic device.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
      </div>
    </a>
  </div>
  <div class="property-card">
    <a href="https://www.pcworld.idg.com.au/article/556585/top-10-things-consider-when-buying-new-laptop/" target="_blank">
      <div class="property-image">
        <div class="property-image-title">
        </div>
      </div></a>
    <div class="property-description">
      <h5>Your Next Laptop</h5>
      <p>Ensure the right purchace in your budget.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
      </div>
    </a>
  </div>
  <div class="property-card">
    <a href="widget.html">
      <div class="property-image">
        <div class="property-image-title">
        </div>
      </div></a>
    <div class="property-description">
      <h5>Updated News</h5>
      <p>Discover whats's trending in the technology space across the globe.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
      </div>
    </a>
  </div>
</div>
<br>
<br>
<br>

<h2 class="main_head2"style="text-align:center">Follow us on social media:</h2>
<div class="s">
  <ul>
    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
  </ul>
</div>

<br>
<br>
<button id="back-to-top-btn"><i class="fa fa-angle-double-up"></i></button>
<br>
<br>
<br>
<br>
<p class="cp-text">
    © Copyright 2020 Tech Geek. All rights reserved.
</p>
<script type="text/javascript" >
const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.pageYOffset > 300) { // Show backToTopButton
    if(!backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnExit");
      backToTopButton.classList.add("btnEntrance");
      backToTopButton.style.display = "block";
    }
  }
  else { // Hide backToTopButton
    if(backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnEntrance");
      backToTopButton.classList.add("btnExit");
      setTimeout(function() {
        backToTopButton.style.display = "none";
      }, 250);
    }
  }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);

// function backToTop() {
//   window.scrollTo(0, 0);
// }

function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 750;
  let start = null;

  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }
}

function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};
<?php  if (isset($_SESSION['username'])) : ?>
  alert("Welcome <?php echo $_SESSION['username'];?>");
   <?php endif ?>
</script>
</body>

</html>
