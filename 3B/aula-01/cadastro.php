<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Aluno</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="cadastro.php" class="active">Cadastrar Aluno</a></li>
      <li><a href="lista.php">Lista de Alunos</a></li>
      <li><a href="#">Sobre</a></li>
    </ul>
  </nav>

  <main>
    <section class="destaque container">
      <h1>Cadastro de Aluno</h1>
      <p>Projeto da disciplina <strong>Programação Web II</strong> • IFAC — <strong>3º ano Técnico em Informática</strong></p>
    </section>
    <section class="container form-wrapper">
      <form method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="texttext">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="texttext">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" class="texttext">

        <label for="dtNasc">Data de Nascimento</label>
        <input type="text" name="dtNasc" id="dtNasc" class="texttext">

        <label for="mae">Mãe</label>
        <input type="text" name="mae" id="mae" class="texttext">
    
        <div class="botoes">
          <button type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">Cadastrar</button>
          <button type="reset" class="limpar">Limpar</button>
        </div>
      </form>
    </section>

    <?php
      if(isset($_POST["cadastrar"]) && $_POST["cadastrar"] == "Cadastrar"){
          $nome = $_POST["nome"];
          $email = $_POST["email"];
          $cpf = $_POST["cpf"];
          $dtNasc = $_POST["dtNasc"];
          $dtEx = explode("/", $dtNasc);
          $Dt_BD = $dtEx[2]."-".$dtEx[1]."-".$dtEx[0];
          $mae = $_POST["mae"];

          $sqlInsere = "INSERT INTO aluno (alunoNome, alunoEmail, alunoCPF, alunoDTNascimento, alunoMae) VALUES ('$nome', '$email', '$cpf', '$Dt_BD', '$mae')";
          $sqlExecuta = mysqli_query($conexao, $sqlInsere);
          if($sqlExecuta){
              echo "<p class='toast sucesso'>Aluno cadastrado com sucesso!</p>";
          } else {
              echo "<p class='toast erro'>Erro ao cadastrar aluno: ".mysqli_error($conexao)."</p>";
          }
      }   
    ?>
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> — IFAC • Programação Web II — Sistema de Alunos
  </footer>
</body>
</html>