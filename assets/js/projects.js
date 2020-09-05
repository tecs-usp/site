const FPS = 60;
var count = 0;
var elems = document.getElementsByClassName("card-thing-animated");

for (var i = 0; i < elems.length; i++) {
	var card = elems[i];
	card.onmouseover = function(e) {
		if (!this.sliding_out) {
			this.pleaseStop = false;
			var description = this.children[1]; // div after the img
			description.style.right = "0";
			description.style.opacity = "1";
		}
	}

	/*What if we hover out before the slide-in is completed? 
	How do we detect whether it is completed? Do we just avoid using CSS transitions? */
	card.onmouseout = function(e) {
		/* The "this" problem: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setTimeout#The_this_problem */
		this_card = this; /* DON'T use this unless you're in this exact scope! */
		//console.log("CHECK: "+ this_card == this); // false ?!

		var callback = function() {
			if (this_card.pleaseStop) {
				console.log("stopping by polite request");
				this.sliding_out = false;
				clearTimeout(this_card.timeoutID);
				return;
			}

			if (!this_card.sliding_out) { /* initiate slide-out */
				if (this_card.pleaseStop) {
					console.error("failed to stop timeout #1");
					return;
				}
				count++;
				console.log("C: "+count);
				this_card.sliding_out = true; // I can't believe this actually works.
				console.log("sliding out");
				this_card.right = 0;
				this_card.opacity = 1;

				var description = this_card.children[1];
				/*advance to fully slid-in state */
				description.style.right = this_card.right+"px";
				description.style.opacity = this_card.opacity;

			} else { /* continue slide-out */
				console.log("continuing slide-out");
				var description = this_card.children[1];

				if (this_card.right < -210 || this_card.opacity < 0) { /* prevent stuff from going too far */
					this_card.right = -210;
					this_card.opacity = 0;
					this_card.sliding_out = false;
					this_card.pleaseStop = true;
					console.log("ABORT slide-out");
				} else { /* else, keep decreasing ist */
					this_card.right -= 1;
					this_card.opacity -= 0.01;
				}
				description.style.right = this_card.right+"px"; // up to "-210px";
				description.style.opacity = this_card.opacity; // up to"0";
			}

			this_card.timeoutID = setTimeout(callback, 1000/FPS); /* continue animation loop */
		}
		var clearCallback = function() {
			console.log("clearing callback for this =");
			console.log(this_card);
			console.log("timeoutID: "+this_card.timeoutID);
			clearTimeout(this_card.timeoutID);
			this_card.pleaseStop = true;
			this_card.sliding_out = false;
		}
		
		/* The "this" problem: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setTimeout#The_this_problem */
		requestAnimationFrame(callback, 1000/FPS); /* start animation loop */
		setTimeout(clearCallback, 2000); /* kill-switch for the animation loop */
	}
}

