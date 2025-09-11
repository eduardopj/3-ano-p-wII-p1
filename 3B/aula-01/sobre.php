<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sobre — Sistema de Alunos</title>
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
      <li><a href="lista.php"><i class="fa-solid fa-list"></i> Lista de Alunos</a></li>
      <li><a href="sobre.php" class="active"><i class="fa-solid fa-circle-info"></i> Sobre</a></li>
    </ul>
  </nav>

  <main>
    <section class="destaque container">
      <h1><i class="fa-solid fa-graduation-cap"></i> Sobre o Sistema de Alunos</h1>
      <p>Projeto da disciplina <strong>Programação Web II</strong> — IFAC • <strong>3º ano Técnico em Informática</strong></p>
    </section>
    <section class="section container">
      <h2 class="section-title"><i class="fa-solid fa-lightbulb"></i> O Projeto</h2>
      <p class="mb-2">
        Este sistema foi desenvolvido para apoiar atividades práticas de cadastro e gerenciamento de alunos.
        Ele demonstra conceitos essenciais de desenvolvimento web, como estruturação com PHP, persistência
        com MySQL e construção de interfaces com HTML e CSS.
      </p>

      <div class="divider"></div>

      <div class="cards">
        <article class="card">
          <h3><i class="fa-solid fa-screwdriver-wrench"></i> Tecnologias</h3>
          <ul class="mt-1">
            <li>PHP (estilo estruturado)</li>
            <li>MySQL (extensão <code>mysqli_*</code>)</li>
            <li>HTML5 + CSS3 (arquivo <code>css/estilo.css</code>)</li>
            <li>Font Awesome (ícones)</li>
          </ul>
        </article>

        <article class="card">
          <h3><i class="fa-solid fa-list-check"></i> Funcionalidades</h3>
          <ul class="mt-1">
            <li>Cadastro, listagem, pesquisa, edição e exclusão de alunos</li>
            <li>Listagem com ação rápida (Editar/Excluir)</li>
            <li>Layout responsivo e navegação fixa</li>
          </ul>
        </article>

        <article class="card">
          <h3><i class="fa-solid fa-circle-question"></i> Como usar</h3>
          <ol class="mt-1">
            <li>Acesse <strong>Início</strong> para a página principal.</li>
            <li>Use <strong>Cadastrar Aluno</strong> para inserir um novo registro.</li>
            <li>Em <strong>Lista de Alunos</strong>, pesquise pelo nome e gerencie os registros.</li>
          </ol>
        </article>
      </div>
    </section>
    <section class="section container">
      <h2 class="section-title"><i class="fa-solid fa-user-group"></i> Créditos & Contato</h2>
      <p class="mb-2">
        Trabalho acadêmico desenvolvido pelos estudantes do IFAC na disciplina Programação Web II.
      </p>
      <p class="text-muted">
        Dúvidas ou sugestões? Entre em contato com a coordenação/ docente responsável.
      </p>
    </section>
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> — IFAC • Programação Web II — Sistema de Alunos
  </footer>
</body>
</html>
