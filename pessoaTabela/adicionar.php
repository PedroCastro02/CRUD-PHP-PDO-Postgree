
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Pessoa</h1>
        <form action="adicionar_action.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" >
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" >
            </div>
            <div class="form-group">
                <label for="CPF">CPF:</label>
                <input type="text" id="cpf" name="cpf">
            </div>
            <div class="form-group">
               <button type="submit">Cadastrar</button> 
            </div>
        </form>
    </div>
</body>
</html>
