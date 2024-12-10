<?php

$id = $_GET['id'];

/** @var  PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/Products-testing/db.php';
$pdo->query("DELETE FROM supplies WHERE id=$id");

header('Location: /Products-testing/supplies/index.php');