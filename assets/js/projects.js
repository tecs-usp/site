/*What if we hover out before the slide-in is completed? 
	How do we detect whether it is completed? Do we just avoid using CSS transitions? */

const FPS = 60;
var count = 0;
var elems = document.getElementsByClassName("card-thing-animated");

for (var i = 0; i < elems.length; i++) {
	var card = elems[i];

	/* The "this" problem: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setTimeout#The_this_problem */

	/* Requests the next aniamtion frame. Used by boundCallback. 
	 * It is bound to this specific card. */
	card.rAF = (function() {
		requestAnimationFrame(this.boundCallback);
	}).bind(card);

	/* A recursive callback function that calls itself through
		* setTimeout and that requests frames with requestAnimationFrame. 
		* It is bound to this specific card. */
	card.boundCallback = (function() {
		count++;

		if (this.pleaseStop) {
			console.log("stopping by polite request");
			this.sliding_out = false;
			clearTimeout(this.timeoutID);
			return;
		}

		if (!this.sliding_out) { /* initiate slide-out */
			this.sliding_out = true;
			console.log("sliding out");
			this.right = 0;
			this.opacity = 1;

			var description = this.children[1];
			/* FIXME: advance to fully slid-in state */
			description.style.right = this.right+"px";
			description.style.opacity = this.opacity;

		} else { /* continue slide-out */
			console.log("continuing slide-out");
			var description = this.children[1];

			if (this.right < -210 || this.opacity < 0) { /* prevent stuff from going too far */
				this.right = -210;
				this.opacity = 0;
				//this.sliding_out = false; // redundant
				this.pleaseStop = true;
				console.log("ABORT slide-out: too far");
			} else { /* else, keep decreasing ist */
				this.right -= 4.38; // 4.375 px/frame == 210 px / 48 frames
				this.opacity -= 0.02; // 0.02 op/frame == 0.96 op / 48 frames
			}
			description.style.right = this.right+"px"; // decreases until -210px
			description.style.opacity = this.opacity; // decreases until 0
		}

		this.timeoutID = setTimeout(this.rAF, 1000/FPS); /* continue animation loop */
	}).bind(card);

	/* A kill-switch for the boundCallback function. it is bound to this specific card.*/
	card.boundClearCallback = (function() {
		console.log("clearing callback for this =");
		console.log(this);
		console.log("timeoutID: "+this.timeoutID);
		clearTimeout(this.timeoutID);
		//this.pleaseStop = true;
		this.sliding_out = false;
		console.error("callback count: "+count);
	}).bind(card);
	
	card.onmouseover = function(e) {
		if (!this.sliding_out) { /* do nothing if we're in the middle of a slide-out */
			this.pleaseStop = false;
			var description = this.children[1]; // div after the img
			description.style.right = "0";
			description.style.opacity = "1";
		}
	}

	card.onmouseout = function(e) {
		requestAnimationFrame(this.rAF); /* start animation loop */
		setTimeout(this.boundClearCallback, 2000); /* kill-switch for the animation loop */
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


