<?php

$product_id = $_POST['product'];
$date = $_POST['date'];
$count = $_POST['count'];

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';

$pdo->query("INSERT INTO supplies (product_id, date, count) VALUES ('$product_id', '$date', '$count')");
header('Location: /Products-testing/supplies/index.php');