<?php
require 'config.php';

$id = $_GET['id'];
$sql = 'DELETE FROM `mydata` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /');
?>