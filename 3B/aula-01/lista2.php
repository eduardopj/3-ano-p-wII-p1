<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Alunos</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/all.min.css">
<link rel="icon" type="image/png" sizes="512x512" href="android-chrome-512x512.png?v=1">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php"><i class="fa-solid fa-house"></i> Início</a></li>
      <li><a href="cadastro.php"><i class="fa-solid fa-user-plus"></i> Cadastrar Aluno</a></li>
      <li><a href="lista.php" class="active"> <i class="fa-solid fa-list"></i> Lista de Alunos</a></li>
      <li><a href="sobre.php"><i class="fa-solid fa-circle-info"></i> Sobre</a></li>
    </ul>
  </nav>
  <main>
<section class="destaque container">
  <h1><i class="fa-solid fa-users"></i> Lista de Alunos</h1>
  <p>Projeto da disciplina <strong>Programação Web II</strong> • IFAC — <strong>3º ano Técnico em Informática</strong></p>
</section>

<div class="list-actions">
<form class="search" action="lista2.php" method="post" autocomplete="off">
   
  <input type="search" name="pesquisa" id="pesquisa" placeholder="Pesquisar por nome...">
  <button type="submit" name="pesquisar" id="pesquisar" value="Pesquisar" aria-label="Pesquisar">
    Pesquisar
  </button>
</form>
  <a class="btn btn-primary btn-new" href="cadastro.php">
    <i class="fa-solid fa-user-plus"></i> Novo Aluno
  </a>
</div>
<div class="table-wrapper">
  <table class="table">
    <thead>
      <tr>
        <th><i class="fa-regular fa-user" aria-hidden="true"></i> Nome</th>
        <th><i class="fa-regular fa-envelope" aria-hidden="true"></i> Email</th>
        <th><i class="fa-regular fa-id-card" aria-hidden="true"></i> CPF</th>
        <th><i class="fa-regular fa-calendar-days" aria-hidden="true"></i>Data de Nascimento</th>
        <th><i class="fa-solid fa-person" aria-hidden="true"></i>Mãe</th>
        <th style="width: 170px;"><i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i> Ações</th>
      </tr>
    </thead>
    <tbody>
<?php
if (isset($_POST["pesquisar"]) && $_POST["pesquisar"] == "Pesquisar" && $_POST["pesquisa"] !== "") {
    $pesq    = mysqli_real_escape_string($conexao, $_POST["pesquisa"]); // segurança mínima
    $sql     = "SELECT * FROM aluno WHERE alunoNome LIKE '%$pesq%' ORDER BY alunoNome";
} else {
    $sql     = "SELECT * FROM aluno ORDER BY alunoNome";
}

$sqlExecuta = mysqli_query($conexao, $sql);
$sqlConta   = $sqlExecuta ? mysqli_num_rows($sqlExecuta) : 0;

if ($sqlConta > 0){
    while ($linha = mysqli_fetch_assoc($sqlExecuta)){
        $nome   = $linha["alunoNome"];
        $email  = $linha["alunoEmail"];
        $cpf    = $linha["alunoCPF"];
        $dtNasc = date("d/m/Y", strtotime($linha["alunoDTNascimento"]));
        $mae    = $linha["alunoMae"];
?>
    <tr>
        <td><?= htmlspecialchars($nome) ?></td>
        <td><?= htmlspecialchars($email) ?></td>
        <td><?= htmlspecialchars($cpf) ?></td>
        <td><?= htmlspecialchars($dtNasc) ?></td>
        <td><?= htmlspecialchars($mae) ?></td>
        <td>
            <div class="actions">
                <a class="btn-sm btn-edit"   href="editar.php"><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i> Editar</a>
                <a class="btn-sm btn-delete" href="excluir.php"><i class="fa-regular fa-trash-can" aria-hidden="true"></i> Excluir</a>
            </div>
        </td>
    </tr>
<?php
}

?>
</tbody>

</table>
<div class="table-info">
  <span class="badge-count">
    Quantidade de registros: <?php echo (int)$sqlConta;} ?>
  </span>
</div>

<nav class="paginacao" aria-label="Navegação de página">
  <a class="page-link" href="?p=1">«</a>
  <a class="page-link active" href="?p=1">1</a>
  <a class="page-link " href="?p=2">2</a>
  <a class="page-link" href="?p=3">3</a>
  <a class="page-link" href="?p=3">»</a>
</nav>
  </main>
  <footer>
    &copy; <?php echo date('Y'); ?> — IFAC • Programação Web II — Sistema de Alunos
  </footer>
</body>
</html>