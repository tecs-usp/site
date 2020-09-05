var timeoutID;
var elems = document.getElementsByClassName("card-thing-animated");

for (var i = 0; i < elems.length; i++) {
	var card = elems[i];
	card.onmouseover = function(e) {
		console.log(this);
		var description = this.children[1]; // div after the img
		description.style.right = "0";
		description.style.opacity = "1";
	}
	card.onmouseout = function(e) {
		var description = this.children[1];
		description.style.right = "-210px";
		description.style.opacity = "0";
	}
}

