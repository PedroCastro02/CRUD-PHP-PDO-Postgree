<?php
require 'config.php';

$lista = [];
$sql = $pdo->query('SELECT * FROM pessoa');
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    <title>Document</title>
</head>
<body>
<div class="header">
		<a href="adicionar.php"><h1>Novo Cliente</h1></a>
	</div>
    <table>
        <tr>
            <th>Id</th>
            <th>nome</th>
            <th>email</th>
            <th>telefone</th>
            <th>idade</th>
            <th>cpf</th>
            <th>ações</th>
        </tr>
        <?php foreach ($lista as $pessoa): ?>
            <tr>
                <td><?= $pessoa['id'];?></td>
                <td><?= $pessoa['nome'];?></td>
                <td><?= $pessoa['email'];?></td>
                <td><?= $pessoa['telefone'];?></td>
                <td><?= $pessoa['idade'];?></td>
                <td><?= $pessoa['cpf'];?></td>
                <td>
                <a href="editar.php?id=<?= $pessoa['id'];?>"><span class="material-symbols-outlined">
edit
</span></a>
            <a href="excluir.php?id=<?= $pessoa['id'];?>" onclick="return confirm('Tem certeza que deseja excluir este dado?')"><span class="material-symbols-outlined">
delete
</span></a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>