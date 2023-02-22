google.maps.event.addDomListener(window, 'load', inicializa);

function inicializa() {

    latitud = 22.143;
    longitud = -102.358;
    myLatlng = new google.maps.LatLng(latitud, longitud);

    var myOptions = {
        center: myLatlng,
        zoom: 4,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
		
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}

function centrarMapa(estado) {

            var latitud;
            var longitud;
            var zoomMapa;

            switch (estado) {
                case '0':
                    latitud = 22.143;
                    longitud = -102.358;
                    zoomMapa = 4;
                    break;
                case '1':
                    latitud = 22.143;
                    longitud = -102.358;
                    zoomMapa = 9;
                    break;
                case '2':
                    latitud = 30.401;
                    longitud = -115.268;
                    zoomMapa = 7;
                    break;
                case '3':
                    latitud = 25.751;
                    longitud = -111.687;
                    zoomMapa = 7;
                    break;
                case '4':
                    latitud = 18.651;
                    longitud = -90.236;
                    zoomMapa = 7;
                    break;
                case '5':
                    latitud = 27.479;
                    longitud = -101.82;
                    zoomMapa = 6;
                    break;
                case '6':
                    latitud = 19.146
                    longitud = -103.828;
                    zoomMapa = 9;
                    break;
                case '7':
                    latitud = 16.705;
                    longitud = -92.637;
                    zoomMapa = 7;
                    break;
                case '8':
                    latitud = 28.633;
                    longitud = -106.05;
                    zoomMapa = 6;
                    break;
                case '9':
                    latitud = 19.305;
                    longitud = -99.146;
                    zoomMapa = 10;
                    break;
                case '10':
                    latitud = 24.677;
                    longitud = -104.81;
                    zoomMapa = 7;
                    break;
                case '11':
                    latitud = 21.202;
                    longitud = -101.008;
                    zoomMapa = 8;
                    break;
                case '12':
                    latitud = 17.545;
                    longitud = -99.470;
                    zoomMapa = 7;
                    break;
                case '13':
                    latitud = 20.399;
                    longitud = -98.924;
                    zoomMapa = 8;
                    break;
                case '14':
                    latitud = 20.66;
                    longitud = -103.31;
                    zoomMapa = 7;
                    break;
                case '15':
                    latitud = 19.330;
                    longitud = -99.666;
                    zoomMapa = 8;
                    break;
                case '16':
                    latitud = 19.36;
                    longitud = -101.71;
                    zoomMapa = 7;
                    break;
                case '17':
                    latitud = 18.756
                    longitud = -99.067;
                    zoomMapa = 9;
                    break;
                case '18':
                    latitud = 21.613
                    longitud = -104.690;
                    zoomMapa = 8;
                    break;
                case '19':
                    latitud = 25.327
                    longitud = -99.700;
                    zoomMapa = 7;
                    break;
                case '20':
                    latitud = 16.81;
                    longitud = -96.20;
                    zoomMapa = 7;
                    break;
                case '21':
                    latitud = 18.95;
                    longitud = -97.60;
                    zoomMapa = 7;
                    break;
                case '22':
                    latitud = 20.885;
                    longitud = -99.787;
                    zoomMapa = 8;
                    break;
                case '23':
                    latitud = 19.572;
                    longitud = -88.023;
                    zoomMapa = 7;
                    break;
                case '24':
                    latitud = 22.65;
                    longitud = -100.57;
                    zoomMapa = 8;
                    break;
                case '25':
                    latitud = 24.700;
                    longitud = -107.31;
                    zoomMapa = 7;
                    break;
                case '26':
                    latitud = 29.347;
                    longitud = -110.29;
                    zoomMapa = 6;
                    break;
                case '27':
                    latitud = 18.080;
                    longitud = -92.709;
                    zoomMapa = 8;
                    break;
                case '28':
                    latitud = 24.810;
                    longitud = -98.18;
                    zoomMapa = 7;
                    break;
                case '29':
                    latitud = 19.400;
                    longitud = -98.147;
                    zoomMapa = 9;
                    break;
                case '30':
                    latitud = 19.17;
                    longitud = -96.08;
                    zoomMapa = 7;
                    break;
                case '31':
                    latitud = 20.727;
                    longitud = -88.935;
                    zoomMapa = 8;
                    break;
                case '32':
                    latitud = 23.23;
                    longitud = -102.79;
                    zoomMapa = 7;
                    break;
            }
                var myLatlng;
               
			  
			myLatlng = new google.maps.LatLng(latitud, longitud);
			 map.panTo(myLatlng);
			map.setZoom(zoomMapa);
            

        }

        