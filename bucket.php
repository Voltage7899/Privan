<?php

include("connection.php");
session_start();


require_once "db.php";
require_once "functions.php";

if ( isset($_GET['delete_id']) && isset($_SESSION['bucket']) ) {
	foreach ($_SESSION['bucket'] as $key => $value) {
		if ( $value['id'] == $_GET['delete_id'] ) {
			unset($_SESSION['bucket'][$key]);
		}
	}
}


if ( isset($_GET['id']) && !empty($_GET['id']) ) {

	$current_added_course = get_course_by_id($_GET['id']);

	// ...
	if ( !empty($current_added_course) ) {

		if ( !isset($_SESSION['bucket'])) {
			$_SESSION['bucket'][] = $current_added_course;
		}


		$course_check = false;

		if ( isset($_SESSION['bucket']) ) {
			foreach ($_SESSION['bucket'] as $value) {
				if ( $value['id'] == $current_added_course['id'] ) {
					$course_check = true;
				}
			}
		}


		if ( !$course_check ) {
			$_SESSION['bucket'][] = $current_added_course;
		}

	} else {
		header("Location: bucket.php");
	}

}

// var_dump($_SESSION);




?>

<!DOCTYPE html>
<html lang="ru">
<style>
body{
  background: #000 url(images/RegBackground.jpg);
}
td
{
  background: #fff; /* Фоновый цвет и фоновый рисунок*/
  color: #000; /*Цвет текста на странице*/
  padding: 0px;
  width: 200px;
}
</style>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

  <nav class="menu">
      <a href="private_cab.php">Личный Кабинет</a> &emsp; &emsp; &emsp; &emsp;
      <a href="Assortment.php">Ассортимент</a> &emsp; &emsp; &emsp; &emsp;
      <a href="bucket.php">Корзина</a> &emsp; &emsp; &emsp; &emsp;
      <a href="exit.php">Выход</a> &emsp; &emsp; &emsp; &emsp;
  </nav><br><br>

	<h1>Корзина</h1>

	<?php if ( isset($_SESSION['bucket']) && count($_SESSION['bucket']) !=0 ) : ?>

		<ul>
			<?php foreach( $_SESSION['bucket'] as $course ) : ?>
        <table>
          <tr>
					<td><?php echo $course['Name']; ?> <td>
					<td><?php echo $course['price']; ?> <td>
					<td> <a style ="color: red;" href="bucket.php?delete_id=<?php echo $course['id'];?>">Удалить из корзины</a></td>
          <td> <a style ="color: green;" href="order.php?id=<?php echo $course['id'];?>">Купить товар</a></td>
        </tr>
      </table>

			<?php endforeach; ?>
		</ul>

	<?php else : ?>

		<p>
			Ваша корзина пуста
		</p>

	<?php endif; ?>

	<br>

</body>
</html>
