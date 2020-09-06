function httpFallback (image) {
  image.onerror = null; /* clear error*/
  image.src = image.src.replace("https://","http://"); /* fallback to http to hopefully fix the problem */
  return true;
}