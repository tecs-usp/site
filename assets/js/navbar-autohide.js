/**
 * Quando o usuário rola para baixo, esconde a navbar. Quando rola para cima, mostra a navbar.
 * FIXME: https://developer.mozilla.org/docs/Mozilla/Performance/ScrollLinkedEffects
 * Basically: this is really janky.
 * */

var prevScrollpos = window.pageYOffset; // inicializa a posição de rolagem
var navbar = document.getElementById("navbar-total");
var threshold = 90; // valor temporário, mas provavelmente ok

/* Descobre até onde devemos 'segurar' a navbar.*/
window.onload = function() {
  threshold = navbar.offsetHeight; // valor errado antes de carregar a página, então precisa ser aqui
  
  /* Quando o usuário rola para baixo, abaixa gradualmente a navbar. 
   * Quando rola para cima, mostra a navbar. */
  window.onscroll = function() {
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
      $('.collapse').collapse("hide"); // for mobile devices, collapse menu on scroll down
    }
    prevScrollpos = currentScrollPos;
  };
}

Array.prototype.map.call(document.getElementsByClassName("nav-link"), (item) => (item.innerHTML == "Contato") && (Math.random() > 0.99) ? (item.innerHTML = "ContaTecs") : "");