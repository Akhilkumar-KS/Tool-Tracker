<?php
session_start();
$id=$_GET["id"];
// $toolkitname=$_GET["toolkitname"];
include "connect.php";
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