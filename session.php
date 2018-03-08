<?php
include 'dbconnect.php';
session_start();
$user_check=$_SESSION['login_user'];
$sql="select userAccountname from useraccounts where userAccountname='$user_check'";
$result=mysqli_query($conn,$sql);
if($result)
{
}
else
{
  echo "error";
}
$row=mysqli_fetch_assoc($result);
$user_loggedin=$row['userAccountname'];
if(!isset($_SESSION['login_user']))
{
  header("location:index.php");
}        


?>