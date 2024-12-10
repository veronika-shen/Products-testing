<?php

$id = $_POST['id'];
$product_id = $_POST['product'];
$date = $_POST['date'];
$count = $_POST['count'];


/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';

$pdo->query("UPDATE supplies SET product_id='$product_id', date='$date', count='$count'  WHERE id=$id");
header('Location: /Products-testing/supplies/index.php');