<?php
//session_start();
include "connect.php";
$id=$_GET["toolkitid"];
// $toolkitname=$_GET["toolkitname"];

$sql = "DELETE FROM tools WHERE toolkitid=$id ";


if ($link->query($sql) === TRUE) {
  $sql = "DELETE FROM toolkit WHERE id=$id ";
  if ($link->query($sql) === TRUE) {
 echo "done";
} else {
  echo "Error deleting record: " . $link->error;
}
}
else{echo "error";}
$link->close();
?>