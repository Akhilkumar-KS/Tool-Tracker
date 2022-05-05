<?php
include "connect.php";
$username=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$sql = "INSERT INTO user (username,phone,password)
VALUES ('$username', '$phone','$password')";
mysqli_query($link,$sql);
// header("location:login.html");
echo "done";
?>
