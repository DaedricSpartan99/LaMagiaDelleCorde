
var headerheight = 0;
var coverWidth = 0;

function headerHeight(width, perc) {

	var header = document.getElementById("header");
	height = width * perc / 100;
	header.style.height = height + 'px';
	return height;
}

function coverMinWidth(perc) {

	var width = screen.width * perc / 100;
	var cover = document.getElementById('cover');
	cover.style.minWidth = width + 'px';
	return width;
}

(function() {

	//coverWidth = document.all ? document.body.clientWidth : window.innerWidth;
	
	coverWidth = coverMinWidth(92);
	headerheight = headerHeight(coverWidth, 25);

})();