// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("modal-trigger");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var navbar = document.getElementById("navbar-total");
var body = document.getElementsByTagName("body");

img.onclick = function(){
	modal.style.display = "block";
	navbar.style.display = "none"; /* hide navbar; there is still the pseudo-background */
  modalImg.src = this.src;
	captionText.innerHTML = this.alt;

	/* prevent scrolling; source: https://stackoverflow.com/a/12090055/10736421 */
	$('body,html').addClass('stop-scrolling'); /* pure JS that works with IE9 is kinda janky */
	$('body,html').bind('touchmove', function(e){e.preventDefault()}) /* solution for mobile */
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Function to close the modal
var closeModal = function() {
	modal.style.display = "none";
	navbar.style.display = "flex";

	/* re-enable scrolling */
	$('body,html').removeClass('stop-scrolling'); /* pure JS that works with IE9 is kinda janky */
	$('body,html').unbind('touchmove'); /* solution for mobile */
};

// When the user clicks on <span> (x), close the modal
span.onclick = closeModal;
modal.onclick = closeModal;