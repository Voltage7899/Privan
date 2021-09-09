<!DOCTYPE html>
<html lang = "ru">
<style>
body{
  background: #000 url(images/RegBackground.jpg);
}
button {
  background-color: #008CBA; /* Green */
  border: 2px solid #555555;

  color: black;
  padding: 15px 32px;

  text-align: center;
  text-decoration: none;
  display: inline-block;

  font-size: 16px;
  font-weight: bold;

}

button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}

</style>
<head>
<body>
  
        <form action = "private_cab.php" method = "post">
          <button type = "submit">Личный Кабинет</button>
        </form>
        
        <form action = "Assortment.php" method = "post">
          <button type = "submit">Ассортимент</button>
        </form>
        
        <form action = "bucket.php" method = "post">
          <button type = "submit">Корзина</button>
        </form>
        
        <form action = "exit.php" method = "post">
          <button type = "submit">Выход</button>
        </form>
 </form>
</body>
</head>
