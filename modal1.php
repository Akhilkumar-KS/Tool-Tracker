<?php

//echo '<!-- The Modal -->';
echo '<div class="modal" id="myModal1'.$toolkitid.'">';
echo '<div class="modal-dialog">';
echo '<div class="modal-content">';

//echo '<!-- Modal Header -->';
echo '<div class="modal-header" >';
echo '<center>';
echo '<h3 class="modal-title">Add Tool</h3>';
echo '</center>';
echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
echo '</div>';

//echo '<!-- Modal body -->';
echo '<div class="modal-body">';
//echo 'Modal body..';

echo '<div class="container">';
//echo $toolkitid;
echo '<form action="addmoretool.php" method="get" id="form">';
echo '<input type="hidden" id="toolkitid" name="toolkitid" value="'.$toolkitid.'">';
echo '<div class="form-group">';
echo '<input type="text" name="toolname" id="toolname" class="form-control" placeholder="Enter Tool Name"';
echo 'autocomplete="no-fill" required>';
echo '</div>';
echo '<div class="form-group">';
echo '<input type="text" name="num" id="num" class="form-control"';
echo 'placeholder="Enter Count" autocomplete="no-fill" required>';
echo '</div>';
echo '<div class="form-group">';
echo '<input type="submit" value="Add Tool" class="btn btn-dark btn-block">';
echo '</div>';
echo '</form>';
echo '</div>';


//echo '<!-- Modal footer -->';
echo '<div class="modal-footer">';
echo '<div align="right">';
//echo("<a align='left' class=' btn btn- btn-dark' href='addmoretool.php?toolid=$toolid;'>Add Tool</a>  ");

echo '<button type="button" class="btn btn-warning text-white" data-dismiss="modal">Close</button>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
?>