<?php 
    $host = 'localhost';
    $porta = '3306';
    $dbName = 'filmesdb';
    $user = 'root';
    $pass = '';

    $connUrl = "mysql:host=$host;port=$porta;dbname=$dbName;charset=utf8mb4";
    
    $pdo = new PDO($connUrl, $user, $pass);
    