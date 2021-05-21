<!DOCTYPE html>
<html lang="pt-BR">
  
<head>
  <?php require '../assets/components/head.html'; ?>

  <title>TECS | Projetos</title>
  <link rel="stylesheet" href="../assets/css/Projects.css">
</head>

<body>
  <?php require '../assets/components/navbar.html'; ?>
	

    <div class="container text-thing container-projetos">
      <div class="todos-os-gts row">

<?php

# Arrays: https://www.php.net/manual/en/language.types.array.php
$card_info = array(
  array(
    "card_title" => "Vestibulandas",
    "img_src" => "Vestibulandas/PIPA/Vestibulandas-no-PIPA.jpg",
    "img_alt" => "Pessoa jovem apresenta eslaides para uma plateia no Auditório Imre Simon.",
    "inicio" => 2019,
    "description" => "Aulas de programação em Python para alunas que prestarão o vestibular.",
    "page_link" => "Vestibulandas"
  ),
  array(
    "card_title" => "Disciplinas",
    "img_src" => "Disciplinas/IMG_20191029_133103.jpg",
    "img_alt" => "Professor voltado para o canto esquerdo da sala, de frente para estudantes que fazem anotações em cadernos e laptops. Ao fundo, uma larga lousa de giz com esquemas explicativos.",
    "inicio" => 2019,
    "description" => "Disciplinas do IME-USP coordenada pelo Tecs que promovem discussões e reflexões acerca do impacto da Computação na sociedade.",
    "page_link" => "Disciplinas"
  ),
  array(
    "card_title" => "Fundação CASA",
    "img_src" => "Promos/FCasaCoelho.png",
    "img_alt" => "8 pessoas na frente de uma unidade da Fundação CASA. Na 1ª fileira, todas vestem aventais.",
    "inicio" => 2018,
    "description" => "Curso de introdução à programação para jovens inseridos em medidas socioeducativas na Fundação CASA.",
    "page_link" => "FCASA"
  ),
  array(
    "card_title" => "Portal Indígena",
    "img_src" => "PI/portal_foto.png",
    "img_alt" => "9 pessoas (uma com camiseta do Tecs), em fileira única, em frente à casa de reza do Instituto de Psicologia da Usp, ao ar livre.",
    "inicio" => 2019,
    "description" => "Desenvolvimento de um portal centralizador de páginas web de aldeias indígenas.",
    "page_link" => "PI"
  ),
);

# Só para GTs ativos, mas daria para colocar um if.
foreach ($card_info as $i => $item) {
echo <<<END
<div class="tab-thing col-12">
  <img 
    class="d-block" 
    src="https://tecs.ime.usp.br/assets/img/$item[img_src]"
    alt="$item[img_alt]"
  >
  <span class="tab-thing-entire">
    <div class="tab-thing-tab">
      <i class="fa fa-angle-left"></i>
    </div>
    <div class="tab-thing-contents">
      <div class="row col-9 offset-1">
        <h4><a href="../projetos/$item[page_link]">$item[card_title]</a></h4>
      </div>
      <div class="row col-4 offset-8"> <!-- FIXME: maybe adjust to lg: 5,7 xl: 4,8 ?-->
        <h5>Início: 2019</h5>
        <h5>Status: <span class="h5-green">ativo</span></h5>
      </div>
      <div class="col-9 col-sm-6 offset-1">
        <p class="card-text">$item[description]</p>
      </div>
      <div class="row col-4 offset-8 tab-thing-buttondiv">
        <a href="../projetos/$item[page_link]"><button>Saiba mais</button></a>
      </div>
      <!-- Anchor elements inside buttons or vice-versa are evil, but oh well.-->
    </div>
  </span>
</div>
END; # (END heredoc) This line (with the identifier) must not be indented.
}
?>
      
    </div> <!-- .todos-os-gts.row -->
  </div> <!-- .container.text-thing -->

  <?php require '../assets/components/footer.html'; ?>
</body>
</html>