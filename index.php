<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>E-Donation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url(donate.jpg);
    min-height: 100%;
}
.title1
{
  font-size: larger;
  font-weight: bolder;
  background-color: #D4D0C8;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image:
    url(donate2.jpg);
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide title1"><b>E-Donation</b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i><b>HOME</b></a>
      <a href="loginsignup.php" class="w3-bar-item w3-button w3-round-large" ><i class="fa fa-user"></i><b>SIGNUP/LOGIN</b></a>
    </div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i><b>HOME</b></a>
      <a href="loginsignup.php" class="w3-bar-item w3-button w3-round-large" ><i class="fa fa-user"></i><b>SIGNUP/LOGIN</b></a>
</nav>




<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">E-DONATION</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"><em>MAKE A DONATION</em></p>
  <p>The “E-DONATION.COM” is a Web based  donation portal which will be mainly used for helping the patient,farmers and NGO’s who needs donation for fulfillment of their needs.The specification builds on the experience of the users of IT in money donation and interconnecting all the Patients, Farmers and NGO’S into a single network with donors.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="donate3.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="313px">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <h4>You Can Donate for</h4>
      <ul>
      <li><strong>FARMERS</strong></li>
      <li><strong>PATIENTS</strong></li>
      <li><strong>NGO</strong></li>

      </ul>
    </div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">
    REVIEW</span><br>
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">DONATE</span><br>
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">SAVE</span><br>

  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">MAKE A DIFFERENCE</span><br>

  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">SAVE A LIFE</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
  </div>
 <p>@Copyright by <a href="home.php" title="E-Donation" target="_blank" class="w3-hover-text-green">E-Donation.com</a></p>
</footer>

<!-- Add Google Maps -->
<script>
// Modal Image Gallery

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}
// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

</script>
</body>
</html>
