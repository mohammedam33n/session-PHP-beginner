<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    // echo $_POST["color"];
    $color= $_POST["color"];
    setcookie("color",$color,time()+3500);
    // echo $_COOKIE["color"];
}
header("location:index.php");
?>