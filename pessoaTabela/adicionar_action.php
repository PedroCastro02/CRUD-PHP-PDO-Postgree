<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone');
$idade = filter_input(INPUT_POST, 'idade');
$cpf = filter_input(INPUT_POST, 'cpf');

if($nome && $email && $telefone && $idade && $cpf) {

    $sql = $pdo->prepare('SELECT * FROM pessoa WHERE :email = email OR :cpf = cpf');
    $sql->bindValue(':email', $email);
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    if ($sql->rowCount() === 0) {

    $sql= $pdo->prepare('INSERT INTO pessoa (nome, email, telefone, idade, cpf) VALUES (:nome, :email, :telefone, :idade, :cpf)');
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':idade', $idade);
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    header ('location: index.php');
    exit;

    } else {
        header ('location: adicionar.php');
        exit;
    }
} else {
    header ('location: adicionar.php');
    exit;
}
