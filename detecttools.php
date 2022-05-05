<?php
    session_start();
    include "fileupload.php";
    // $_SESSION["array"]=$array;
     foreach($array as $x => $x_value) {
         echo "Tool = " . $x . ", count = " . $x_value;
        echo "<br>"; } 
    
//echo "done"; 
?>