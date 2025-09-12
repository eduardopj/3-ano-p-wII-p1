<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Desenvolvimento Web II - Aprofundando na linguagem</title>
  <link rel="stylesheet" href="css/estilo.css">
 </head>
<body>
<a id="topo"></a>

  <header>
    <div class="container nav">
      <div class="logo">
        <span class="badge" aria-hidden="true"></span>
        <span>Desenvolvimento Web II</span>
      </div>
      <nav class="links" aria-label="links">
        <a href="#sobre">Sobre</a>
        <a href="#teste">PHP</a>
      </nav>
    </div>
  </header>

<section class="hero">
  <div class="hero-bg">
    <img src="imagens/img-01.jpeg" alt="Imagem do campus Sena Madureira" />
  </div>
  <div class="hero-content container">
    <h1>Primeiras Funções em PHP</h1>
    <p>Principais funções utilizadas no php. Funções de data, funções de saída, contagens, maiúsculas e minúsculas, entre outras.</p>
  </div>
</section>
  <section class="container">
    <div class="grid">
      <article class="card" id="saida">
        <h3>Funções de saída</h3>
        <hr>
        <h4>Echo</h4>
        <p>O <code>echo</code> é uma das principais funções de saída em PHP. Ele é usado para imprimir texto na tela. É possível imprimir múltiplos argumentos separados por vírgula.</p>
        <?php 
          echo "O Palmeiras não tem mundial";
          echo " E o Flamengo é o maior do Rio.";
           ?>
        <hr>
        <h4>Print</h4>
        <p>O <code>print</code> é outra função de saída em PHP. Ele é usado para imprimir texto na tela, mas ao contrário do <code>echo</code>, ele retorna um valor (1) e só aceita um único argumento. É mais lento. <strong>Não recomendado em PHP.</strong></p>
        <?php
        print("Olá mundo!!!");
        ?>
        <hr>
        <h4>Print_r</h4>
        <p>O <code>print_r</code> é uma função usada para imprimir  estruturas de dados, como arrays e objetos, de forma legível.</p>
        <?php
        $array = array("Maçã", "Banana", "Laranja");
        print_r($array);
        ?>  <hr>    
        <h4>Var_dump</h4>
        <p>O <code>var_dump</code> é uma função usada para exibir informações detalhadas sobre uma variável, incluindo seu tipo e valor.</p>
          <?php
           $texto = "O Campus Sena Madureira é o campus que tem os alunos mais legais do IFAC!";
           $num = 10;
           $real = 5.3;
           $bolleano = true;
           echo var_dump($texto)."<br>";
           echo var_dump($num)."<br>";
           echo var_dump($real)."<br>";
           echo var_dump($bolleano)."<br>";
           ?>
      </article>
      <article class="card" id="teste">
        <h3>Funções de data</h3>
        <?php
            echo date("d/m/Y")."<br>";
            echo date("H:i:s")."<br>";
            echo date("d/m/Y H:i:s")."<br>";
            echo date("y");
        ?>
        <hr>
        <h4>Principais formatos</h4>
        <ul>
            <li><code>d</code> – Dia do mês (01–31)</li>
            <li><code>m</code> – Mês (01–12)</li>
            <li><code>Y</code> – Ano com 4 dígitos (ex.: 2024)</li>
            <li><code>y</code> – Ano com 2 dígitos (ex.: 24)</li>
            <li><code>H</code> – Hora 24h (00–23)</li>
            <li><code>h</code> – Hora 12h (01–12)</li>
            <li><code>i</code> – Minutos (00–59)</li>
            <li><code>s</code> – Segundos (00–59)</li>
            <li><code>l</code> – Nome do dia da semana</li>
            <li><code>F</code> – Nome do mês por extenso</li>
        </ul>
    <h4>Time</h4>
    <p>O <code>time()</code> é uma função que retorna o timestamp atual (número de segundos desde 1 de janeiro de 1970).</p>
    <?php echo time(); ?>
    <hr>
    <h4>mktime</h4>
    <p>O <code>mktime()</code> é uma função que retorna o timestamp de uma data específica.</p>
   <?php echo mktime(16,2,1,6,4,1983); ?>
   
    <hr>    
    <p>Os parâmetros são: hora, minuto, segundo, mês, dia, ano.</p>
    <h4>strtotime</h4>
    <p>O <code>strtotime()</code> é uma função que converte uma string de data/hora em um timestamp.</p>
    <?php
      echo strtotime("2025-09-10 16:34:00");
    ?>  <hr>    
    <h4>getdate()</h4>
    <p>O <code>getdate()</code> é uma função que retorna um array associativo com informações detalhadas sobre uma data específica.</p>
    <?php
        $info = getdate();
        print_r($info);
    ?>
</article>
        
      <article class="card" id="string">
        <h3>Funções de String</h3>
        <hr>
        <h4>strlen()</h4>
        <p>A função <code>strlen()</code> retorna o tamanho de uma string.</p>
       <?php
       $time = "São Paulo";
       echo strlen($time);
       ?>
        <hr>
        <h4>strtoupper</h4>
        <p>A função <code>strtoupper()</code> converte todos as letras de uma string para maiúsculas.</p>   
          <?php 
          $time = "flamengo"; 
          echo strtoupper($time);
        ?> 
        <hr>
        <h4>strtolower</h4>
        <p>A função <code>strtolower()</code> converte todos as letras de uma string para minúsculas.</p>
        <?php 
        $time = "SAO PAULO";
        echo strtolower($time);
        ?>
        <hr>    
        <h4>ucfirst</h4>
        <p>A função <code>ucfirst()</code> converte a primeira letra de uma string para maiúscula.</p>
      
        <hr>    
        <h4>ucwords</h4>
        <p>A função <code>ucwords()</code> converte a primeira letra de cada palavra de uma string para maiúscula.</p>
     
        <hr>    
        <h4>substr</h4>
        <p>A função <code>substr()</code> retorna uma parte de uma string, com base na posição inicial e no comprimento especificados.</p>
          <?php
            $nome = "Eduardo";
            echo substr($nome, 0, 3);
          
          ?>
        <hr>    
        <h4>str_replace</h4>
        <p>A função <code>str_replace()</code> substitui todas as ocorrências de uma string por outra dentro de uma string.</p>
    
         <hr>    
        <h4>trim()</h4>
        <p>A função <code>trim()</code> remove espaços em branco (ou outros caracteres) do início e do fim de uma string.</p>
    
      </article>
      
      <article class="card" id="saida">
        <h3>Funções numéricas e matemáticas</h3>
        <hr>
        <h4>abs()</h4>
        <p>A função <code>abs()</code> retorna o valor absoluto de um número. Sempre positivo.</p>
      
        <hr>
        <h4>round()</h4>
        <?php
          echo round(5.3)."<br>";
          echo round(7.8);

        
        ?>
     <hr>
        <h4>Ceil()</h4>
        <p>A função <code>ceil()</code> arredonda um número para cima, para o inteiro mais próximo.</p>
      <?php echo ceil(9.1); ?>
        <hr>
        <h4>pow()</h4>
        <p>A função <code>pow()</code> eleva um número a uma potência específica.</p>
        <?php echo pow(2 , 10) ?>
        <hr>
        <h4>sqrt()</h4>
        <p>A função <code>sqrt()</code> retorna a raiz quadrada de um número.</p>
        <?php echo sqrt(81); ?>
        <hr>
        <h4>max() </h4>
        <p>A função <code>max()</code> retorna o maior valor entre os argumentos fornecidos.</p>
   
            <hr>
        <h4>min() </h4>
        <p>A função <code>min()</code> retorna o menor valor entre os argumentos fornecidos.</p>

              <hr>
        <h4>min() </h4>
        <p>A função <code>min()</code> retorna o menor valor entre os argumentos fornecidos.</p>
  
              <hr>
        <h4>rand() </h4>
        <p>A função <code>rand()</code> gera um número aleatório entre dois valores especificados.</p>  
    
              <hr>
        <h4>number_format() </h4>
        <p>A função <code>number_format()</code> formata um número com os milhares agrupados e define o número de casas decimais.</p>  
 


      </article>
      
   
  </section>
<section class="exercicios container">
  <h2>Lista de Exercícios</h2>
  <ol>
    <li>Use <code>echo</code> para exibir o nome de três colegas.</li>
    <li>Mostre a data e hora atuais com <code>date()</code>.</li>
    <li>Crie a data de nascimento de um aluno com <code>mktime()</code>.</li>
    <li>Descubra em que dia da semana caiu o Natal de 2024 usando <code>strtotime()</code>.</li>
    <li>Crie uma string com seu nome em minúsculas e mostre em MAIÚSCULAS com <code>strtoupper()</code>.</li>
    <li>Use <code>substr()</code> para mostrar apenas as 3 primeiras letras do seu nome.</li>
    <li>Substitua a palavra “Java” por “PHP” em uma frase usando <code>str_replace()</code>.</li>
    <li>Gere um número aleatório entre 1 e 100 usando <code>rand()</code>.</li>
    <li>Mostre o valor absoluto de -50 com <code>abs()</code> e depois a raiz quadrada de 81 com <code>sqrt()</code>.</li>
   <li>
  Concatene duas strings em PHP usando o operador <code>.</code>. <br>
  Ex.:
  <pre><code>
$nome = "Maria";
echo "Olá, " . $nome;
  </code></pre>
  → <strong>Olá, Maria</strong>
</li>




  </ol>
</section>
  <footer class="rodape">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
      <small>© <?php date('Y') ?> - Desenvolvimento Web II - 5º - Período • HTML + CSS + PHP</small>
      <small><a href="#topo">Voltar ao topo</a></small>
    </div>
  </footer>

<script>

  const btnTop = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 280) btnTop.classList.add('show');
    else btnTop.classList.remove('show');
  });


  btnTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });

  });
</script>

</body>
</html>
