
<?php

$host = 'localhost';
$dbname = 'crudpdo';
$user = 'postgres';
$pass = '';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    // Defina o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}