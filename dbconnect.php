<?php

define('DB_HOST','localhost');
define('DB_PASS','');
define('DB_USER','root');
define('DB_NAME','edonation');

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(mysqli_connect_errno())
{
  echo 'connection failed'.mysqli_connect_errno();
}
?>