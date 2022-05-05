<?php
$toolkitid=$_GET['toolkitid'];
$toolname=$_GET['toolname'];
$num=$_GET['num'];
include "connect.php";
$sql2 = "INSERT INTO tools(toolname,toolkitid,num)
VALUES ('$toolname','$toolkitid', '$num')";
mysqli_query($link,$sql2);
echo "done";
?>