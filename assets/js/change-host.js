/*Purpose: redirect from 'www.ime.usp.br/~tecs/...' to 'tecs.ime.usp.br/...' */
if (window.location.host == "www.ime.usp.br") {
	window.location = "https://tecs.ime.usp.br" + window.location.pathname.replace("/~tecs", "");
}