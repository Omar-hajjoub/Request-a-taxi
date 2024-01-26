
  var map, places, infoWindow, service;
  var cityAutocomplete, searchInput;
  var placesService, directionsService, directionsDisplay, userMarker;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 33.248348, lng: -8.516350},
      zoom: 8
    });

    cityAutocomplete = new google.maps.places.Autocomplete(
      document.getElementById('city-input')
    );
    cityAutocomplete.bindTo('bounds', map);

    searchInput = document.getElementById('search-input');
    locanput = document.getElementById('loca-input');
    infoWindow = new google.maps.InfoWindow();
    service = new google.maps.places.PlacesService(map);

    cityAutocomplete.addListener('place_changed', onCityChanged);


    document.getElementById('locate-button').addEventListener('click', locateUser);

    document.getElementById('search-button').addEventListener('click', searchStreet);
  }

  function locateUser() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var userLocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
  
        userLocationMarker = new google.maps.Marker({
          position: userLocation,
          map: map,
          title: 'موقعي'
        });
  
        map.setCenter(userLocation);
        
        // وضع الموقع في حقل الإدخال
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'location': userLocation }, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK && results.length > 0) {
   const address=results[0].formatted_address;
  
            document.getElementById('loca-input').value = address;
          }
        });
      }, function() {
        handleLocationError(true);
      });
    } else {
      handleLocationError(false);
    }
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var userLocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
  
        if (userMarker) {
          userMarker.setMap(null);
        }
  
        userMarker = new google.maps.Marker({
          map: map,
          position: userLocation,
          animation: google.maps.Animation.DROP
        });
  
        map.setCenter(userLocation);
        map.setZoom(16);
  
      }, function() {
        window.alert('حدث خطأ أثناء تحديد الموقع.');
      });
    } else {
      window.alert('المتصفح لا يدعم ميزة تحديد الموقع.');
    }
  }

  function onCityChanged() {
    if (places) {
      places.setMap(null);
    }

    var cityPlace = cityAutocomplete.getPlace() ;

    if (!cityPlace.geometry) {
      window.alert("لا يتوفر مكان لهذه المدينة: '" + cityPlace.name + "'");
      return;
    }

    map.panTo(cityPlace.geometry.location);
    map.setZoom(12);
  }
  //----------------------------------------
 
//-----------------------------------------------------------------
  function searchStreet() {
    var query = searchInput.value;
    var query1 = locanput.value;
    var cityPlace = cityAutocomplete.getPlace();
    if (!cityPlace.geometry) {
      window.alert("يرجى تحديد المدينة أولاً");
      return;
    }

    var request = {
      query: query ,
      fields: ['name', 'geometry', 'formatted_address', 'place_id'],
      locationBias: cityPlace.geometry.viewport
    };
    var request1= {
      query: query1 ,
      fields: ['name', 'geometry', 'formatted_address', 'place_id'],
      locationBias: cityPlace.geometry.viewport
    };

    service.findPlaceFromQuery(request, function(results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        showResults(results);
      }
    });
    service.findPlaceFromQuery(request1, function(results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        showResults(results);
      }
    });
  }


  function showResults(results) {
    var resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    for (var i = 0; i < results.length; i++) {
      var result = results[i];

      var resultDiv = document.createElement('div');
      resultDiv.innerHTML = '<strong>' + result.name + '</strong><br>' + result.formatted_address;

      resultsDiv.appendChild(resultDiv);

      createMarker(result.geometry.location, result.name, result.formatted_address);
    }
  }

  function createMarker(position, name, address) {
    var marker = new google.maps.Marker({
      map: map,
      position: position
    });

    google.maps.event.addListener(marker, 'click', function() {
      infoWindow.setContent('<strong>' + name + '</strong><br>' + address);
      infoWindow.open(map, marker);
    });
  }
