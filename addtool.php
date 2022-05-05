<?php
session_start();
$userid= $_SESSION["id"];
//echo "$userid";
include "connect.php";
include "fileupload.php";
$toolkitname=$_POST['toolkitname'];
$sql = "INSERT INTO toolkit(userid,toolkitname)
VALUES ('$userid', '$toolkitname')";
mysqli_query($link,$sql);
$query="select * from toolkit where userid='$userid' && toolkitname='$toolkitname' ";
$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))
{
    $toolkitid=$row['id'];
}

foreach($array as $x => $x_value) {
    //echo "$x","$x_value";
    $sql = "INSERT INTO tools(toolname,toolkitid,num)
    VALUES ('$x','$toolkitid', '$x_value')";
    mysqli_query($link,$sql);
} 
echo "done";
?>
