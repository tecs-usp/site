/*What if we hover out before the slide-in is completed? 
	How do we detect whether it is completed? Do we just avoid using CSS transitions? */

const FPS = 60;
var count = 0;
var elems = document.getElementsByClassName("card-thing-animated");

for (var i = 0; i < elems.length; i++) {
	var card = elems[i];

	card.onmouseover = function(e) {
		console.log("ON"+count++);
	}

	card.onmouseout = function(e) {
		console.log("OUT"+count++);
	}
}

/*card1 = elems[0];
card2 = elems[1];
console.log(card1.boundCallback);
console.log(card2.boundCallback);
console.log(card1.boundCallback == card1.boundCallback);
console.log(card1.boundCallback != card2.boundCallback);

var testbla;
card1.blabla = function() {
	testbla = this;
	console.log("idk whatll happen");
	console.log(card1 == this);
	console.log(testbla == this);
	console.log(card1 == testbla);
}
card1.blabla();
console.log(testbla == card1);*/


