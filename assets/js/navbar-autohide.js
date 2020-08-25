/*Quando o usuário rola para baixo, esconda a navbar. Quando rola para cima, msotre a navbar.*/
var prevScrollpos = window.pageYOffset; // inicializa a posição de rolagem
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset; // compara as posições de roalgem anterior e atual
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-21%"; // joga pra cima da tela a navbar
  }
  prevScrollpos = currentScrollPos;
};