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
  .data
  {
    margin: 2%;
    border: solid;
  }
  .container1
  {
    //background: #3366FF;
    margin-top: 8%;
    margin-left:5%;
    margin-right: 5%;

  }


</style>
</head>


<body>

<?php include 'navbar2.php'?>

<div class="container-fluid">
  <div class="row container1">

   <div class="col-md-3">

    <div class="panel panel-primary">
      <div class="panel-heading"><center>NON-GOVENMENTAL ORGANIZATIONS</center></div>
      <div class="panel-body">
      <label>Akanksha Foundation</label>
     <center> <img src="donation2.jpg" alt=""  style="width:100%; height:200px;"/>  </center>
          <a href="https://www.akanksha.org/"><b>Visit</b></a>
     <hr/>
     <label>Sammaan Organization</label>
     <center> <img src="donation3.png" alt=""  style="width:100%;height:200px;"/>  </center>
      <a href="https://www.sammaan.org"><b>Visit</b></a>

     <hr/>
       <label>Naseho Organization</label>
     <center> <img src="donation4.jpg" alt=""  style="width:100%;height:200px;"/>  </center>
    <a href="http://www.naseoh.org/organizations/"><b>Visit<b/></a>
     <hr/>
     <br>
     <hr/>

      </div>
    </div>
    <!--
    <div class="panel panel-primary">
      <div class="panel-heading"><center>NOTIFICATIONS</center></div>
      <div class="panel-body">
          <br>
     <hr/>


      </div>
    </div> -->

</div>
    <div class="col-md-9">
    <div class="panel panel-primary">
      <div class="panel-heading"><center>SEEKERS</center></div>
      <div class="panel-body">



         <?php
                $selectdata="Select * from request";
                $result = mysqli_query($conn, $selectdata);

         if(mysqli_num_rows($result)>0)
        {
        while($row=mysqli_fetch_assoc($result))
            {

             ?>
             <div style="margin-top:3%;">
              <div class="w3-container">
            <div class="w3-card-4" style="width:100%;">
            <header class="w3-container w3-blue" style="height:30px;">
            <?php
            echo "<h5>TYPE:<strong>" ;
            echo $row['stype'];
            echo "</strong></p>" ;
            ?>
            </header>

            <div class="w3-container">
              <?php
              echo "<h5>Name:";
              echo $row['sname'];
              echo "</h5>";


              echo "<h5>Problem:";
              echo $row['sproblem'];
              echo "</h5>";


              echo "<h5>Amount Requested:";
              echo $row['samount'];
              echo "</h5>";


              ?>
            <center>   <a style="float:right;margin:1%;"class="btn btn-primary"href=" donation.php?id=<?php echo $row['id']?>">View Profile</a>   </center>
            </div>

            <footer class="w3-container w3-blue" style="height:10px;">


            </footer>
          </div>
        </div>
        </div>
           <?php
           }
        }

      ?>




      </div>
    </div>
    </div>
  </div>
</div>


</body>
</html>





















