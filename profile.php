<?php
session_start();
include "dbconnection1.php";
$loginid = $_SESSION['username'];
$qry = "SELECT * from `registered_data`WHERE username='$loginid' ";
$result=mysqli_query($conn,$qry);
$rows = mysqli_fetch_array($result);
$fullname=$rows['Fullname'];
$age=$rows['Age'];
$aboutus=$rows['aboutyou'];
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css?v=1.0">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div id="profilebody">
    <div id="my-keen-slider" class="keen-slider">
      <div class="keen-slider__slide number-slide1">
      <div class="card">
  <img src="sample 6.jfif" alt="John" height="200px" width="300px" ><br>
  <div class="name"><?php
  echo  "$fullname"?>
  </div><br>
         <div class="info"> Age:<?php
  echo  "$age"?>
  About:<?php
  echo "$aboutus"?></div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      </div>
    </div>
     </div>
     <?php
 
 ?>
</body>
</html>