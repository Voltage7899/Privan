<!DOCTYPE html>
<html lang = "ru">
<head>
  <meta charset = "UTF-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content = "ie=edge">
  <title>Форма регистрации</title>
  <style>
  body{
    background: #000 url(images/RegBackground.jpg);
    color:#000;
    background-attachment: fixed;
    background-repeat: repeat-x;
    position: relative;
    top: 50px;
    left: 600px;
  }
  input{
    padding: 20px;
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
  h1{
    position: relative;
    right: 100px;
  }
  b{
    padding: 10px;
    font-size: 35px;
    font-weight: bold;
    position: relative;
    right: 50px;
  }
  </style>
</head>
<body>
  <div class = "container mt-4">
     <div class = "row">
       <div class = "col">
         <h1>Магазин электроники Техносити</h1><br>
       </div>
       <div class = "col">
         <br><br><br><br><br><br><b>Форма авторизации</b><br><br>
         <form action="avtorization.php" method = "post">
           <input type="text" class = "from-control" name = "login"
           id = "login" placeholder = "Введите логин"><br><br>
           <input type = "password" class = "from-control" name = "pass"
           id = "pass" placeholder = "Введите пароль"><br><br>
           <button type="submit">Войти</button>
         </form><br>
         <form action = "StartMenu.php" method = "post">
           <button type = "submit">Регистрация</button>
         </form><br>
         <form action = "index.php" method = "post">
           <button type = "">Вернуться к просмотру товаров</button>
         </form>
       </div>
     </div>
  </div>
   </body>
   </html>
