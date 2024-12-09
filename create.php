<?php

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание товара</title>
</head>
<body>
<h1>Создание новой записи с товаром</h1>
<form action="actions/store.php" method="post">
    <input type="text" name="name" placeholder="Наименование товара" required>
    <label for="price">Цена товара</label>
    <input type="number" name="price" id="price" required>
    <input type="text" name="article" placeholder="Артикул" required>
    <input type="submit">
</form>
</body>
</html>
