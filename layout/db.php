<?php
$user = 'user';
$password = 'password';
$db = 'php';
$host = 'localhost';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
}catch (PDOException $e){
    echo "Db problem";
}

//?>