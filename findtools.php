<?php

    $tool=$_POST['tool'];
    include "fileupload.php";
    if(isset($array[$tool])){
        if ($array[$tool]>=1) {
            echo '<div class="container"><img src="'.$target_file.'" class="img-thumbnail" ></div><br><br>';
            echo $array[$tool];
            echo ' ';
            echo $tool;
            echo ' ';
            echo 'Founded';
            }}
    else{
        echo "error";
    }

?>