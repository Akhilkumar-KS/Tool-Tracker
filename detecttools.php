<?php
    session_start();
    include "fileupload.php";
    if(isset($array)){
    // $_SESSION["array"]=$array;
        echo '<div class="container"><img src="'.$target_file.'" class="img-thumbnail" ></div><br><br>';
        echo '<table class="table table-hover">';
        echo '<thead>';
        echo '<tr class="table-warning">';
        //echo '<tr>';
        echo '<th>Tool</th>';
        echo '<th>Count</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach($array as $x => $x_value) {
            //echo "Tool = " . $x . ", count = " . $x_value;
            //echo "<br>"; 
            echo '<tr>';
            echo '<td>'.$x.'</td>';
            echo '<td>'.$x_value.'</td>';
            echo '</tr>';
        } 
    echo '</tbody>';
    echo '</table>';
    //echo "done"; 
    }
    else{
       // echo '<div class="container"><img src="oops.jpg" class="img-thumbnail" ></div><br><br>';
        echo "error";
    }
?>