<?php
$pdo=new PDO();

$data=$pdo->exec("SELECT * FROM 'student'");

print_r($data);
?>