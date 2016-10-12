
var namelist = new Array();
var current = -1;

function switch(name) {
	

}

function next() {


}

function previous() {


}

var timer = 5000; /* milliseconds */
var timerManager = null;

function enableSelfSwitch() {

	if (timerManager)
		return;

	timerManager = setInterval(next, timer);
}

function disableSelfSwitch() {

	if (!timerManager)
		return;

	clearInterval(timerManager);
	timerManager = null;
}