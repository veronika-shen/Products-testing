<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/supplies-testing/db.php';
$id = $_GET['id'] ?? '';

$supplie = $pdo->query("SELECT * FROM supplies WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменить информацию</title>
</head>
<body>
<h1>Изменить информацию о продукте</h1>
<form action="actions/update.php" method="post">
    <input type="text" name="name" value="<?= $supplie['name'] ?>">
    <label for="price">Цена</label>
    <input type="number" name="price" id="price" value="<?=  $supplie['price']?>">
    <input type="text" name="article" value="<?= $supplie['article'] ?>">
    <input type="hidden" value="<?= $supplie['id'] ?>" name="id">
    <input type="submit">
</form>
<a href="index.php"><button>Отмена</button></a>

</body>
</html>