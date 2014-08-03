<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$pic=$_POST['pic'];
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("INSERT INTO member(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$username', '$password')");
header("location: register.php?remarks=success");
mysql_close($con);
?>