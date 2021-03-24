/**Loads jQuery, Popper and Bootstrap. 
 * 
 * FIXME: https://developer.mozilla.org/en-US/docs/Web/API/URL_API  
 * NO IE SUPPORT T-T
*/

var scriptList = [
	{
		src: "https://code.jquery.com/jquery-3.5.1.slim.min.js", 
		integrity: "sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	}, 
	{
		src: "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js",
		integrity: "sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
	},
	{
		src: "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", 
		integrity: "sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
	},
]

/** Makes sure scripts are loaded in the correct order. */
function loadScript (i) {
		var newScript = document.createElement('script');
		newScript.setAttribute("src", scriptList[i].src);
		newScript.setAttribute("integrity", scriptList[i].integrity);
		newScript.setAttribute("onerror", "scriptFallback(this);");
		newScript.setAttribute("crossorigin", "anonymous");

		/* Next script is loaded only if this one succeeds. */
		if (i+1 < scriptList.length) {
			newScript.setAttribute("onload", `loadScript(${i+1})`); // second argument is a string
		}
		document.head.appendChild(newScript);
}

/** In case the integrity check fails, falls back to an archived copy of the script. */
function scriptFallback (failedScript) {
	/* create new element pointing to the fallback resource */
	var newScript = document.createElement('script');
	var regex = "[^/]+\\.js"; /* extracts filename */
	var matches = failedScript.src.match(regex);
	if (!matches || matches.length != 1) {
		console.error("script-fallback.js: error while parsing src in the old script element");
		console.error(failedScript);
		return;
	}
	newScript.setAttribute("src", "https://tecs.ime.usp.br/assets/fallback/" + matches[0]);
	newScript.removeAttribute("async"); // might not do anything
	newScript.setAttribute("crossorigin", "anonymous"); /* integrity check won't work without this */

	/* preserve integrity and onload */
	if (failedScript.integrity) {
		newScript.integrity = failedScript.integrity;
	}
	if (failedScript.onload) {
		newScript.onload = failedScript.onload; // right hand side is a function
	}
	console.log("script-fallback.js: trying to load fallback script: " + newScript.src);

	//document.head.appendChild(newScript);
	//failedScript.parentNode.insertBefore(newScript, failedScript); /* insert before the failed script */
	failedScript.insertAdjacentElement("afterend", newScript);
}

/* Load the first script. */
loadScript(0);