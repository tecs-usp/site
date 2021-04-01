function changeFont (mode) {
	const currentSize = document.body.style.fontSize || "100%"; // Default should be an empty string.
	const currentSizeNumber = currentSize.replace("%", "");

	let newvalue = 100;
	if (mode == "increase") {
			newvalue = (currentSizeNumber > 140) ? currentSizeNumber : 1.1*currentSizeNumber;
	} else if (mode == "decrease") {
			newvalue = (currentSizeNumber < 60) ? currentSizeNumber : 0.9*currentSizeNumber ;
	} else {
			console.error("changeFont: unknown mode");
	}
	document.body.style.fontSize = newvalue + "%";
}

function toggleContrast () {
	const navbarClasses = document.getElementById("navbar-total").classList;
	console.log(navbarClasses)
	navbarClasses.toggle("secondary-black-bg"); // Add if not present; remove if it is.
	// TODO: change gray text to black
	// TODO: make sure all the text we want to change uses the class above
}