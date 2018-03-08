<?php
 session_start();
 $count="";
include 'dbconnect.php';


    //echo $_POST['username'];
/*    $userloginname=mysqli_real_escape_string($conn,$_POST['userloginname']);
    $userloginpassword=mysqli_real_escape_string($conn,$_POST['userloginpassword']);

   echo "$userloginname\n";
    echo "$userloginpassword\n";
  */
 if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $userloginname=mysqli_real_escape_string($conn,$_POST['userloginname']);
  $userloginpassword=mysqli_real_escape_string($conn,$_POST['userloginpassword']);
  
  $result=mysqli_query($conn,"SELECT user_id from useraccounts  where userAccountname='$userloginname' AND password='$userloginpassword'");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $data=$row['user_id'];

  //echo $data;
  if($result)
  {
  $count=mysqli_num_rows($result);
  }
if($count==1)
 {
   $_SESSION['login_user']=$userloginname;
   echo "Successfully Logged In...Please Wait";
 }
 else
 {
   echo "Something Went Wrong...Try Again ";
 }
    $randomNumber="@E-donation";
    $user_id1="$userloginname".$randomNumber.$data;
    $_SESSION['user_id']=$user_id1;
}
?>
