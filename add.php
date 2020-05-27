<?php
$data = $_POST['list'];
if ($data == '') {
    header('Location: /');
}

require 'config.php';

$sql = 'INSERT INTO mydata(data) VALUES(:data)';
$query = $pdo->prepare($sql);
$query->execute(['data' => $data]);

header('Location: /');
?>