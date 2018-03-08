<?php
require 'dbconnect.php';
$nameError = $emailError = $passError = $websiteErr = "";
$error = true;
$alert=true;


   if (isset($_POST['name']) && isset($_POST['password']))
   {
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $userAccountname=mysqli_real_escape_string($conn,$_POST['userAccountname']);

/*    echo "$name";
    echo "$name";
    echo "$password";
    echo "$userAccountname";

  */
  $name = trim($_POST['name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);




    $userAccountname=trim($_POST['userAccountname']);
    $userAccountname=strip_tags($userAccountname);
    $userAccountname=htmlspecialchars($userAccountname);

     $result1=mysqli_query($conn,"SELECT userAccountname from useraccounts  where userAccountname='$userAccountname'");
     $count = mysqli_fetch_array($result1,MYSQLI_ASSOC);
     if($count<1)
     {
       $error=true;
     }
     else
     {
       $error=false;
        $errMSG = "Username Already Exits...";
        echo $errMSG;
        echo "Try For Another Username";
     }
    $alert=false;
    if($error==true)
    {
    $insertquery="INSERT INTO useraccounts(name,email,password,userAccountname) values('$name','$email','$password','$userAccountname')";
    $result=mysqli_query($conn,$insertquery);
        if($result)
        {
          $alert=true;
        }
    }
    if($alert)
    {
        $errMSG = "Successfully registered, you may login now";
        echo $errMSG;
    }
    else
    {

    }


}
?>
