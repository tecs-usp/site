/**
 * Quando o usuário rola para baixo, esconde a navbar. Quando rola para cima, mostra a navbar.
 * FIXME: https://developer.mozilla.org/docs/Mozilla/Performance/ScrollLinkedEffects
 * Basically: this is really janky.
 * */


/* Finds out how much we should 'pull' the navbar.
NOTE: window.onload only allows a single handler! */
window.addEventListener('load', (e) => {
  var prevScrollpos = window.pageYOffset; // inicializa a posição de rolagem
  var navbar = document.getElementById("navbar-total");
  var threshold = navbar.offsetHeight;
  
  /* Quando o usuário rola para baixo, abaixa gradualmente a navbar. 
   * Quando rola para cima, mostra a navbar. */
  window.addEventListener('scroll', (e) => {
    /* compara as posições de rolagem anterior e atual*/
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      navbar.style.top = "0";
    } else {
      /*if (currentScrollPos < threshold) {
        document.getElementById("navbar").style.top = "-7%"; // joga um pouco pra cima a navbar
        //document.getElementById() diminui logo tecs
      } else {
        document.getElementById("navbar").style.top = "-21%"; // joga completamente pra cima da tela a navbar
      }*/
      navbar.style.top = (-Math.min(threshold, window.scrollY) ) + 'px'; // esconde progressivamente a navbar
      
      // for mobile devices, collapse menu on scroll down
      $('#navcol-1').collapse('hide');
      $('#tecs-logo,#navbar-icones-total').collapse('show'); // elements that should be shown by default must be shown
    }
    prevScrollpos = currentScrollPos;
  });
});

Array.prototype.map.call(document.getElementsByClassName("nav-link"), (item) => (item.innerHTML == "Contato") && (Math.random() > 0.99) ? (item.innerHTML = "ContaTecs") : "");