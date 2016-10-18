
function initMap() {
    
    var uluru = {lat: 46.186603, lng: 9.017648};
    var container = document.getElementById('mappa');
    
    container.style.height = (container.clientWidth * 4 / 5)+ 'px';

    var map = new google.maps.Map(container, {

        zoom: 16,
        center: uluru
    });

    var marker = new google.maps.Marker({

        position: uluru,
        map: map
    });

}