<?php

$name = $_POST['name'];
$date = $_POST['date'];
$count = $_POST['count'];

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';

$pdo->query("INSERT INTO supplies (product_id, date, count) VALUES ('$name', '$date', '$count')");
header('Location: /Products-testing/supplies/index.php');