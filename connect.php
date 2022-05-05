<?php

$link=mysqli_connect("localhost","root","");
$db="tools";
if(!$link)
    {
        die("could not connect:".mysqli_error());
    }
$db=mysqli_select_db($link,$db);
if(!$db)
    {
        die("could not connect:".mysqli_error());
    }
?>