<!DOCTYPE html>
<html lang="pt">
  
<head>
  <?php require '../../assets/components/head.html'; ?>

  <title>TECS | GT Disciplinas</title>
</head>

<body>
  <?php require '../../assets/components/navbar.html'; ?>

  <!-- (Hopefully) Enable Popper tooltips -->
  <script>
    function tryActivateTooltips(tries=3) {
      if (typeof Popper !== 'undefined') $('[data-toggle="tooltip"]').tooltip();
      else if (tries > 0) setTimeout( () => {tryActivateTooltips(tries=tries-1);}, 3000);
    }
    tryActivateTooltips();
  </script>
  
	<div class="container text-center">
		<div class="text-thing text-center">
			<h1>GT Disciplinas</h1>
			<h6 class="after-title">Direito & Software <!-- Intentional newline -->
        Implicações Sociais da Computação</h6>
    </div>
    <br>

    <div class="row d-inline-block">
      <img
        class="image-thing-double"
        data-toggle="tooltip" 
        data-bs-tooltip="Ícone do grupo para a organização da disciplina MAC0458" 
        data-placement="top"
        src="https://tecs.ime.usp.br/assets/img/Logos/DISCIPLINAS-DS.png" 
        title="Ícone do grupo para a organização da disciplina MAC0458"
        alt="Ícone com 'D & S — MAC0458' escrito sobre um fundo claro."
      >
      <img
        class="image-thing-double"
        data-toggle="tooltip" 
        data-bs-tooltip="Ícone do grupo para a organização da disciplina MAC0485" 
        data-placement="top"
        src="https://tecs.ime.usp.br/assets/img/Logos/DISCIPLINAS-ISC.png" 
        title="Ícone do grupo para a organização da disciplina MAC0485"
        alt="Ícone com 'ISC — MAC0485' escrito sobre um fundo escuro."
      >
    </div>

    <div class="text-thing text-thing-h2-top">
      <h2>As duas disciplinas</h2>
      <p>
        Somos responsáveis pela execução de duas disciplinas no 
        <a href="https://ime.usp.br">Instituto de Matemática e Estatística</a> (IME-USP): Direito e Software (MAC0458) e 
        Implicações Sociais da Computação (MAC0485). 
        Essas são disciplinas que têm como objetivo oferecer aos seus estudantes um posicionamento 
        crítico e responsável frente às tecnologias digitais, formando futuros profissionais mais conscientes 
        e engajados com temas sensíveis da computação e comprometidos com sua abordagem ética, 
        e é justamente a ética o pilar em que se apoiam essas disciplinas.
      </p>
    </div>
    <div class="text-thing text-thing-h2-top">
      <h2>Implicações Sociais da Computação</h2>
      <p>
        Objetivo: apresentar questões sociais, profissionais, legais,
        éticas, ambientais, políticas e humanísticas relacionadas à ciência da computação; 
        possibilitar a compreensão do impacto da computação e suas tecnologias na sociedade 
        no que concerne ao atendimento e à antecipação estratégica das necessidades da sociedade.
      </p>
      <p>
        São vários os temas abordados nas discussões e leituras propostas pela disciplina, 
        como, por exemplo: coleta de dados e privacidade, vieses algorítmicos, tecnologia e política
        autoria e propriedade intelectual, ética profissional, …
      </p>
      <p>Esta disciplina é oferecida no primeiro semestre de cada ano. Sua ementa completa pode ser encontrada no sistema USP	
        <a href="https://uspdigital.usp.br/jupiterweb/obterDisciplina?sgldis=MAC0485">Júpiter web</a>.
      </p>
    </div>
    <img
      class="image-thing1"
      src="https://tecs.ime.usp.br/assets/img/Disciplinas/IMG_20191029_133103.jpg"
      alt="Professor voltado para o canto esquerdo da sala, de frente para estudantes que fazem anotações em cadernos e laptops. Ao fundo, uma larga lousa de giz com esquemas explicativos."
    >

    <div class="text-thing text-thing-h2-top">
      <h2>Direito e Software</h2>
      <p>
        Objetivo: apresentar um panorama das diversas intersecções entre a área do Direito
        e da Tecnologia, cobrindo desde governo aberto até discriminação algorítmica, passando
        por leis que regulamentam a área, como o Marco Civil, a GDPR e a LGPD.
      </p>
      <p>Esta disciplina é oferecida no segundo semestre de cada ano. Sua ementa completa pode ser encontrada no sistema USP	
        <a href="https://uspdigital.usp.br/jupiterweb/obterDisciplina?sgldis=MAC0458">Júpiter web</a>.
      </p>
    </div>
    <img
      class="image-thing1"
      src="https://tecs.ime.usp.br/assets/img/Disciplinas/2019-04-23_Rafael Zanatta(8).jpg"
      style="filter:brightness(110%);"
      alt="Palestra em sala de aula do Ime-Usp. Há várias fileiras de carteiras, todas ocupadas, e o Sol brilha por uma janela."
    >
	</div> <!--container text-center-->
	
  <?php require '../../assets/components/footer.html'; ?>

</body>
</html>