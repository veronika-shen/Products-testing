<?php

$id = $_GET['id'];

/** @var  PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';
$pdo->query("DELETE FROM products WHERE id=$id");

header('Location: /Products-testing/index.php');