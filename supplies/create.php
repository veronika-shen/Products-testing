<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';
$supplies = $pdo->query("SELECT * FROM supplies")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление поставки</title>
</head>
<body>
<h1>Добавить новую запись о поставки</h1>
<form action="actions/store.php" method="post">
    <select name="supplie" id="supplie" required>
        <?php foreach ($supplies as $supplie): ?>
        <option value="<?= $supplie['id']?>"><?= $supplie['name']?></option>
        <?php endforeach; ?>
    </select>
    <label for="date">Дата</label>
    <input type="date" name="date" id="date" required>
    <label for="count">Количество</label>
    <input type="number" name="count" id="count" required>
    <input type="submit">
</form>
</body>
</html>
