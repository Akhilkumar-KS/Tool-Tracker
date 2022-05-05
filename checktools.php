<?php
$toolkitid=$_POST['toolkitid'];
echo $toolkitid;

include "fileupload.php";
include "connect.php";


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

//sort($array);
//sort($array1);

foreach ($array1 as $key => $val){ 
    echo $key."==>".$val."\n"; 
}

foreach ($array as $key => $val){ 
    echo $key."==>".$val."\n"; 
}

$result5=array_diff_assoc($array1,$array);
print_r($result5);













?>