<!DOCTYPE html>
<html lang="pt">
  
<head>
  <?php require '../../assets/components/head.html'; ?>

  <title>TECS | GT Vestibulandas</title>
</head>

<body>
  <?php require '../../assets/components/navbar.html'; ?>
	
	<div class="text-thing container">
    <div class="text-center">
			<h1 >GT Vestibulandas</h1>
			<h6 class="after-title">Introdução à Programação <!-- Intentional newline -->
        em Python para vestibulandas</h6>
    </div>
    <br>

    <img
      class="image-thing1"
      src="https://tecs.ime.usp.br/assets/img/Vestibulandas/PIPA/Vestibulandas-no-PIPA.jpg" 
      alt="Pessoa jovem apresenta eslaides para uma plateia no Auditório Imre Simon."
    >

    <div class="text-thing text-thing-h2-top lead">
      <h2>Sobre o GT</h2>
      <p>
        O GT Vestibulandas surgiu no início de 2020 para combater a atual predominância 
        masculina nas áreas de tecnologia. De acordo com 
        <a href="https://jornal.usp.br/?p=136701">uma reportagem de 2018 do Jornal da USP</a>,
        o curso de Bacharelado em Ciência da Computação da Universidade de São Paulo contava 
        com uma turma 70% feminina na década de 70. Em oferecimentos mais atuais, este número 
        decaiu a ponto das mulheres não comporem mais do que 15% dos alunos do curso.
      </p>
      <p>
        Para tentar reverter essa situação, criamos um curso introdutório à programação focado 
        em alunas de ensino médio no período pré vestibular.  Acreditamos que o contato com 
        mulheres inseridas na área de tecnologia, assim como a criação de um espaço seguro para 
        descobrir e experimentar o que é estudar programação e computação podem ser fatores determinantes 
        para que estas alunas futuramente tentem carreira nestas áreas de tecnologia.
      </p>
      <p>
        Além disso, a existência do recorte de gênero é importante para que possamos refletir 
        acerca deste paradigma atual de predominância masculina nas áreas de tecnologia, e 
        incentiva que as alunas compreendam seu papel na luta contra a desigualdade de gênero.
      </p>
      <p>
        O curso foi pensado para um oferecimento presencial, mas, dadas as atuais dificuldades 
        da <a href="https://nacoesunidas.org/tema/coronavirus/">pandemia de COVID-19</a>, 
        uma adaptação online foi criada e será oferecida em janeiro de 2020 por meio da plataforma 
        de cursos de férias da USP. Planejamos que, quando voltarmos à normalidade, possamos oferecer uma versão presencial em conjunto com os cursinhos populares da universidade.
      </p>
    </div>

    <a href="https://jornal.usp.br/?p=136701">
      <img
        class="image-thing1"
        src="https://tecs.ime.usp.br/assets/img/Vestibulandas/artigo-jornal-da-usp.png" 
        alt='Captura de tela do artigo do Jornal da Usp: "Por que as mulheres "desapareceram" dos cursos de computação?'
      >
    </a>

    <div class="text-thing lead text-justify">
      <h2>Prêmio PIPA</h2>
      <p>
        O <a href="https://bcc.ime.usp.br/principal/miscelanea/premioPIPA.html">Prêmio de Incentivo à Participação de Atividades (PIPA) </a>
        é um prêmio que visa valorizar as alunas e os alunos que ”tenham um desempenho destacado 
        no curso e, além disso, se envolvam com outras atividades extra­curriculares e de 
        formação e desempenhem um papel de liderança contribuindo para o ambiente acadêmico universitário”. 
        É um prêmio do Bacharelado em Ciência da Computação, e possui parceria com as empresas Alura e Caelum. 
      </p>
      <p>
        No primeiro semestre de 2020, o Tecs foi premiado com o PIPA na categoria Grupo 
        por conta do projeto Vestibulandas:
      </p>
      <blockquote>
        O prêmio recebido ajudará o grupo a manter alguns dos projetos já citados e também 
        a executar um novo projeto chamado de Vestibulandas, que consiste em aulas 
        (de Introdução à Programação com Python) para as alunas dos cursinhos comunitários 
        na cidade universitária. A bolsa foi patrocinada por ex-alunos do BCC.
      </blockquote>
    </div>

    <img
      class="image-thing1"
      src="https://tecs.ime.usp.br/assets/img/Vestibulandas/PIPA/premio-destaque-sem-exif.jpg" 
      alt='Pessoa jovem no saguão do IME-USP segurando o prêmio PIPA, o qual consiste em uma pessoa empinando pipa — tudo em material laminado — e uma placa com o texto "PIPA Grupo 2020.1 — TECS USP"'
    >

    <div class="text-thing lead text-justify">
      <h2>Progresso do GT</h2>
      <p>
        Atualmente, estamos trabalhando no desenvolvimento do curso, que terá sua primeira 
        versão como um curso de férias do IME-USP, em Janeiro de 2021. Assim, ao longo dos 
        primeiros meses do ano de 2020, organizamos os tópicos que serão abordados ao longo 
        das aulas, de forma a cobrir todos os conteúdos básicos de um curso  introdutório de programação. 
      </p>
      <p>
        Com base nos temas escolhidos, estamos elaborando dois cadernos (notebooks) para auxiliar 
        as vestibulandas ao longo das aulas. Optamos por utilizar o Google Colab, de forma que elas 
        possam encontrar textos e exemplos de códigos Python em um mesmo documento — e até mesmo 
        executar o código diretamente do caderno.
      </p>
      <p>
        O primeiro caderno é teórico, com conteúdos que complementam o material dado em aula, 
        enquanto que o segundo possui vários exercícios para exercitar os temas abordados em classe.
      </p>
    </div>
    
    <!--FIXME: turn into modals (like in pi.html)!-->
    <img
      class="image-thing1"
      src="https://tecs.ime.usp.br/assets/img/Vestibulandas/caderno-teorico.png"
      title="Caderno Teórico"
      alt='Caderno do curso no Google Colaboratory, com explicações e com um índice ao lado.'
    >
    <img
      class="image-thing1"
      src="https://tecs.ime.usp.br/assets/img/Vestibulandas/caderno-exercicios.png"
      title="Caderno de Exercícios"
      alt='Caderno do curso no Google Colaboratory, com exercícios e com uma barra de ferramentas em cima.'
    >
  </div> <!-- .text-thing container -->

  <?php require '../../assets/components/footer.html'; ?>
</body>
</html>