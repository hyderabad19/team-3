<<<<<<< HEAD
 <?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$email=$_POST["email"];
$pswd=md5($_POST["password"]);
$_SESSION["email"]=$email;

$conn = new mysqli('localhost','root','','cfg');
if($conn->connect_error)
{
    die("connection failed ".$conn->connect_error);
}
else
{
    
    $sql1="select password from userdetails where email='".$email."';";
    $result=$conn->query($sql1);
    
    if($result->num_rows)
    {
        $retrievedpwd=$result->fetch_assoc()[password];
        if($pswd == $retrievedpwd)
        {
            
            header("Location:userwelcome.php");
            die();
        }
        ELSE
        {
            echo "invalid password";
            INCLUDE 'login.html';
        }
    }
 else {
     
        echo "invalid username";
        include 'login.html';
    }
}

?>
=======
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
>>>>>>> c921d894214f8c19eb9522feda19c4d5805b2ba7
