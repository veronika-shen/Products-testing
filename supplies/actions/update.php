<?php

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';

$pdo->query("UPDATE supplies SET product_id='$name', price='$price', article='$article' WHERE id=$id");
header('Location: /supplies/index.php');