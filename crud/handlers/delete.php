<?php
include "../core/database.php";
$id = $_GET["id"];
$sql = "SELECT * FROM `notes` WHERE id =$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($row);
echo "</pre>";



$sql_delete = "DELETE FROM `notes` WHERE `notes`.`id` = $id";
$result_delete = mysqli_query($conn, $sql_delete);
header("location:../read.php");
