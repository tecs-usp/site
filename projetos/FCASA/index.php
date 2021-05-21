<!DOCTYPE html>
<html lang="pt-BR">
  
<head>
  <?php require '../../assets/components/head.html'; ?>

  <title>TECS | GT FCASA</title>
</head>

<body>
  <?php require '../../assets/components/navbar.html'; ?>
	
	<div class="container text-center">
		<div class="text-thing text-center">
			<h1>GT FCASA</h1>
			<h6 class="after-title">Aulas de introdução à Lógica de <!-- Intentional newline -->
        Programação na Fundação CASA</h6>
    </div>
    <br>
			<!-- NOTE: Imagem mencionada no texto abaixo. -->
      <img
        id="programacao-desplugada"
        class="image-thing1"
				data-toggle="tooltip" 
				data-bs-tooltip="Um exemplo de 'programação desplugada'" 
				data-placement="top"
				src="https://tecs.ime.usp.br/assets/img/FCASA/quadro.jpg" 
				title="Um exemplo de 'programação desplugada'"
				alt="4 pessoas na frente de uma lousa, discutindo como explicar um sistema de coordenadas através de uma metáfora de campo de futebol."
        >

			<div class="text-thing text-thing-h2-top lead">
				<h2>
					O que é a <a href="http://fundacaocasa.sp.gov.br/View.aspx?title=a-funda%C3%A7%C3%A3o&d=10">Fundação CASA</a>?
				</h2>
				<p>
					A Fundação CASA (Centro de Atendimento Socioeducativo ao Adolescente)
					é uma instituição estadual que aplica medidas socioeducativas segundo o Estatuto da Criança 
					e do Adolescente (ECA) e o Sistema Nacional de Atendimento Socioeducativo (SINASE). 
					Mas, mesmo inseridos em medidas de privação de liberdade, esses adolescentes devem ter acesso
					a educação escolar, cultura, esportes e lazer. E é aí que entra o Curso de Introdução à 
					Lógica de Programação que o Tecs oferece na Fundação CASA.
				</p>
			</div>
			<div class="text-thing text-thing-h2-top lead text-justify">
				<h2>
					Sobre o curso...
        </h2>
      </div>
      <div class="text-thing lead text-justify">
				<p>
					Visamos, antes de tudo, a contribuir para o desenvolvimento pessoal e profissional de 
					jovens inseridos em medidas socioeducativas, auxiliando-os no desenvolvimento
					de competências que ampliem suas possibilidades de inserção no mercado de 
					trabalho, geração de renda e participação na sociedade. Sempre permeado por 
					uma abordagem humanista que dialogue com as vivências individuais 
					de cada aluno, o curso não se restringe ao ensino da técnica pela técnica
					e põe em destaque a interação e o desenvolvimento de interesses pessoais, 
					procurando também desmistificar a crença de que Computação e Matemática 
					seriam conteúdos inalcançavelmente complexos.
				</p>
				<p>
					Para contextualizar os vários conceitos de Computação, a proposta do curso é, 
					ao longo das dez aulas e com a ajuda dos professores-monitores, 
					desenvolver um jogo com a ferramenta 
					<a href=http://py.processing.org>Processing (modo Python)</a>,
					que facilita a criação de programas visuais e expressivos. 
					Além disso, ao longo do curso também são promovidas conversas sobre 
					possibilidades de carreira, cursos gratuitos e a influência da Computação na sociedade. 
					As aulas são administradas pelos membros da equipe, que se dividem entre 
					professores e monitores. 
				</p>
			</div>
      <img
          class="image-thing1"
					data-toggle="tooltip" 
					data-bs-tooltip="" 
					data-placement="bottom"
					src="https://tecs.ime.usp.br/assets/img/FCASA/2019-2.jpg" 
					title="Equipe de voluntários em frente de um grande portão em uma unidade da Fundação CASA"
					alt="Equipe de 6 voluntários em frente de uma unidade da Fundação CASA."
      >
			<div class="text-thing text-thing-h2-top lead text-justify">
				<h2>Programação desplugada?</h2>
				<p>
					A imagem na 
					<!--NOTE: Se substituir a imagem, altere este texto também!-->
					<a href="#programacao-desplugada">parte superior da página</a> é um exemplo do que chamamos 'programação desplugada':
					programar (ou ensinar programação) sem usar qualquer dispositivo eletrônico.
					Nessa foto, podemos ver quatro professores discutindo qual a melhor forma de explicar
					o conceito de <a href="https://pt.wikipedia.org/wiki/Sistema_de_coordenadas_cartesiano">sistema de coordenadas</a> 
					para alguém que talvez não tenha toda a bagagem matemática
					necessária para entender a explicação tradicional e abstrata que se encontraria em um livro-texto.
				</p>
				<div>
					A conclusão? Explicar sistemas de coordenadas a partir de uma comparação com um 
          jogo de futebol: 
					<ul>
						<li>o campo é o plano cartesiano;</li> 
						<li>o meio do campo é a origem do sistema de coordenadas;</li>
						<li>os jogadores de um time seguem em direção ao gol do time adversário, que representa o eixo horizontal;</li>
						<li>as arquibancadas ficam na direção vertical;</li>
						<li>os jogadores movem-se principalmente em direção ao gol do time adversário (eixo horizontal),</li>
						<li>mas também desviam e fazem passes em direção à arquibancada (eixo vertical) ou em uma combinação das direções;</li>
          </ul>
				</div>
				<p>
					Pode parecer um desafio, mas devido às restrições de uso de internet e de dispositivos externos,
					às vezes é preciso ser criativo e trazer as explicações ao mundo real, como nesse exemplo.
				</p>
			</div>

		<!-- Exemplos sites/jogos alunos com tipo scratch.js (?) ...? -->
	</div>
	
  <?php require '../../assets/components/footer.html'; ?>

</body>
</html>