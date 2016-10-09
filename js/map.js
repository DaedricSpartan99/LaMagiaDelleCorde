
function initMap() {
	
	var uluru = {lat: 46.186603, lng: 9.017648};

    var map = new google.maps.Map(document.getElementById('mappa'), {

        zoom: 6,
        center: uluru
    });

    var marker = new google.maps.Marker({

        position: uluru,
        map: map
    });

}