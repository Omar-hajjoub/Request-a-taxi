
  var map, places, infoWindow, service;
  var searchInput;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 33.248348, lng: -8.516350}, // إحداثيات مدينة الجديدة في المغرب
      zoom: 14
    });

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

