<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<h3 style="font-style: italic;"> Welcome to </h2>
<h1 style="text-align:center;"> ASIAN AROMA </h1>
<!-- img slide show -->
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="menu/thai/shrimp paste fried rice.jpg" style="height: 380px;width:100%">
    <div class="text">Shrimp Paste Fried Rice</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="menu/durian crepe cake.jpg" style="height: 380px;width:100%">
    <div class="text">Durian Crepe Cake</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="menu/vnese/pancakes.jpg" style="height: 380px;width:100%">
    <div class="text">Pancakes</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="menu/avocado pudding.jpg" style="height: 380px;width:100%">
    <div class="text">Avocado Pudding</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="menu/chinese/pekingduck.jpg" style="height: 380px;width:100%">
    <div class="text">Pekking Duck</div>
  </div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
<?php include "footer.php"; ?>
