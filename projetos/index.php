<!DOCTYPE html>
<html lang="pt">
  
<head>
  <?php require '../assets/components/head.html'; ?>

  <title>TECS | Projetos</title>
  <link rel="stylesheet" href="../assets/css/Projects.css">
</head>

<body>
  <?php require '../assets/components/navbar.html'; ?>
	
	<div class="container text-thing">
    <div class="todos-os-gts row">
      <div class="tab-thing col-12">
        <img 
          class="w-100 d-block" 
          src="https://tecs.ime.usp.br/assets/img/Vestibulandas/PIPA/Vestibulandas-no-PIPA.jpg"
          alt="Pessoa jovem apresenta eslaides para uma plateia no Auditório Imre Simon."
        >
        <span class="tab-thing-entire">
          <div class="tab-thing-tab">
            <i class="fa fa-angle-left"></i>
          </div>
          <div class="tab-thing-contents">
            <h4 class="row col-6 offset-1"><a href="../projetos/Vestibulandas">Vestibulandas</a></h4>
            <h5>Início: 2019</h5>
            <h5>Status: <span class="h5-green">ativo</span></h5>
            <p class="card-text col-12 col-sm-6">Aulas de programação em Python para alunas que prestarão o vestibular.</p>
            <a href="../projetos/Vestibulandas"><button>Saiba mais</button></a>
            <!-- Anchor elements inside buttons or vice-versa are evil, but oh well.-->
          </div>
        </span>
      </div>
      
      <div class="tab-thing col-12">
        <img 
          class="w-100 d-block" 
          src="https://tecs.ime.usp.br/assets/img/Disciplinas/IMG_20191029_133103.jpg"
          alt="Professor voltado para o canto esquerdo da sala, de frente para estudantes que fazem anotações em cadernos e laptops. Ao fundo, uma larga lousa de giz com esquemas explicativos."
        >
        <span class="tab-thing-entire">
          <div class="tab-thing-tab">
            <i class="fa fa-angle-left"></i>
          </div>
          <div class="tab-thing-contents">
            <!-- the title needs to occupy more horizontal space for everything to display correctly on mobile -->
            <h4 class="row col-9 col-sm-6 offset-1"><a href="../projetos/Disciplinas">Disciplinas</a></h4>
            <h5>Início: 2020</h5>
            <h5>Status: <span class="h5-green">ativo</span></h5>
            <p class="card-text col-12 col-sm-6">Disciplinas do IME-USP coordenada pelo Tecs que promovem discussões e reflexões acerca do impacto da Computação na sociedade.</p>
            <a href="../projetos/Disciplinas"><button>Saiba mais</button></a>
            <!-- Anchor elements inside buttons or vice-versa are bad, but oh well.-->
          </div>
        </span>
      </div>

      <div class="tab-thing col-12">
        <img 
            class="w-100 d-block" 
            src="https://tecs.ime.usp.br/assets/img/Promos/FCasaCoelho.png"
            alt="8 pessoas na frente de uma unidade da Fundação CASA. Na 1ª fileira, todas vestem aventais.">
        <span class="tab-thing-entire">
          <div class="tab-thing-tab">
            <i class="fa fa-angle-left"></i>
          </div>
          <div class="tab-thing-contents">
            <h4 class="row col-6 offset-1"><a href="../projetos/FCASA">Fundação CASA</a></h4>
            <h5>Início: 2018</h5>
            <h5>Status: <span class="h5-green">ativo</span></h5>
            <p class="card-text col-12 col-sm-6">Curso de introdução à programação para jovens inseridos em medidas socioeducativas na Fundação CASA.</p>
            <a href="../projetos/FCASA"><button>Saiba mais</button></a>
          </div>
        </span>
      </div>

      <div class="tab-thing col-12">
        <img 
          class="w-100 d-block" 
          src="https://tecs.ime.usp.br/assets/img/PI/portal_foto.png"
          alt="9 pessoas (uma com camiseta do Tecs), em fileira única, em frente à casa de reza do Instituto de Psicologia da Usp, ao ar livre."
        >
        <span class="tab-thing-entire">
          <div class="tab-thing-tab">
            <i class="fa fa-angle-left"></i>
          </div>
          <div class="tab-thing-contents">
            <h4 class="row col-6 offset-1"><a href="../projetos/PI">Portal Indígena</a></h4>
            <h5>Início: 2019</h5>
            <h5>Status: <span class="h5-green">ativo</span></h5>
            <p class="card-text col-12 col-sm-6">Desenvolvimento de um portal centralizador de páginas web de aldeias indígenas.</p>
            <a href="../projetos/PI"><button>Saiba mais</button></a>
          </div>
        </span>
      </div>
    </div> <!-- .todos-os-gts.row -->
  </div> <!-- .container.text-thing -->

  <?php require '../assets/components/footer.html'; ?>
</body>
</html>