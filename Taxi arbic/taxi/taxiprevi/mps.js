var map, placesService, directionsService, directionsDisplay, userMarker;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 34.0181, lng: -5.0078}, // إحداثيات مدينة الجديدة في المغرب
    zoom: 14
  });

  placesService = new google.maps.places.PlacesService(map);
  directionsService = new google.maps.DirectionsService();
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsDisplay.setMap(map);

  document.getElementById('locate-button').addEventListener('click', locateUser);
  document.getElementById('search-button').addEventListener('click', calculateDistance);
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
          var address = results[0].formatted_address;
          document.getElementById('locate').value = address;
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

function calculateDistance() {
  var destination = document.getElementById('destination_input').value;

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


  var distanceDiv = document.getElementById('km');
  distanceDiv.value = 'المسافة: ' + distance.toFixed(2) + ' كم';

  var durationDiv = document.getElementById('min');
  durationDiv.value = 'الوقت المقدر: ' + duration.toFixed(2) + ' دقيقة';


}