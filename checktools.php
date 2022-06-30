<?php
$toolkitid=$_POST['toolkitid'];
//echo $toolkitid;

include "fileupload.php";
include "connect.php";

if(isset($array)){
    $sql="select * from tools where toolkitid='$toolkitid' ";
    $result1 = mysqli_query($link, $sql);

    if (mysqli_num_rows($result1) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result1)) {
        $toolname=$row["toolname"];
        $num=$row["num"];
        $array1[$toolname] = $num; 
        }
    }

    mysqli_close($link);
    $array2=$array1;
    foreach ($array1 as $key1 => $val1){ 
        //echo $key."==>".$val."\n";
        
            foreach ($array as $key => $val){ 
                if($key1==$key && $val1!=$val){
                    $array2[$key1]= $val1 - $val;
                
                }
                else{
                    $array2[$key]=-$val;
                }
                
            }
    }
   // echo $array2;
    if($array1==$array){
        echo "done";
    }
    else{
        //echo "missing";
        
        echo '<table class="table table-hover">';
        echo '<thead>';
        echo '<tr class="table-warning">';
        echo '<th>Tool</th>';
        echo '<th>Count</th>';
        echo '<th>Status</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($array2 as $key1 => $val1){ 
            
                echo '<tr>';
                echo '<td>'.$key1.'</td>';
                echo '<td>'.abs($val1).'</td>';
                if($val1>0){
                    echo '<td>Missing</td>';
                }
                else{
                    echo '<td>Extra</td>';
                }
                echo '</tr>';
            
        }
    echo '</tbody>';
    echo '</table>';

    }
}
else{
    echo '<div class="container"><img src="oops.jpg" class="img-thumbnail" ></div><br><br>';
    
}














?>