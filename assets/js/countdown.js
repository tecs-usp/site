// Tirado de: https://www.w3schools.com/howto/howto_js_countdown.asp
// Data-alvo
var countDownDate = new Date(2020, 8, 1, 12).getTime(); // mês é 0-indexado

// Executa a função a cada 1000 ms
var x = setInterval( () => { // Quando chamamos setInterval(), o valor retornado identifica o timer que criamos

  // Momento atual (UNIX timestamp)
  var now = new Date().getTime();

  // Diferença entre os momentos
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Exibe o resultado no elemento com id="countdown"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // Se já passou, exibe este texto
  if (distance < 0) {
    clearInterval(x); // Elimina o timer
    document.getElementById("countdown").innerHTML = "Logo... ;)";
  }
}, 1000);