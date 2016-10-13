
var elements;
var current;

function switch(index) {

	if (index < 0 || index >= elements.length)
		return;
	
	elements[current].style.display = 'none';
	elements[index].style.display = 'block';
	current = index;
}

function next() {

	elements[current].style.display = 'none';

	if ((++current) == elements.length)
		current = 0;	// set first

	elements[current].style.display = 'block';
}

function previous() {

	elements[current].style.display = 'none';

	if ((--current) < 0)
		current = elements.length - 1;	// set last
	
	elements[current].style.display = 'block';
}

var timer = 5000; /* milliseconds */

function selfSwitch() { 	// Call this function at the end of the document

	next();
	setTimeout(selfSwitch, timer);	/* execute this function recursively */
}

(function() {

	elements = documents.getElementsByClassName('eventlink');
	elements[0].style.display = 'block';
	current = 0;
})();