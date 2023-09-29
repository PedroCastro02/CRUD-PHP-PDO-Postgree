<?php
require 'config.php'; 

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone');
$idade = filter_input(INPUT_POST, 'idade');
$cpf = filter_input(INPUT_POST, 'cpf');

if($id && $nome && $email && $telefone && $idade && $cpf) {

    $sql= $pdo->prepare('UPDATE pessoa SET nome = :nome, email = :email, telefone = :telefone, idade = :idade, cpf = :cpf WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':idade', $idade);
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    header('location: index.php');
    exit;

} else {
    echo "deu errado e não editou!";
}