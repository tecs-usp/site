<!DOCTYPE html>
<html lang="pt">
  
<head>
  <?php require '../../assets/components/head.html'; ?>

  <title>TECS | GT Portal Indígena</title>
</head>

<body>
  <?php require '../../assets/components/navbar.html'; ?>
  
	
	<div class="container text-center">
		<div class="text-thing text-center">
			<h1>GT Portal Indígena</h1>
			<h6 class="after-title">Portal centralizador de páginas de aldeias indígenas</h6>
    </div>
    <br>
		
		<!-- Based on: https://www.w3schools.com/howto/howto_css_modal_images.asp -->
		<img 
			id="modal-trigger"
			class="image-thing2" 
			src="https://tecs.ime.usp.br/assets/img/PI/printPortal.png" 
			alt="Captura de tela da página inicial do portal em desenvolvimento. Em cima, uma barra de navegação levando a páginas de aldeias e à página da Rede Indígena. No resto da página, uma imagem grande de uma casa de reza e imagens pequenas de aldeias individuais (no momento, as imagens são iguais)." 
		>
		<div id="modal-thing" class="modal">
			<span class="close"><i class="fa fa-close"></i></span>
			<img class="modal-content" id="img01" src="https://tecs.ime.usp.br/assets/img/PI/printPortal.png">
			<div id="caption"></div>
		</div> 


		<div class="text-thing text-thing-h2-top">
			<h2>Origem e objetivos</h2>
			<p>
        O Portal Indígena nasceu da parceria entre o Tecs e a <a href="mailto:redeindigena@gmail.com">Rede Indígena da USP</a>, 
        grupo vinculado ao Instituto de Psicologia que oferece apoio social às aldeias em volta 
        da cidade de São Paulo e a indígenas urbanos. Este grupo faz parte do programa 
        <a href="https://www.prg.usp.br/aprender-na-comunidade/">Aprender na Comunidade</a>,
        que almeja prestar serviços relacionados à educação, para além dos muros da universidade.
      </p>
      <p>
        Assim, o projeto do Portal Indígena tem como objetivo desenvolver uma plataforma para 
        centralizar sites de aldeias indígenas de diversas regiões. Com isso, ajudamos a 
        melhorar a situação da visibilidade indígena através da inserção das aldeias no 
        ambiente virtual. O Portal Indígena é, portanto, uma página da web pensada para ter 
        um pouco da cara de todas as aldeias com as quais trabalhamos, permitindo divulgação 
        de conteúdo cultural sobre cada uma delas e, principalmente, levantando discussões 
        sobre questões sociais e territoriais.
      </p>
    </div>
    
		<div class="text-thing text-thing-h2-top">
			<h2>O que fazemos</h2>
			<p>
        Estamos na fase de programação, ou seja, no desenvolvimento web da página já arquitetada 
        num protótipo visual e aprovada pela própria Rede em reunião. 
        Uma vez finalizada esta fase, o Tecs e a Rede devem voltar a alinhar suas expectativas 
        a partir de novas reuniões para que possamos partir para o próximo ciclo. Pretendemos 
        adicionar ferramentas ao Portal, tais quais: calendário de plantio, dicionário 
        Português-Guarani e informações sobre o mercado de artesanato indígena, que são alguns 
        dos aparatos adicionais requisitados pela Rede. 
      </p>
      <p>
        Para além da possibilidade de aprender 
        Web, o projeto do Portal Indígena nos permite ter um contato com essa população 
        historicamente apagada e negligenciada pelo poder público. Esta experiência é bastante 
        enriquecedora em ambas as direções, pois permite-nos a ter uma nova perspectiva acerca 
        da população indígena brasileira, assim como atuar em seu apoio.
			</p>
		</div>
		<img
			class="image-thing1"
			src="https://tecs.ime.usp.br/assets/img/PI/portal_foto.png"
			alt="Integrantes do Tecs e da Rede Indígena em frente à casa de reza do Instituto de Psicologia da USP, que fica ao ar livre. Há 9 pessoas no total, formando uma única fileira."
		>

	</div> <!--text-thing container text-center-->
	
  <?php require '../../assets/components/footer.html'; ?>

  <script src="../../assets/js/modal-popup.js"></script>
</body>
</html>
