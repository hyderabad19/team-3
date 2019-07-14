<?php
session_start();
$email=$_POST["username"];
$pwd=$_POST["password"];
if ($email=='admin@gmail.com' && $pwd=='admin')
    header ("Location:report.php");
else
    echo 'Error';