<?php
include "dbconnection1.php";
if(isset($_POST['submit'])){ 
$loginAge = $_POST['Age'];
$loginfullname = $_POST['Full_Name'];
$loginusername = $_POST['Username'];
$loginpassword = $_POST['Password'];
$loginAboutyou=$_POST['aboutyou'];
$sql_query="INSERT into registered_data(Age,Fullname,username,password1,aboutyou) values ('$loginAge','$loginfullname','$loginusername','$loginpassword','$loginAboutyou')";
if(mysqli_query($conn,$sql_query)){
    header("Location: http://localhost/index.php");
}
else
    echo mysqli_connect_error();
}    
?>