<?php
require_once 'connect.php';

?>
<html lang="ru">
<head>
<meta charset ="utf-8">
<title>Test DB</title>
</head>
<body>
<H1> <div style="text-align: center;"> База данных.<div style="text-align: center;"> </H1>
<div style="text-align: center;">
<form method="post" action="signup.php" id="add_rec"
class="form-inline">
    <label for="building_name"></label><input type="text" name="name" id="building_name"
                                              placeholder="Название здания"
                                              required>
    <label for="the_type_of_work"></label><input type="text" name="type" id="the_type_of_work"
                                                 placeholder="Тип работы" required>
    <label for="the_date"></label><input type="text" name="date" id="the_date"
                                         placeholder="Дата" required>
    <label for="price"></label><input type="text" name="price" id="price"
                                      placeholder="Стоимость " required>
    <label for="engineer"></label><input type="text" name="engineer" id="engineer"
                                         placeholder="Инженер"
                                         required>
<button>Отправить</button>
</form>
<hr><br>
<h2>Вывод данных</h2>
	
	<?php

require_once 'signup.php';

?>