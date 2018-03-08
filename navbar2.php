<?php include 'session.php'?>
<!DOCTYPE HTML>

<html>

<head>
  <title>E-Donation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">E-Donation</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">

      <a href="donate.php" class="w3-bar-item w3-button"><b>DONATE</b></a>
      <a href="request.php" class="w3-bar-item w3-button"><b>REQUEST</b></a>

       <div class="w3-dropdown-hover">
    <button class="w3-button"><b><i class="fa fa-user"></i><?php echo "$user_loggedin";?><i class="fa fa-caret-down"></i></b></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>

    <a href="donate.php" onclick="w3_close()" class="w3-bar-item w3-button">DONATE</a>
      <a href="request.php" onclick="w3_close()" class="w3-bar-item w3-button">REQUEST</a>
<div class="w3-dropdown-hover">
    <button class="w3-button"><b><i class="fa fa-user"></i><?php echo "$user_loggedin";?><i class="fa fa-caret-down"></i></b></button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</nav>


<script>
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