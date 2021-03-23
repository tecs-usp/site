<!DOCTYPE html>
<html lang="pt">
  
<head>
  <?php require '../assets/components/head.html'; ?>

  <title>TECS | Contato</title>
  <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">

  <!-- Load Bootstrap Studio form -->
  <script src="../assets/js/smart-forms.min.js"></script>
</head>

<body>
  <?php require '../assets/components/navbar.html'; ?>

  <!-- (Hopefully) Enable Popper tooltips -->
  <script>
    function tryActivateTooltips(tries=3) {
      if (typeof Popper !== 'undefined') $('[data-toggle="tooltip"]').tooltip();
      else if (tries > 0) setTimeout( () => {tryActivateTooltips(tries=tries-1);}, 3000);
    }
    tryActivateTooltips();
  </script>

  <div class="text-thing container">
		<div class="text-thing text-center">
			<h2>Contato</h2>
      <p>Se quiser conversar com a gente ou só acompanhar mais de perto:</p>
      <ul>
        <li><a href="https://t.me/tecsusp">Telegram</a> (principal canal de atualizações)</li>
        <li><a href="mailto:tecs@ime.usp.br">Email</a></li>
        <li><a href="https://pt-br.facebook.com/tecs.usp/">Página do Facebook</a></li>
      </ul>
    </div>
    <div class="text-thing">
      <h2>Reuniões do grupo</h2>
      <!--
      <h6 class="card-subtitle mb-2">Durante a quarentena</h6>
      <p>
        Enquanto não podemos ir à cidade universitária, faremos nossas reuniões numa sala 
        virtual do Google Meets. Já que nossas reuniões são abertas, fica o convite para 
        participar toda <em>terça-feira entre 12h e 13h</em> (link postado no grupo geral do Telegram).
      </p>
      -->
      <p>
        Se quiser nos visitar depois da quarentena, nossos encontros ocorrem no prédio do 
        Centro de Competência em Software Livre (CCSL) do Instituto de Matemática e Estatística da USP.
        O endereço é: Rua do Matão, 1010 - Cidade Universitária, São Paulo - SP, 05508-090, Brasil.
      </p>
    </div>

    <div class="contact-clean col-12">
      <form class="text-center" data-bss-recipient="1987d4d9cf5dd78f8ec3fbd1ffba4be8" data-bss-subject="Contato via site">
        <h2 class="text-center">Mensagens / críticas / sugestões</h2>
  
        <div class="form-group order-1">
          <input 
            class="form-control" 
            type="text" 
            name="Nome" 
            placeholder="Nome" 
            required="" 
            minlength="2" 
            inputmode="latin-name" 
            autofocus=""
          >
        </div>
        <div class="form-group order-2">
          <input
           class="form-control" 
           type="text" 
           data-toggle="tooltip" 
           data-bs-tooltip="" 
           name="Email" 
           placeholder="Email (opcional)" 
           title="Caso queira receber uma resposta nossa." 
           minlength="3" 
           inputmode="email">
        </div>
        <div class="form-group order-3">
          <textarea
           class="form-control" 
           type="text" 
           name="Mensagem" 
           placeholder="Escreva aqui sua mensagem.  :)"
           required=""
          >
          </textarea>
        </div>
        
        <button class="btn btn-primary order-4" type="submit">Enviar</button>
        <div class="form-row text-center justify-content-center align-items-center">
          <img class= "logo-preto" src="https://tecs.ime.usp.br/assets/img/Logos/Tecs%20A3%20preto.png">
        </div>
      </form>
    </div>
  </div>

<?php require '../assets/components/footer.html'; ?>

</body>
</html>