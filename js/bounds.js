function adjustHeight(elem, perc) {

	var div = document.getElementById(elem);
	var width = div.clientWidth;
	div.height = width * perc / 100 + "px";
}

(function () {

    adjustHeight('header', 25);

})(); 