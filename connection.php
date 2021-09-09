<?php


$connection=mysqli_connect("127.0.0.1","root","root","online_shop");
mysqli_query($connection, "SET NAMES 'utf8'");
if($connection==false)
{
	echo "u didnt connect to data base";
	echo mysqli_connect_error();
	exit();
}