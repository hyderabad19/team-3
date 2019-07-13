
<?php
session_start();
$username = $_POST["name"];
$pwd = $_POST["password"];
$email = $_POST["email"];

$conn = new mysqli("localhost:3306","root","","cfg");
$_SESSION["email"]=$email;
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
else
{
    $sqlcheck = "select * from teacher where email='".$email."';";
    if($conn->query($sqlcheck)->num_rows)
    {
        echo "Account already exists with specified email address";
        include 'login.html';
    }
    else{
    $sqli = "insert into teacher values('$username','2','$email','$pwd');";
    if($conn->query($sqli)==TRUE)
    {
        echo "account successfully created";
        header("Location:login.html");
        die();
    }
    else {
        echo "please wait database problems".$conn->error;
    }
}
}