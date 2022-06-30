<?php 
$toolkitid=$_POST['toolkitid'];
$toolname=$_POST['toolname'];
$num=$_POST['num'];
include "connect.php";
$sql2 = "INSERT INTO tools(toolname,toolkitid,num)
VALUES ('$toolname','$toolkitid', '$num')";
mysqli_query($link,$sql2);
echo "done";
?>