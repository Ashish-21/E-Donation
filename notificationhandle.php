

"mvayoo" yeh api ka name h

yeh api ka code h
<?php
//session_start();
//$user=$_SESSION['login_user'];

$phone=$_POST['phone'];
$amount=$_POST['d_amount'];

//echo $msgtxt;
$ch = curl_init();
$user="sureshchandwani06@gmail.com:wchamp2011";
$receipientno=$phone;
$senderID="TEST SMS";
$msgtxt="You will receive donation of $amount";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer;
    echo "Message sent";
}
curl_close($ch);     
?>


yeh usko call kiya tha ajax sem_acquire


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

  
  
  
  
  
  <?php
/*$ch = curl_init();
$user="ashishchandwani21@gmail.com:wchamp2011";
$receipientno=$phone;
$senderID="TEST SMS";
$msgtxt="You have received donation of $amount from $user";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{
     echo $buffer;
    echo "Amount Donated";
}
curl_close($ch);
*/
?>