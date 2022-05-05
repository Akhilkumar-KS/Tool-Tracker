<?php
$target_dir = "ToolDetection/upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded sexess.";
  } else {
    echo "Sorry, there was an error uploading your file.";

  }






$postRequest = array(
    'imageName' => 'upload/'.htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])),
    'secondFieldData' => 'bar'
);

// print_r($postRequest['imageName']);
// exit();


$cURLConnection = curl_init('http://127.0.0.1:3000/detectTool');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

// $apiResponse - available data from the API request
 $jsonArrayResponse = json_decode($apiResponse);
 $array = json_decode(json_encode($jsonArrayResponse),true);
// print_r($jsonArrayResponse);
// print_r($array[$tool]);
?>