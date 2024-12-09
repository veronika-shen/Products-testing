<?php

$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';

$pdo->query("INSERT INTO products (name, price, article) VALUES ('$name', '$price', '$article')");
header('Location: /Products-testing/index.php');