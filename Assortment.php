<!DOCTYPE html>
 <html lang = "ru">
 <head>
   <meta charset="utf-8">
   </head>
   <style>
   body{
  background: #000 url(images/RegBackground.jpg);
}
   a{
     font-size: 30px;
     font-weight: bold;
     color: #000;
   }
   td
   {
     background: #fff; /* Фоновый цвет и фоновый рисунок*/
     color: #000; /*Цвет текста на странице*/
     padding: 70px;
     width: 200px;
   }
   img{
     width: 250px;
     height: 250px;
     border: none;
   }
   </style>
   <body>
     <header class="hd">
    <nav class="menu">
        <a href="private_cab.php">Личный Кабинет</a> &emsp; &emsp; &emsp; &emsp;
        <a href="Assortment.php">Ассортимент</a> &emsp; &emsp; &emsp; &emsp;
        <a href="bucket.php">Корзина</a> &emsp; &emsp; &emsp; &emsp;
        <a href="exit.php">Выход</a> &emsp; &emsp; &emsp; &emsp;
    </nav><br><br>
</header>
<table>
<?php

include("connection.php");


$result = mysqli_query($connection, "SELECT * FROM `computers`");
//while($row = $result->fetch_assoc())
$computers = mysqli_fetch_all($result);
foreach($computers as $computer)
{
echo'
    <div class = "col-md-4 product-left p-left">
    <div class = "product-main simpleCraft shelfItem">
    <tr>
    <td><img class="" src="'.$computer[4].'" alt = "" /></td>
    <div class="product-bottom">
      <td>'.$computer[1].'</td>
      <td>'.$computer[2].'</td>
      <td><a class ="item_add" href="#"><i></i></a> <span class="item_price">'.$computer[3].'</span></td>
      <td><a style="color: green;"href="bucket.php?id='.$computer[0].'">Добавить в корзину</a></td>
      </tr>
      </div>
      <div class="srch srch1">
      </div>
    </div>
  </div>
';

}
?>
</table>
</body>
</html>
