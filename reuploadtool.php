<?php
//session_start();
include "fileupload.php";
include "connect.php";

$id=$_POST['id'];
//echo $id;
$newtoolkitname=$_POST['toolkitname'];
//echo $toolkitname ;
$sql = "UPDATE toolkit SET toolkitname='$newtoolkitname' WHERE id=$id";
mysqli_query($link,$sql);
// if ($link->query($sql) === TRUE) {
// foreach($array as $x => $x_value) {
//     //echo "$x","$x_value";
//     $sql = "UPDATE tools SET toolname='$x', num='$x_value' WHERE toolkitid=$id";
//     mysqli_query($link,$sql);
//     if ($link->query($sql) === TRUE) {
//         echo "done";
// } else {
//         echo "Error in updating toolkit: " . $link->error;
//     }
// }
// }
$sql = "DELETE FROM tools WHERE toolkitid=$id ";
if ($link->query($sql) === TRUE) {
    foreach($array as $x => $x_value) {
        //echo "$x","$x_value";
        $sql1 = "INSERT INTO tools(toolname,toolkitid,num)
        VALUES ('$x','$id', '$x_value')";
        mysqli_query($link,$sql1);
    } echo "done";}
    else{echo "error";}
    $link->close();

?>

