<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';
$products = $pdo->query("
    SELECT products.*, SUM(supplies.count) AS count
    FROM products
    LEFT JOIN supplies ON products.id = supplies.product_id
    GROUP BY products.id
")->fetchAll(PDO::FETCH_ASSOC);
var_dump($products);
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
<a href="supplies/" id="supplies"><button>Поставки товара</button></a>
<a href="create.php" id="create"><button>Добавить новый товар</button></a>
<table>
    <thead>
    <tr>
        <td>id</td>
        <td>Наименование</td>
        <td>Цена</td>
        <td>Артикул</td>
        <td>В наличии</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id']?></td>
        <td><?= $product['name']?></td>
        <td><?= $product['price']?></td>
        <td><?= $product['article']?></td>
        <td><?php if($product['count'] == 0){
                    echo 'Нет в наличии';
                }else
                echo $product['count'];?></td>
        <td><a href="edit.php?id=<?= $product['id']?>" id="edit<?= $product['id']?>">Изменить</a></td>
        <td><a href="actions/delete.php?id=<?= $product['id']?>" id="delete<?= $product['id']?>">Удалить</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
