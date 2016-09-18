function adjustHeight(elem, perc) {

	var div = document.getElementById(elem);
	var width = div.clientWidth;
	div.style.height = width * perc / 100 + 'px';
	return parseInt(div.style.height);
}

function locate(elem, leftperc, topperc, parent_height) {

	var div = document.getElementById(elem);
	div.style.left = leftperc + '%';
	div.style.top = parent_height * topperc / 100 + 'px';
}

function adjustLinkFont(elem, parent) {

	var link = document.getElementById(elem);
	var width = document.getElementById(parent).clientWidth;
	link.style.fontSize = 18 * width / 1291 + 'pt';
}

function adjustAll() {

	var height = adjustHeight('header', 35);

    locate('link1', 25, 20, height);
    locate('link2', 53, 35, height);
    locate('link3', 35, 48, height);
    locate('link4', 68, 63, height);
    locate('link5', 43, 71, height);

    var i;
    for (i = 1; i <= 5; i++) {

    	adjustLinkFont('link' + i, 'header');
    }
}

(function () {

	window.onresize = adjustAll;
    adjustAll();

})(); 