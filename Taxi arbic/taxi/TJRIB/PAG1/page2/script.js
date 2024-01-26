
  var map, places, infoWindow, service;
  var searchInput;
  var placesService, directionsService, directionsDisplay, userMarker;


  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 33.248348, lng: -5.0078}, // إحداثيات مدينة الجديدة في المغرب
      zoom: 14
    });

    placesService = new google.maps.places.PlacesService(map);
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);

    document.getElementById('locate-button').addEventListener('click', locateUser);
    document.getElementById('calculate-button').addEventListener('click', calculateDistance);
  }

  function locateUser() {
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
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      handleLocationError(false, infoWindow, map.getCenter());
    }
  }

  function calculateDistance() {
    var destination = document.getElementById('destination-input').value;

    var request = {
      origin: userMarker.getPosition(),
      destination: destination,
      travelMode: 'DRIVING'
    };

    directionsService.route(request, function(result, status) {
      if (status == 'OK') {
        directionsDisplay.setDirections(result);

        var route = result.routes[0];
        var distance = 0;
        var duration = 0;

        for (var i = 0; i < route.legs.length; i++) {
          distance += route.legs[i].distance.value;
          duration += route.legs[i].duration.value;
        }

        distance = distance / 1000; // تحويل المسافة إلى كيلومترات
        duration = Math.ceil(duration / 60); // تحويل الوقت إلى دقائق وتقريبه للأعلى

        showDistanceAndDuration(distance, duration);
      } else {
        window.alert('تعذر حساب المسافة والوقت. يرجى المحاولة مرة أخرى.');
      }
    });
  }

  function showDistanceAndDuration(distance, duration) {
    var resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    var distanceDiv = document.createElement('div');
    distanceDiv.innerHTML = 'المسافة: ' + distance.toFixed(2) + ' كم';

    var durationDiv = document.createElement('div');
    durationDiv.innerHTML = 'الوقت المقدر: ' + duration + ' دقيقة';

    resultsDiv.appendChild(distanceDiv);
    resultsDiv.appendChild(durationDiv);
  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'حدث خطأ أثناء تحديد الموقع.' :
                          'المتصفح لا يدعم ميزة تحديد الموقع.');
    infoWindow.open(map);
    searchInput = document.getElementById('search-input');
    
    infoWindow = new google.maps.InfoWindow();
    service = new google.maps.places.PlacesService(map);

    document.getElementById('search-button').addEventListener('click', searchStreet);
  }

  function searchStreet() {
    var query = searchInput.value;

    var request = {
      query: query,
      fields: ['name', 'geometry', 'formatted_address'],
      location: map.getCenter(),
      radius: 1000, // نصف قطر البحث في المتر
      type: ['street_address', 'establishment']
    };

    service.textSearch(request, function(results, status) {
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

