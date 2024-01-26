
var map, places, infoWindow, service;
var searchInput;

function initializeMap() {
  var mapOptions = {
    center: { lat: 25.0330, lng: 121.5654 }, // إحداثيات مركز الخريطة
    zoom: 12 // مستوى التكبير
  };
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);


  function searchStreets() {
    // الحصول على قيمة المدينة المدخلة من المستخدم
    var city = document.getElementById("cityInput").value;
  
    // إعداد معايير البحث للأزقة والشوارع
    var request = {
      query: "أزقة في " + city,
      fields: ["name", "geometry"],
      componentRestrictions: { country: "ma" } // تحديد المغرب كمكون قيد البحث
    };
  
    // إجراء البحث والحصول على النتائج
    var service = new google.maps.places.PlacesService(document.createElement("div"));
    service.findPlaceFromQuery(request, function(results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK && results && results.length > 0) {
        // عرض النتائج على الخريطة
        var mapDiv = document.getElementById("map");
        var map = new google.maps.Map(mapDiv, {
          center: results[0].geometry.location,
          zoom: 14
        });
        for (var i = 0; i < results.length; i++) {
          var marker = new google.maps.Marker({
            position: results[i].geometry.location,
            map: map,
            title: results[i].name
          });
        }
      } else {
        // إدراج رسالة الخطأ في حالة عدم العثور على النتائج
        var mapDiv = document.getElementById("map");
        mapDiv.innerHTML = "حدث خطأ في البحث.";
      }
    });
  }
}



/*
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
      window.alert('حدث خطأ أثناء تحديد الموقع.');
    });
  } else {
    window.alert('المتصفح لا يدعم ميزة تحديد الموقع.');
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
  resultsDiv.value = '';

  var distanceDiv = document.getElementById('km');
  distanceDiv.value = 'المسافة: ' + distance.toFixed(2) + ' كم';

  var durationDiv = document.getElementById('mint');
  durationDiv.values = 'الوقت المقدر: ' + duration + ' دقيقة';

  resultsDiv.appendChild(distanceDiv);
  resultsDiv.appendChild(durationDiv);
}*/