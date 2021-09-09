<!DOCTYPE HTML>
<style>
a{
  font-size: 30px;
  font-weight: bold;
  color: #000;
}
</style>
<head>
  <header class="hd">
  <nav class="menu">
     <a href="private_cab.php">Личный Кабинет</a> &emsp; &emsp; &emsp; &emsp;
     <a href="Assortment.php">Ассортимент</a> &emsp; &emsp; &emsp; &emsp;
     <a href="bucket.php">Корзина</a> &emsp; &emsp; &emsp; &emsp;
     <a href="exit.php">Выход</a> &emsp; &emsp; &emsp; &emsp;
  </nav><br><br>
  </header>
</head>
  <body>
<form action="OpenPage.php" method = "post">
  <input type="text" class = "from-control" name = "cardNumber"
  id = "cardNumber" placeholder = "Введите номер карты"><br><br>
  <input type = "text" class = "from-control" name = "name"
  id = "name" placeholder = "Введите имя владельца"><br><br>
  <input type = "int" class = "from-control" name = "CVV"
  id = "CVV" placeholder = "Введите CVV код"><br><br>
  <button type="submit">Оплатить</button>
</form><br>
</body>
