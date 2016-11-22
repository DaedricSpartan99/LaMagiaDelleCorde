
var elements;
var current;

function switchTo(index) {

	if (index < 0 || index >= elements.length)
		return;
	
	elements.item(current).style.display = 'none';
	elements.item(index).style.display = 'block';
	current = index;
}

function next() {

	elements.item(current).style.display = 'none';

	if ((++current) == elements.length)
		current = 0;	// set first

	elements.item(current).style.display = 'block';
}

function previous() {

	elements.item(current).style.display = 'none';

	if ((--current) < 0)
		current = elements.length - 1;	// set last
	
	elements.item(current).style.display = 'block';
}

var timer = 5000; /* milliseconds */

function selfSwitch() { 	// Call this function at the end of the document

	if (elements.length == 0)
		return;

	next();
	setTimeout(selfSwitch, timer);	/* execute this function recursively */
}

function indexLinkOver(index)  {

	return function() {

		switchTo(index);
	}
}

function initSlideshow() {

	elements = document.getElementsByClassName('slidelink');
	var indexElements = document.getElementsByClassName('indexlink');	// it's supposed they have the top-down order

	for (var i = 0; i < indexElements.length; i++) {

		elems.item(i).onmouseover = indexLinkOver(i);
	}

	if (elements.length == 0)
		return;

	elements.item(0).style.display = 'block';
	current = 0;
}