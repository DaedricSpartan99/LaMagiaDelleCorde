function isMobile() {

	return window.innerWidth < window.innerHeight;
}

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
	var inc = 0;

	if (isMobile())
		inc = 2;

	link.style.fontSize = (18 * width / 1291 + inc) + 'pt';
}

function adjustLogo(parent_height, perc) {

	var logo = document.getElementsByClassName('img.logo')[0];

	var rep = logo.clientWidth / logo.clientHeight;
	var height = parent_height * perc / 100;

	logo.style.height = height + 'px';
	logo.style.width = int(height * rep) + 'px';
}

function adjustLinks(height) {

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

function int(value) {

	return value | 0;
}

function adjustAll() {

	var height = adjustHeight('header', 35);

    adjustLinks(height);
}

function adjustMobile() {

	var height = document.body.clientHeight;

	var header_height = adjustHeight('header', 60);

	adjustLinks(int(header_height * 1.05));
	adjustLogo(header_height, 35);

	var container = document.getElementById("container");

	container.style.height = height - header_height + "px";
}

(function () {

	if (isMobile()) {

		adjustMobile();
		
	} else {

		window.onresize = adjustAll;
    	adjustAll();
    }

})(); 