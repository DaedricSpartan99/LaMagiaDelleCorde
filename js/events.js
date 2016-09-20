
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

function customEvents(dirlist) {

	for (var dir in dirlist) {

  		window.alert(dir);

  		var config = '../eventi/' + dir + '/config.json';
  		var obj = jQuery.parseJSON($.getJSON(config));

  		window.alert(obj.img);
  		window.alert(obj.date);

		var a = createLink(dir.replace(' ', '_'), '../eventi/' + dir + '/pagina.html', obj.img, obj.date, dir);
	}
}