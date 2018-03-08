<!DOCTYPE HTML>

<html>

<head>
  <title>E-Donation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.body
{
  margin-top: 8%;
}
</style>
</head>

<body>

<?php
    include 'navbar2.php';
?>

    <div class="container body">
        <!-- panel start-->
            <div class="panel panel-primary">
                <div class="panel-heading"><center><strong>EDIT USER-PROFILE</strong></center></div>
                     <div class="panel-body">





                     <div class=container>

                        <div class="row">
                            <form id="requestdetails">



                                <div class="form-group">
                                  <label for="usr">PHONE NUMBER :</label>
                                    <input type="text" class="form-control" id="p_num" placeholder="Phone Number"   class="validate" required="required" style="width:50%;">
                                </div>


                            <div class="form-group">
                                  <label for="usr">NATIONALITY:</label>
                                    <input type="text" class="form-control" id="p_nation" placeholder="NATIONALITY"   class="validate" required="required" style="width:50%;">
                             </div>


                              <div class="form-group">
                               <label for="comment">RESIDENTIAL ADDRESS :</label>
                                    <textarea style="width:50%;" class="form-control" rows="5" id="p_address" placeholder="Address"   class="validate" required="required"></textarea>
                            </div>


                            <div class="form-group">
                                  <label for="usr">OCCUPATION:</label>
                                    <input type="text" class="form-control" id="p_occup" placeholder="Occupation"   class="validate" required="required" style="width:50%;">
                             </div>



                            <div class="form-group">
                                  <label for="usr">UPLOAD IMAGE:</label>
                                    <input type="file" id="p_img" name="image" class="inpurfile" />
                             </div>



                                         <center>	<button class="btn btn-primary" id="sub">Submit</button></center>
                                </form>
                        </div>
                     </div>





                </div>
                <!--panel ends after this div-->
                </div>


          <!--container ends after this div-->
    </div>










<script>


</script>



</body>


</html>