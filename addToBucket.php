<?php
include("connection.php");
$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM `computers`");
$computers = mysqli_fetch_all($result);

mysqli_query($connection, "INSERT INTO `bucket` WHERE `computers`.`id` = '$id'");
$connection -> close();
header('Location: /Computers.php');
 ?>
