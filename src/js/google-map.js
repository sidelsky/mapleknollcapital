function GoggleMap() {

    //Google maps
    var map;
    var myMap = new google.maps.LatLng(51.52363572618399,-0.097312673016404);

    var image = {
        url: "../wp-content/themes/mapleknollcapital/assets/build/img/pngs/map-icon.png", // url
        scaledSize: new google.maps.Size(15, 15), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
    };

    var stylez = [{
        "featureType": "road",
        "elementType": "labels",
        "stylers": [{
            "visibility": "on"
        }]
    }, {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "labels.text",
        "stylers": [{
            "visibility": "off"
        }]
    }];



    var mapOptions = {
        zoom: 18,
        center: myMap,
        mapTypeControl: false,
        // zoomControl: true,
        // zoomControlOptions: {
        //     style: google.maps.ZoomControlStyle.SMALL,
        //     position: google.maps.ControlPosition.LEFT_CENTER
        // },
        // zoomControl: false,
        // scaleControl: false,
        // scrollwheel: false,
        // draggable: false,
        // streetViewControl: false,
        // disableDoubleClickZoom: true,
        // mapTypeControl:false
        panControl: true,
        zoomControl: true,
        scaleControl: true,
        scrollwheel: false,
        streetViewControl: true,
        draggable: true,
        overviewMapControl: true,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'tehgrayz']
        }
    };


    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    var mapType = new google.maps.StyledMapType(stylez, {
        name: "Grayscale"
    });
    map.mapTypes.set('tehgrayz', mapType);
    map.setMapTypeId('tehgrayz');

    var myLatLng = myMap;

    var yourContent = new google.maps.InfoWindow({
        content: 'blah blah'
    });

    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
            //icon: new google.maps.MarkerImage(iconBase + iconType, null, null, null, new google.maps.Size(20, 20)),
    });

    //var url = 'https://www.google.co.uk/maps/place/Soho,+London+W1F+8DA/@51.514808,-0.1366496,17z/data=!3m1!4b1!4m2!3m1!1s0x487604d4ca46b109:0xf4f2bcbd70178c7e'

    var contentString = '<div id="content">' +
        //'<h1 id="firstHeading" class="firstHeading">Uluruz</h1>'+
        '<div id="bodyContent">' +
        '<p><a href="https://www.google.co.uk/maps/place/18+Noel+St,+Soho,+London+W1F+8GN/@51.514932,-0.136553,17z/data=!3m1!4b1!4m2!3m1!1s0x487604d4ca59d3b9:0x8bd8a440f4485685" target="_blank" style="color: #202020; text-decoration: underline">Find us</a> on your map' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(beachMarker, 'click', function() {
        //window.location.href = url;
        window.open('https://www.google.co.uk/maps/place/18+Noel+St,+Soho,+London+W1F+8GN/@51.514932,-0.136553,17z/data=!3m1!4b1!4m2!3m1!1s0x487604d4ca59d3b9:0x8bd8a440f4485685" alt="Google Map of 18 Noel Street, London, W1F 8DA"', '_blank');
        //infowindow.open(map, beachMarker);
    });

}

var $body = $('body');

if ($body.hasClass('page-id-6')) {

    GoggleMap();

    $(window).resize(function() {
        GoggleMap();
    });

}
