
function slideShowOver() {

	var elems = document.getElementsByClassName('arrow');

	var i;

	for (i = 0; i < elems.length; i++) {
		elems[i].style.visibility = "visible";
	}
}

function slideShowExit() {

	var elems = document.getElementsByClassName('arrow');

	var i;

	for (i = 0; i < elems.length; i++) {
		elems[i].style.visibility = "hidden";
	}
}

(function() {

})();