


<!DOCTYPE HTML>
<html>

<head>
  <title>E-Donation</title>
<style>
.body
{
  margin-top: 8%;
}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}


</style>


</head>


<body>

<?php include 'navbar2.php'?>
    <div class="container body">
        <!-- panel start-->
            <div class="panel panel-primary">
                <div class="panel-heading"><center><strong>SEEKER-DETAILS</strong></center></div>
                     <div class="panel-body">





                     <div class=container>

                        <div class="row">
                            <form id="requestdetails">

                            <div class="form-group">
                                  <label for="usr">NAME :</label>
                                    <input type="text" class="form-control" id="s_name" placeholder="Name"   class="validate" required="required" style="width:50%;">
                             </div>


                             <div class="form-group">
                                <label for="branch">SEEKER TYPE :</label>
                                 <select class="form-control" id="s_type"  class="validate"  required="required" style="width:50%;">
                                    <option>Farmer</option>
                                      <option>Patient</option>
                                  </select>
                             </div>


                              <div class="form-group">
                               <label for="comment">RESIDENTIAL ADDRESS :</label>
                                    <textarea style="width:50%;" class="form-control" rows="5" id="s_address" placeholder="Address"   class="validate" required="required"></textarea>
                            </div>

                                                                                                          <!--
                            <div class="form-group">
                                  <label for="usr">PHONE NUMBER :</label>
                                    <input type="hidden" class="form-control" id="s_number" placeholder="Phone Number"   class="validate" required="required" style="width:50%;" value="8087759227">
                             </div>                                                                           -->


                                <div class="form-group">
                                  <label for="usr">PHONE NUMBER :</label>
                                    <input type="text" class="form-control" id="s_acc" placeholder="Phone Number"   class="validate" required="required" style="width:50%;">
                             </div>


                              <div class="form-group">
                               <label for="comment">PROBLEM DESCRIPTION :</label>
                                    <textarea style="width:50%;" class="form-control" rows="10" id="s_problem" placeholder="Problem Descirption"  class="validate" required="required"></textarea>
                            </div>

                            <div class="form-group">
                                  <label for="usr">BANK BRANCH NAME :</label>
                                    <input type="text" class="form-control" id="s_branch" placeholder="Branch Name"   class="validate" required="required" style="width:50%;">
                             </div>

                            <div class="form-group">
                                  <label for="usr">BANK IFSC CODE :</label>
                                    <input type="text" class="form-control" id="s_ifsc" placeholder="Branch IFSC code"   class="validate" required="required" style="width:50%;">
                             </div>





                              <div class="form-group">
                                  <label for="usr">AMOUNT TO BE REQUESTED :</label>
                                    <input type="text" class="form-control" id="s_amount" placeholder="Phone Number"  class="validate" required="required" style="width:50%;">
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

<!--script for detials-->


        <script>

 document.getElementById('requestdetails').addEventListener('submit',loaddata);

        function loaddata(e)
        {
          e.preventDefault();
          var sname=$('#s_name').val();
          var saddress=$('#s_address').val();
          var stype=$('#s_type').val();
          var snumber=12345679;
          var sproblem=$('#s_problem').val();
          var samount=$('#s_amount').val();
          var sacc=$('#s_acc').val();
          var sbranch=$('#s_branch').val();
          var sifsc=$('#s_ifsc').val();

          var params='s_name='+sname+'&s_address='+saddress+'&s_type='+stype+'&s_number='+snumber+'&s_problem='+sproblem+'&s_amount='+samount+'&s_ifsc='+sifsc+'&s_branch='+sbranch+'&s_acc='+sacc;

/*        console.log(sacc);
        console.log(sbranch);
        console.log(sifsc);
  */
  //console.log(params);

    var  xhr= new XMLHttpRequest();
    xhr.open('POST','requesthandle.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.onload=function()
    {
      if(this.status==200)
      {
        var errorText=this.responseText;
       // $('#errorresquest').fadeIn();
       // $('#errorrequest').empty();
        //$('#errorrequest').append("Profile Uploaded Successfully!");
        //$('#errorrequest').fadeOut(5000);

        alert(errorText);
      }
    }
        xhr.send(params);
        }


       </script>





</body>







</html>