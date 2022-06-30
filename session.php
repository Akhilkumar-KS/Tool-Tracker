<?php
    session_start();
    if(!isset($_SESSION["var"])){
        header("Location:login.html");
    }
?>