<?php
session_start();
require_once 'connect.php';
require_once 'index.php';


echo '' . htmlspecialchars($_POST["name"]) . '!';
echo '' . htmlspecialchars($_POST["type"]) . '!';
echo '' . htmlspecialchars($_POST["date"]) . '!';
echo '' . htmlspecialchars($_POST["price"]) . '!';
echo '' . htmlspecialchars($_POST["engineer"]) . '!';

$connect = "INSERT INTO `energy` (`id`, `name`, `type`, `date`, `price`, `engineer`) VALUES ('id', 'name', 'type', 'date', 'price', 'engineer')"


?>
