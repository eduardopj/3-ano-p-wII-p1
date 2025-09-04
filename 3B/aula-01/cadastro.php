<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <hr>
    <form method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="texttext">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="texttext" >
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" class="texttext" >
        <label for="dtNasc">Data de Nascimento</label>
        <input type="text" name="dtNasc" id="dtNasc" class="texttext">
        <label for="mae">Mãe</label>
        <input type="text" name="mae" id="mae" class="texttext">
        <button type="submit">Cadastrar</button>


    </form>
</body>
</html>