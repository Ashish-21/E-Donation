<?php
session_start();
include 'dbconnect.php';

if($_POST)
{
    $sname=mysqli_real_escape_string($conn,$_POST['s_name']);
    $saddress=mysqli_real_escape_string($conn,$_POST['s_address']);
    $stype=mysqli_real_escape_string($conn,$_POST['s_type']);
    $snumber=mysqli_real_escape_string($conn,$_POST['s_number']);
    $sproblem=mysqli_real_escape_string($conn,$_POST['s_problem']);
    $samount=mysqli_real_escape_string($conn,$_POST['s_amount']);
    $sbranch=mysqli_real_escape_string($conn,$_POST['s_branch']);
    $sacc=mysqli_real_escape_string($conn,$_POST['s_acc']);
    $sifsc=mysqli_real_escape_string($conn,$_POST['s_ifsc']);
    $phone=$_POST['s_acc'];




     $insertquery="INSERT INTO request(sname,saddress,stype,snumber,sproblem,samount,sbranch,sacc,sifsc,phone,phone2) values('$sname','$saddress','$stype','$snumber','$sproblem','$samount','$sbranch','$sacc','$sifsc','$phone','$phone')";
    $result=mysqli_query($conn,$insertquery);
   if($result)
    {
        echo "Profile Uploaded Successfully!!!";
    }
    else
    {

    }



    /*
     //$branch1=str_replace(' ','',$branch);
     //$branch2=substr($branch1,0,4);
    //mysqli_select_db($conn,"sindhi_youth");
     //$user_id1=$_SESSION['user_id'];
    //$result=mysqli_query($conn,"SELECT user_id from $branch1 where user_id='$user_id1'");
    $num_of_rows=mysqli_num_rows($result);
    if($num_of_rows<1)
    {
    $insertquery="INSERT INTO $branch1(user_id,user_name,user_lname,user_address,user_family,user_income,user_noc,user_branch,user_year,user_percentage) values('$user_id1','$name','$lastname','$address','$family','$income','$name_of_college','$branch','$year','$percentage')";
    $result1=mysqli_query($conn,$insertquery);
    echo "You have Sucessfully Uploaded Your Details";
    }
    else
    {
      echo "You have already filled the form";
    } */
}

?>