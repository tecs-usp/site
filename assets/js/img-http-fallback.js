/** FIXME: https://developer.mozilla.org/en-US/docs/Web/API/URL_API  
 * NO IE SUPPORT T-T
*/

/** In case an image fails to load with https, tries to load it via bare HTTP.*/
function httpFallback (image) {
  console.error("img-http-fallback.js: An image failed to load; attempting fallback" + (image.errorCount ? " (again)" : "") + ".");
  console.error(image);

  if (!image.errorCount) {
    image.errorCount = 1;
    image.src = image.src.replace("https://","http://"); /* fallback to http to hopefully fix the problem */
    image.setAttribute("onerror", "httpFallback(this);");
    image.setAttribute("onload", "this.removeAttribute('style');this.removeAttribute('hidden');");
  } else {
    image.errorCount = 2;

    /* extracts filename; resulting regex: /[^/]+\.png|[^/]+\.jpg/ */
    var r1 = new RegExp("[^/]+\\.png");
    var r2 = new RegExp("[^/]+\\.jpg");
    var regex = new RegExp(r1.source + "|"+ r2.source); /* no constructor needed here */
    var matches = image.src.match(regex);

    /* check if something went wrong */
    if (!matches || matches.length != 1) {
      console.error("img-http-fallback.js: error while parsing src in the img element");
      console.error(image);
      return;
    }

    image.src = "https://tecs.ime.usp.br/assets/fallback/" + matches[0]
    image.removeAttribute("style");
    image.removeAttribute("hidden");
    image.setAttribute("onload", "this.removeAttribute('style');this.removeAttribute('hidden');");
    image.onerror = null; /* clear error*/
  }
  return true;
}