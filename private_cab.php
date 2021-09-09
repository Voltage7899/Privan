<!DOCTYPE html>
<html lang = "ru">
<style>
a{
  font-size: 30px;
  font-weight: bold;
  color: #000;
}
body{
  background: #000 url(images/RegBackground.jpg);
}
</style>
<head>
  <meta charset = "UTF-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content = "ie=edge">
  <title>Форма регистрации</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <header class="hd">
   <nav class="menu">
       <a href="private_cab.php">Личный Кабинет</a> &emsp; &emsp; &emsp; &emsp;
       <a href="Assortment.php">Ассортимент</a> &emsp; &emsp; &emsp; &emsp;
       <a href="bucket.php">Корзина</a> &emsp; &emsp; &emsp; &emsp;
       <a href="exit.php">Выход</a> &emsp; &emsp; &emsp; &emsp;
   </nav><br><br>
</header>
<hr>
<h2 class="cabhead">Welcome <?=$_COOKIE['user']?> </h2>

<?php
include("connection.php");
$name=$_COOKIE['user'];
$result=mysqli_query($connection,"SELECT * FROM `registred-people` WHERE `Name` = '$name' ");
$count=mysqli_fetch_assoc($result);

  echo  "<div id='cabinfo'>".
        "<h2 class='cabhead'>".'Login: '.$count['Login']."</h2>".
        "<h2 class='cabhead'>".'Name: '.$count['Name']."</h2>".
        "<h2 class='cabhead'>".'Password: '.$count['Pass']."</h2>".
        "</div>"
?>

<br>

<?php 
  if($_COOKIE['user']=='admin'):?>
    <form method ="POST" action="">
  
  
  <input type="text" placeholder="Name of thing" name="nameofthing">

  <input type="text" placeholder="Information" name="information">
  <input type="text" placeholder="Price" name="price">
  <input type="text" placeholder="Img" name="image">
  <hr>
  <input type="submit" value="Add" name="add">

  <?php



  
  $nameofthing=$_POST['nameofthing'];
  $information=$_POST['information'];
  $price=$_POST['price'];
  $path=$_POST['image'];

    if($_POST["add"] == true)
    {
    $inb=mysqli_query($connection,"INSERT INTO `computers`   (`name`,`information`,`price`,`image`) VALUES ('$nameofthing','$information','$price','images/$path' )" );

    }


?>
  <?php else: ?>
  <?php endif ?>





  </form>
<?php 
  if($_COOKIE['user']=='admin'):?>
  
<form method ="POST" action="">
  
  
  <input type="text" placeholder="Name of thing" name="nameofthing">
  
  <hr>

  <input type="submit" value="Delete" name="del">

<?php

  
  $nameofthing=$_POST['nameofthing'];


  if($_POST["del"] == true)
    {
    $inb=mysqli_query($connection,"DELETE FROM `computers` WHERE `name` = '$nameofthing'");

    }
?>

<?php else: ?>
  <?php endif ?>













</body>
</html>
