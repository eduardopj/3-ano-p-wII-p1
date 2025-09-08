<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início • Sistema de Alunos</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php" class="active">Início</a></li>
      <li><a href="cadastro.php">Cadastrar Aluno</a></li>
      <li><a href="lista.php">Lista de Alunos</a></li>
      <li><a href="#">Sobre</a></li>
    </ul>
  </nav>

  <main class="container">
<section class="hero">
  <h1>Sistema de Alunos</h1>
  <p>Projeto da disciplina <strong>Programação Web II</strong> • IFAC — <strong>3º ano Técnico em Informática</strong></p>
  <div class="cta">
    <a class="btn btn-primary" href="cadastro.php">➕ Cadastrar Aluno</a>
    <a class="btn btn-outline" href="lista.php">📋 Ver Lista de Alunos</a>
  </div>
</section>


    <section class="cards container">
      <article class="card">
        <h3>Programação Web II — IFAC</h3>
        <p>Disciplina da turma do curso Técnico em Informática no IFAC do Campus Sena Madureira.  
        O objetivo é aplicar conceitos de desenvolvimento web em PHP e MySQL, criando sistemas completos.</p>
      </article>

      <article class="card">
        <h3>O que é CRUD?</h3>
        <p>CRUD significa <strong>Create, Read, Update e Delete</strong>.  
        É o conjunto básico de operações em bancos de dados, essencial para qualquer sistema web dinâmico.</p>
      </article>

      <article class="card">
        <h3>Objetivo do Projeto</h3>
        <p>Construir, passo a passo, um sistema de cadastro de alunos.  
        Essa prática integra conceitos de banco de dados, HTML, CSS, PHP e metodologias de programação.</p>
      </article>
    </section>

    <footer>
      © <?php echo date('Y'); ?> — IFAC • Programação Web II — Sistema de Alunos
    </footer>
  </main>
</body>
</html>
