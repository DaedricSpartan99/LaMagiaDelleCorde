
function createLink(id, page, urlimage, date, title) {

	var a = document.createElement('a');
	a.href = page;
	a.id = id;
	a.className = 'eventlink';
	var inner = '<img class=\"eventimg\" src=\"' + urlimage + '\" alt=\"Foto evento\"/>';
	inner += '<h2 class=\"eventdate\">' + date + '</h2>';
	inner += '<h3 class=\"eventtitle\">' + title + '</h3>';
	a.innerHTML = inner;
	return a;
}

function getEventImage(config) {

	var obj = JSON.parse($.getJSON(config));

	return obj.img;
}

function getEventDate(config) {

	var obj = JSON.parse($.getJSON(config));

	return obj.date;
}

function customEvents(dirlist) {

	var dir;
	for (dir in dirlist) {

		var config = 'eventi/' + dir + '/config.json';
		var a = createLink(dir.replace(' ', '_'), 'eventi/' + dir + '/' + dir + '.html', getEventImage(config), getEventDate(config), dir);
	}
}

function getEvents() {

	var res = $.getJSON('result.json');

	var j;
	for (j in res)
		window.alert(j);

	var out = new array();

	var i;
	for (i in res) {

		out.push(i.split(":")[1]);
	}

	return out;
}

(function() {

	var dirs = getEvents();
	window.alert(dirs[0]);
	customEvents(dirs);

})();