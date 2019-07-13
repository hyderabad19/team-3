<?php
session_start();
$email=$_POST["username"];
$pwd=$_POST["password"];
$_SESSION["email"]=$email;
$conn = new mysqli("localhost","root","","cfg");
$sql  = "select * from teacher where email ='$email' and password ='$pwd'";
$res = mysqli_query($conn,$sql);
$cnt = mysqli_num_rows($res);
if($cnt==1){
  header("location:userdashboard.html");
}else{
  echo"NOT UNABE";
}
?>
