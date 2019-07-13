<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$email = $_POST["email"];
$password = md5($_POST["password"]);
$school_name = $_POST["school_name"];
$conn = new mysqli('localhost','root','','cfg');
$_SESSION["email"]=$email;
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
else
{
    $sqlcheck = "select email from userdetails where email='".$email."';";
    if($conn->query($sqlcheck)->num_rows)
    {
        echo "Account already exists with specified email address";
        include 'register.html';
    }
    else{
    $sqli = "insert into userdetails('$email','$password','$school_name');";
    if($conn->query($sqli)==TRUE)
    {
        echo "Account successfully created";
        header("Location:login.html");
        die();
    }
    else {
        echo "please wait database problems".$conn->error;
    }
}
}