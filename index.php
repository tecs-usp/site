<!DOCTYPE html>
<html lang="pt">
  
<head>
  <?php require 'assets/components/head.html'; ?>

  <title>TECS | Página principal</title>
</head>

<body>
  <?php require 'assets/components/navbar.html'; ?>

  <div class="container-fluid">

    <!-- CAROUSEL START -->
    <div class="slide-painel">
      <div class="carousel slide slide-painel" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
        
          <div class="active slide-painel carousel-item" role="option">
            <img class="w-100 d-block" src="https://tecs.ime.usp.br/assets/img/Carousel/print1.png"
              alt="Captura de tela de uma vídeo-chamada com 12 pessoas, cujas imagens formam um retângulo 4 por 3.">
          </div>
          <div class="slide-painel carousel-item" role="option">
            <img class="w-100 d-block" src="https://tecs.ime.usp.br/assets/img/Carousel/2DSC05427.jpg"
              alt="Pequeno público reunido em volta de uma pessoa apresentando o Tecs em uma sala.">
          </div>
          <div class="slide-painel carousel-item" role="option">
            <img class="w-100 d-block" src="https://tecs.ime.usp.br/assets/img/Carousel/encontecs-i-grupo.jpg"
              alt="Em 2 fileiras, integrantes do Tecs (vestindo a camiseta do grupo) e participantes de evento em um auditório.">
          </div>
          <div class="slide-painel carousel-item" role="option">
            <img class="w-100 d-block" src="https://tecs.ime.usp.br/assets/img/Carousel/2DSC05448.jpg"
              alt="2 integrantes do Tecs apresentam o grupo para um pequeno público. Ao lado, um 'banner' do Tecs.">
          </div>
          <div class="slide-painel carousel-item" role="option">
            <img class="w-100 d-block" src="https://tecs.ime.usp.br/assets/img/Carousel/IMG_4733.JPG"
              alt='5 integrantes do Tecs em um auditório brincando com extensões elétricas, em um trocadilho com extensão universitária.'>
          </div>
          <div class="slide-painel carousel-item" role="option">
            <img class="w-100 d-block" src="https://tecs.ime.usp.br/assets/img/Carousel/2017-12-07 00.14.01.jpg"
              alt="Em um auditório, 17 pessoas dispostas em 3 fileiras. No fundo, uma apresentação de eslaides.">
          </div>
        </div>
        
        <!-- Carousel controls -->
        <div>
          <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!--.carousel-inner-->
      </div> <!--.carousel.slide.slide-painel-->
    </div> <!--.slide-painel-->
    <!-- CAROUSEL END -->

    <!-- RELEVÂNCIA --> 
    <div class="row pt-5 d-flex justify-content-center align-items-center">
      <div class="col-11 col-md-5 text-center">
        <h2 class="font-weight-bold">Um grupo com relevância</h2>
        <p class="gray secondary-font mt-4">Mesmo jovem, o Tecs já desenvolveu projetos que impactaram as pessoas
          envolvidas. Alguns destes nossos projetos saíram na mídia. <b>Confira!</b></p>
      </div>
    </div>
    <div class="row artigos-tecs my-2 my-md-0">
      <div class="col-9 col-md-2 artigos-tecs-item">
        <a class="w-80" href="https://revistapesquisa.fapesp.br/2019/11/15/algoritmos-parciais/" target="_blank"
          rel="noopener">
          <img class="w-100"
            src="https://revistapesquisa.fapesp.br/wp-content/themes/revista-pesquisa-fapesp-tema/img/logo_revista.jpg"
            alt="Logo com o texto 'Pesquisa Fapesp'."
            onerror="httpFallback(this)">
          Revista Pesquisa FAPESP
        </a>
      </div>
      <div class="col-9 col-md-2 artigos-tecs-item my-2 my-md-0">
        <a class="w-70"
          href="https://jornal.usp.br/universidade/tecs-o-grupo-da-usp-que-utiliza-a-tecnologia-para-causas-sociais/"
          target="_blank" rel="noopener">
          <img class="w-100" src="https://www.scs.usp.br/identidadevisual/wp-content/uploads/2013/08/usp-logo-png.png"
            alt="Logo com o texto 'Usp' em caixa alta e alguma sobreposição entre as letras." onerror="httpFallback(this)">
          Jornal da USP
        </a>
      </div>
      <div class="col-9 col-md-2 artigos-tecs-item my-2 my-md-0">
        <a class="w-60"
          href="https://www.fundacaocasa.sp.gov.br/View.aspx?title=casas-osasco-i-e-ii-têm-curso-de-programação-da-usp&amp;d=9282"
          target="_blank" rel="noopener">
          <img class="w-100" src="https://www.fundacaocasa.sp.gov.br/images/logo-site.png"
            alt="Logo da Fundação Casa: 'Casa' com a letra C aludindo a uma casa."
            onerror="httpFallback(this)">
          Fundação CASA
        </a>
      </div>
      <div class="col-9 col-md-2 artigos-tecs-item my-5 my-md-0">
        <a class="w-30" href="https://www.ime.usp.br/media/acontece/acontecenoime_edicao_47.pdf"
          target="_blank" rel="noopener">
          <img class="w-100" src="https://ccsl.ime.usp.br/files/unmanaged/logos/logoIME+Texto.png"
            alt="Brasão do Ime-Usp (em preto e branco) no qual se identifica Arquimedes."
            onerror="httpFallback(this)">
          Revista Acontece no IME
        </a>
      </div>
    </div>
  </div> <!-- .container-fluid -->

  <?php require 'assets/components/footer2.html'; ?>
</body>
</html>
