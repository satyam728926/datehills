<?php
$loginid = $_POST['username'];
$loginpassword = $_POST['Password1'];
include "dbconnection1.php";

$qry = "SELECT * from `registered_data` WHERE username='$loginid' AND password1='$loginpassword'";
$result = mysqli_query($conn, $qry);
$rows = mysqli_num_rows($result);
if ($rows >0) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    if (isset($_SESSION['username'])) {
      
      header("Location: http://localhost/datehills/index.php");
    } else {
      echo "username is not set";
    }
} 
else 
{
  echo"username not found";
}