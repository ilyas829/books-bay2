<?php
  $servername = "localhost";
  $username = "srexphqixt";
  $password = "BRD878M6F13A123C";
  $db="projectx";
  $conn = mysqli_connect($servername, $username, $password, $db);
if($conn){
 //code for connection success 
}
else
{
    die("Error" . mysqli_connect_error());
}
?>