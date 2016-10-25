
var headerheight = 0;

function headerHeight(perc) {

	var header = document.getElementById("header");
	var width = header.clientWidth;
	height = width * perc / 100;
	header.style.height = height + 'px';
	return height;
}

(function() {

	headerheight = headerHeight(25);

})();