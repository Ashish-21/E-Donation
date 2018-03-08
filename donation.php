
<!DOCTYPE HTML>

<html>

<head>
    <title>E-Donation</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.panel
{
  margin-top:8%;
}



</style>
</head>


<body>
<?php include 'navbar2.php'?>
  <?php

          $userid=$_GET['id'];
          $selectdata="Select * from request where id='$userid'";
          $result = mysqli_query($conn, $selectdata);
          $row=mysqli_fetch_assoc($result);
          $phone=$row['phone2'];
  ?>
   //echo $user;

<div class="container panel1">
<div class="panel panel-primary">
      <div class="panel-heading"><center>SEEKER PROFILE</center></div>
      <div class="panel-body">


      <div class="row">
      <p><strong style="margin:1%;">PERSONAL DETAILS</strong></p>
                  <div class="col-md-3">
                  <h5>NAME :</h5>
                  <hr/>
                  <h5>ADDRESS :</h5>
                  <hr/>
                  <h5>PHONE NUMBER :</h5>
                  <hr/>
                  <h5>PROBLEM DESCRIPTION :</h5>
                  <hr/>
                  </div>
                  <div class="col-md-9">
                  <h5><?php echo  $row['sname'];
                  echo "<hr/>" ;
                  ?></h5>
                  <h5><?php echo  $row['saddress'];
                  echo "<hr/>";
                  ?></h5>
                  <h5><?php echo  $row['phone2'];

                  echo "<hr/>" ;
                  ?></h5>
                  <h5><?php echo  $row['sproblem'];
                  echo "<hr/>"  ;
                  ?></h5>
                </div>

                </div>
        <p><strong style="margin:1%;">BANK DETAILS</strong></p>

    <div class="row">


                  <div class="col-md-3" style="margin:1%;">
                  <h5>BRANCH :</h5>
                  <hr/>
                  <h5>IFSC CODE :</h5>
                  <hr/>
                  <h5>ACCOUNT NUMBER : </h5>
                  <hr/>

                  <h5>AMOUNT REQUESTED : </h5>
                  <hr/>
                  </div>


                     <div class="col-md-6" style="margin:1%;">
                  <h5><?php echo  $row['sbranch'];
                  echo "<hr/>" ;
                  ?></h5>
                  <h5><?php echo  $row['sifsc'];
                  echo "<hr/>";
                  ?></h5>
                  <h5><?php echo  $row['sacc'];
                  echo "<hr/>" ;
                  ?></h5>

                  <h5><?php echo  $row['samount'];
                  echo "<hr/>" ;
                  ?></h5>
                </div>


    </div>

                <form id="donateform">
                <center>
                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">"Giving is not just about making a donation.It is about making a difference."</label>
							<div class="cols-sm-10">
								<div class="input-group">

									<input type="text" class="form-control"  id="d_amount"  placeholder="Amount" required="required" style="width:100%;margin:2%;"/>
								</div>
							</div>
						</div>
                </center>
                       <div class="form-group ">
							<center><button class="btn btn-primary btn-lg btn-block login-button" style="width:25%;">Please Donate!</button></center>
						</div>
                </form>





      </div>
      </div>
    </div>


</div>

<script>

document.getElementById('donateform').addEventListener('submit',data);
//$('#errorlogin').hide();
var id="";
var phone="";
function data(e)
{

  e.preventDefault();
    var damount=$('#d_amount').val();
    id=<?php echo $userid;?>;
    phone=<?php echo $phone;?>;
    //console.log(id);
    var param='d_amount='+damount+'&d_id='+id+'&phone='+phone;



  var  xhr= new XMLHttpRequest();
    xhr.open('POST','notificationhandle.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.onload=function()
    {
      if(this.status==200)
      {
        var errorText=this.responseText;

          alert(errorText);


      }
    }
        xhr.send(param);
  }

</script>

</body>

</html>