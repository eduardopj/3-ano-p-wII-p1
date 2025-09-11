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
  <div class="search">
    <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
    <input type="text" name="q" placeholder="Pesquisar por nome...">
    </div>
  <a class="btn btn-primary btn-new" href="cadastro.php"><i class="fa-solid fa-user-plus"></i> Novo Aluno</a>
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
      <tr>
        <td>Ana Souza</td>
        <td>ana@ifac.edu.br</td>
        <td>000.000.000-00</td>
        <td>21/03/2005</td>
        <td>Maria Souza</td>
        <td>
          <div class="actions">
            <a class="btn-sm btn-edit"   href=""><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i> Editar</a>
            <a class="btn-sm btn-delete" href=""><i class="fa-regular fa-trash-can" aria-hidden="true"></i> Excluir</a>
          </div>
        </td>
      </tr>
            <tr>
        <td>Ana Souza de Alencar Ribeiro da Costa</td>
        <td>ana@ifac.edu.br</td>
        <td>000.000.000-00</td>
        <td>21/03/2005</td>
        <td>Maria Souza</td>
        <td>
          <div class="actions">
            <a class="btn-sm btn-edit"   href=""><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i> Editar</a>
            <a class="btn-sm btn-delete" href=""><i class="fa-regular fa-trash-can" aria-hidden="true"></i> Excluir</a>
          </div>
        </td>
      </tr>
            <tr>
        <td>Eduardo Pinheiro Júnior</td>
        <td>ana@ifac.edu.br</td>
        <td>000.000.000-00</td>
        <td>21/03/2005</td>
        <td>Maria Souza</td>
        <td>
          <div class="actions">
            <a class="btn-sm btn-edit"   href=""><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i> Editar</a>
            <a class="btn-sm btn-delete" href=""><i class="fa-regular fa-trash-can" aria-hidden="true"></i> Excluir</a>
          </div>
        </td>
      </tr>

                  <tr>
        <td>Eduardo Pinheiro Júnior</td>
        <td>ana@ifac.edu.br</td>
        <td>000.000.000-00</td>
        <td>21/03/2005</td>
        <td>Maria Souza</td>
        <td>
          <div class="actions">
            <a class="btn-sm btn-edit"   href=""><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i> Editar</a>
            <a class="btn-sm btn-delete" href=""><i class="fa-regular fa-trash-can" aria-hidden="true"></i> Excluir</a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> — IFAC • Programação Web II — Sistema de Alunos
  </footer>
</body>
</html>