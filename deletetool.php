<?php
$toolid=$_GET['toolid'];
echo $toolid;
include "connect.php";
$sql3 = "DELETE FROM tools WHERE id=$toolid ";
if ($link->query($sql3) === TRUE) {
    echo "done";
}
else {
    echo "Error deleting record: "; $link->error;
}
$link->close();
?>