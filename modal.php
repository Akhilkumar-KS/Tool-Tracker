<?php

//echo '<!-- The Modal -->';
echo '<div class="modal" id="myModal'.$toolkitid.'">';
echo '<div class="modal-dialog">';
echo '<div class="modal-content">';

//echo '<!-- Modal Header -->';
echo '<div class="modal-header" >';
echo '<h4 class="modal-title">Tools Available</h4>';
echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
echo '</div>';

//echo '<!-- Modal body -->';
echo '<div class="modal-body">';
//echo 'Modal body..';
echo '<table class="table">';
echo '<thead>';
echo '<tr class="table-warning">';
echo '<th>Toolkit ID</th>';
echo '<th>Tool Name</th>';
echo '<th>Count</th>';
echo '<th>Edit</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

include "connect.php";
//$toolkitid=$id;
//$toolkitid=$_GET['toolkitid'];
//echo $toolkitid;
$sql="select * from tools where toolkitid='$toolkitid' ";
$result1 = mysqli_query($link, $sql);

if (mysqli_num_rows($result1) > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
    echo '<center>';
    echo '<tr>';
    $toolid=$row["id"];
    echo '<td>'.$row["toolkitid"].'</td>';
    echo '<td>'.$row["toolname"].'</td>';
    echo '<td>'.$row["num"].'</td>';
    echo '<td>';
    echo("<a class=' btn btn- btn-secondary ' href='deletetool.php?toolid=$toolid;'>Remove</a>  ");
    echo '</td>';
    echo '</tr>';
    echo '</center>';
    }
    }
else {
        echo "0 results";
    }
//mysqli_close($link);
echo '</tbody>';
echo '</table>';

echo '</div>';

//echo '<!-- Modal footer -->';
echo '<div class="modal-footer">';
echo '<div align="right">';
//echo("<a align='left' class=' btn btn- btn-dark' href='addmoretool.php?toolid=$toolid;'>Add Tool</a>  ");
echo '<button type="button" class=" btn btn- btn-dark " data-toggle="modal" data-target="#myModal1'.$toolkitid.'">';
echo 'Add Tool';
echo '</button>';
include "modal1.php";
echo '</div>';
//echo '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
?>