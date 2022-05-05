<?php
 session_start();
include "connect.php";
$phonenumber=$_POST["phone"];
$password=$_POST["password"];
// if($username=="das" && $password=="123")
$query="select * from user where phone='$phonenumber' && password='$password' ";

$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))
{
    $id=$row['id'];
    $_SESSION["id"]=$id;

    // $_SESSION["username"]=$username;
    // header("location:show.php");
    echo "done";
}
else{
    echo "error";
}
// while($row=mysqli_fetch_array($result))
// {

//     $id=$row['id'];
//     $_SESSION["id"]=$id;
// }

?>