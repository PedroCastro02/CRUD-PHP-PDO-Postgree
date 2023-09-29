<?php
require 'config.php';

$info =[];
$id = filter_input(INPUT_GET, 'id');
if($id) {

    $sql = $pdo->prepare('SELECT * FROM pessoa WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0 ){

        $info = $sql->fetch(PDO::FETCH_ASSOC);

    } else {
        header('location: index.php');
        exit;
    }

} else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editar o Cadastro de Pessoas</title>
</head>
<body>
    <div class="container">
        <h1>Editar o Cadastro de Pessoas</h1>
        <form action="editar_action.php" method="post">
            <div class="form-group">
            <input type="hidden" name="id" value="<?= $info['id']; ?>" />
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= $info['nome']; ?>" />
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="<?= $info['email']; ?>" />
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" value="<?= $info['telefone']; ?>" />
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" value="<?= $info['idade']; ?>" />
            </div>
            <div class="form-group">
                <label for="CPF">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="<?= $info['cpf']; ?>" />
            </div>
            <div class="form-group">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
</body>
</html>