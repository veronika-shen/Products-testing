<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';
$supplies = $pdo->query("SELECT supplies.*, products.name AS name 
                                FROM supplies
                                LEFT JOIN products ON supplies.product_id = products.id")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Продукция</title>
</head>
<body>
<h1>Список продукции</h1>
<a href="/Products-testing/"><button>Все товары</button></a>
<a href="create.php" id="createSup"><button>Добавить поставку</button></a>
<table>
    <thead>
    <tr>
        <td>id</td>
        <td>Наименование товара</td>
        <td>Количество</td>
        <td>Дата</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($supplies as $supplie): ?>
    <tr>
        <td><?= $supplie['id']?></td>
        <td><?= $supplie['name']?></td>
        <td><?= $supplie['count']?></td>
        <td><?= $supplie['date']?></td>
        <td><a href="edit.php?id=<?= $supplie['id']?>" id="edit<?= $supplie['id']?>">Изменить</a></td>
        <td><a href="actions/delete.php?id=<?= $supplie['id']?>" id="delete<?= $supplie['id']?>">Удалить</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
