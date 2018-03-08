<!DOCTYPE HTML>

<html>

<head>
  <title>E-Donation</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.loginTemplate
{
  margin-top: 5%;
  margin-left:10%;
  margin-right:10%;
}
.signup
{
  margin-top:5%;
  margin-left:20%;
  margin-right:30%;
}

.panel
{
  margin:2%;
}




</style>






</head>

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




    <div class="container loginTemplate">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#register">Signup</a></li>
      <li><a data-toggle="tab" href="#login">Login</a></li>
    </ul>
    </div>

<div class="container">
    <div class="tab-content">

<!--Register Content-->
        <div id="register" class="tab-pane fade in active">

        <div class="panel panel-primary">
      <div class="panel-heading">SIGN-UP</div>
    	<div class="container ">
			<div class="row main signup">
				<div class="main-login main-center">
				<h5></h5>

                <div class="alert alert-danger" id="error">

                </div>

					<form id="registerform">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required="required"/>
								</div>
							</div>
						</div>

                                            <div class="form-group ">
							<button class="btn btn-danger btn-lg btn-block login-button" style="width:25%; margin:1%;" id="verify" >Verify Email</button>
						</div>



                        <div id="verification">
                        <p style="color:red;">OTP sent on your Email-id</p>
                        <input type="text" class="form-control"  id="otptext"  placeholder="Enter the Received OTP" required="required"/>
                        </div>



						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="userAccname"  placeholder="Enter your Username" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group ">

						<center>	<button class="btn btn-primary btn-lg btn-block login-button" style="width:25%;">Signup</button> </center>
						</div>
					</form>
				</div>
			</div>
		</div>

        </div>

    </div>
  <!--Register Content Ends-->

  <!--Login Content-->
        <div id="login" class="tab-pane fade">

              <div class="panel panel-primary">
                      <div class="panel-heading">LOGIN</div>
                      <div class="panel-body">

        <div class="container ">
			<div class="row main signup">
				<div class="main-login main-center">
				<h5></h5>
              <div class="alert alert-danger" id="errorlogin">

                </div>




					<form id="loginform">

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control"  id="login_name"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control"  id="login_password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
							<button class="btn btn-primary btn-lg btn-block login-button" style="width:20%;">LOGIN</button>
						</div>

					</form>
				</div>
			</div>


            </div>
            </div>

        </div>
  <!-- login content ends-->

    </div>
</div>



<!-- Script for Register-->

<script>
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



$('#error').hide();
$('#verification').hide();
var otp="";
var otpverify="";
/*Registration Script*/
document.getElementById('registerform').addEventListener('submit',register);

function register(e)
{
  e.preventDefault();

    var error=false;
    var msg="";
    var linebreak="<br/>";
    var chkusername=/[A-Za-z0-9]$/;
  /*values*/
  var username=$('#name').val();
  var useremail=$('#email').val();
  otpverify=$('#otptext').val();

  var userAccountname=$('#userAccname').val();
  var userpassword=$('#password').val();
  var userconfirm=$('#confirm').val();
  var params='name='+username+'&email='+useremail+'&userAccountname='+userAccountname+'&password='+userpassword;

  /*lenght*/
  var usernameLength=username.length;
  var useraccountnameLength=userAccountname.length;
  var userpasswordlength=userpassword.length;


  /*verification*/
  var verifyName=chkusername.test(username);
  var verifyUserAccountName=chkusername.test(userAccountname);


  if(usernameLength<3 || verifyName==false)
  {
    error=true;
    msg+="Please Enter Valid Name\n"+linebreak;
  }
  if(useraccountnameLength<3 || verifyUserAccountName==false)
  {
    error=true;
    msg+="Please Enter Valid Username\n"+linebreak;
  }
  if(userpasswordlength<6)
  {
    error=true;
    msg+="Password Length Should be Greater than 6\n"+linebreak;
  }

  if(!(userconfirm===userpassword))
  {
    error=true;
    msg+="Please Confirm Your Password"+linebreak;
  }
  if(!(otpverify===otp))
  {
    error=true;
    msg+="Incorrect OTP";
    console.log(otp);
  }
  if(error)
  {
    $('#error').fadeIn();
    $('#error').empty();
    $('#error').append(msg);
    $('#error').fadeOut(8000,function
    ()
    {
      $('#registerform')[0].reset();
    });
  //alert(msg);
  }
  else
  {
    var  xhr= new XMLHttpRequest();
    xhr.open('POST','signuphandle.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.onload=function()
    {
      if(this.status==200)
      {
        var errorText=this.responseText;
        $('#error').fadeIn();
        $('#error').empty();
        $('#error').append(errorText);
        $('#error').fadeOut(8000,function()
        {
          $('#registerform')[0].reset();
        });
      }
    }
    xhr.send(params);
  }
}


/*Registration Script Ends*/


/*Login Script*/
document.getElementById('loginform').addEventListener('submit',login);
$('#errorlogin').hide();
function login(e)
{

  e.preventDefault();
    var login_name=$('#login_name').val();
    var login_password=$('#login_password').val();
    var param='userloginname='+login_name+'&userloginpassword='+login_password;
    //console.log(param);
  var  xhr= new XMLHttpRequest();
    xhr.open('POST','loginhandle.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.onload=function()
    {
      if(this.status==200)
      {
        var errorText=this.responseText;

        $('#errorlogin').fadeIn();
        $('#errorlogin').empty();
        $('#errorlogin').append(errorText);
        $('#errorlogin').fadeOut(5000,function()
        {
          window.location.href="donate.php";
        });

      }
    }
        xhr.send(param);
  }


/*login script ends*/



$('#verify').click(function(e)
{
e.preventDefault();

var mail=$('#email').val();
if(mail=="")
{
  alert("Please Enter Mail id");
}
else
{
  $('#verification').show();
    var param='mailid='+mail;
//console.log(mail);
 var  xhr= new XMLHttpRequest();

    xhr.open('POST','phpmailer.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.onload=function()
    {
      if(this.status==200)
      {
        var errorText=this.responseText;
        console.log(errorText);
        otp=errorText;
      }
    }
        xhr.send(param);
}
});







</script>


<!-- Script for Register Ends-->





</body>

</html>