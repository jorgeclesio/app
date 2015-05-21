function initialize() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions = {

      disableDefaultUI: true,
    //zoom: 5,
      zoomControl: true,
   //center: chicago
  }

  var ctaLayer = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/lei/kml/LINHAT001.kml'});
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  ctaLayer.setMap(map);
 //google.maps.event.addDomListener(window, 'load', initialize);




 if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Você'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}





    
function initialize2() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions2 = {
    zoom: 15,
      disableDefaultUI: true,
      zoomControl: true
    //center: chicago
  }
  var map2 = new google.maps.Map(document.getElementById('map-t2'), mapOptions2);

  var ctaLayer2 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAT002.kml'});
 // var ctaLayer = new google.maps.KmlLayer('C:/xampp3/htdocs/transp/lei/kml/LINHAT001.kml');
  ctaLayer2.setMap(map2);

//google.maps.event.addDomListener(window, 'load', initialize2);

}
//window.onpageshow = initialize2;
    

function initialize3() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions3 = {
    zoom: 8,
      disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map3 = new google.maps.Map(document.getElementById('map-a1'), mapOptions3);

  var ctaLayer3 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAA001.kml'});
 // var ctaLayer = new google.maps.KmlLayer('C:/xampp3/htdocs/transp/lei/kml/LINHAT001.kml');
  ctaLayer3.setMap(map3);

//google.maps.event.addDomListener(window, 'load', initialize3);

}

    

function initialize4() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions4 = {
    zoom: 28,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map4 = new google.maps.Map(document.getElementById('map-a2'), mapOptions4);

  var ctaLayer4 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAA002.kml'});
 // var ctaLayer = new google.maps.KmlLayer('C:/xampp3/htdocs/transp/lei/kml/LINHAT001.kml');
  ctaLayer4.setMap(map4);

//google.maps.event.addDomListener(window, 'load', initialize3);
}
    

function initialize5() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions5 = {
    zoom: 18,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map5 = new google.maps.Map(document.getElementById('map-ib3'), mapOptions5);

  var ctaLayer5 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAIB003.kml'});
 // var ctaLayer = new google.maps.KmlLayer('C:/xampp3/htdocs/transp/lei/kml/LINHAT001.kml');
  ctaLayer5.setMap(map5);

//google.maps.event.addDomListener(window, 'load', initialize3);
}


function initialize6() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions6 = {
    zoom: 18,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map6 = new google.maps.Map(document.getElementById('map-a4'), mapOptions6);

  var ctaLayer6 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAA004.kml'});
 // var ctaLayer = new google.maps.KmlLayer('C:/xampp3/htdocs/transp/lei/kml/LINHAT001.kml');
  ctaLayer6.setMap(map6);
}


function initialize7() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions7 = {
    zoom: 18,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map7 = new google.maps.Map(document.getElementById('map-a5'), mapOptions7);

  var ctaLayer7 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAA005.kml'});
 // var ctaLayer = new google.maps.KmlLayer('C:/xampp3/htdocs/transp/lei/kml/LINHAT001.kml');
  ctaLayer7.setMap(map7);
}


function initialize8() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions8 = {
    zoom: 18,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map8 = new google.maps.Map(document.getElementById('map-ib1'), mapOptions8);

  var ctaLayer8 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAIB001.kml'});
  ctaLayer8.setMap(map8);
}



function initialize9() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions9 = {
    zoom: 18,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map9 = new google.maps.Map(document.getElementById('map-ib2'), mapOptions9);

  var ctaLayer9 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAIB002.kml'});
  ctaLayer9.setMap(map9);
}



function initialize10() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions10 = {
    zoom: 18,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map10 = new google.maps.Map(document.getElementById('map-c1'), mapOptions10);

  var ctaLayer10 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAC001.kml'});
  ctaLayer10.setMap(map10);
}




function initialize11() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions11 = {
    zoom: 8,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map11 = new google.maps.Map(document.getElementById('map-c2'), mapOptions11);

  var ctaLayer11 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAC002.kml'});
  ctaLayer11.setMap(map11);
}



function caso1() {
  //var chicago = new google.maps.LatLng(-6.068219, -49.881302);
  var mapOptions_caso1 = {
    zoom: 8,
disableDefaultUI: true,
      zoomControl: true,
    //center: chicago
  }
  var map_caso1 = new google.maps.Map(document.getElementById('caso1'), mapOptions_caso1);

  var ctaLayer_caso1 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/app/kml/LINHAC002.kml'});
  var ctaLayer_caso1_1 = new google.maps.KmlLayer({ url: 'http://gtransp.esy.es/lei/kml/LINHAC001.kml'});


  ctaLayer_caso1.setMap(map_caso1);
  ctaLayer_caso1_1.setMap(map_caso1);
}