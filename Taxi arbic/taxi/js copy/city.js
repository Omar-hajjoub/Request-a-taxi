
var map, places, infoWindow, service;
var cityAutocomplete, searchInput;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 0, lng: 0},
    zoom: 2
  });

  cityAutocomplete = new google.maps.places.Autocomplete(
    document.getElementById('city-input')
  );
  cityAutocomplete.bindTo('bounds', map);

  searchInput = document.getElementById('search-input');
  
  infoWindow = new google.maps.InfoWindow();
  service = new google.maps.places.PlacesService(map);

  cityAutocomplete.addListener('place_changed', onCityChanged);

  document.getElementById('search-button').addEventListener('click', searchStreet);
}

function onCityChanged() {
  if (places) {
    places.setMap(null);
  }

  var cityPlace = cityAutocomplete.getPlace();
  if (!cityPlace.geometry) {
    window.alert("لا يتوفر مكان لهذه المدينة: '" + cityPlace.name + "'");
    return;
  }

  map.panTo(cityPlace.geometry.location);
  map.setZoom(15);
}

function searchStreet() {
  var query = searchInput.value;

  var cityPlace = cityAutocomplete.getPlace();
  if (!cityPlace.geometry) {
    window.alert("يرجى تحديد المدينة أولاً");
    return;
  }

  var request = {
    query: query,
    fields: ['name', 'geometry', 'formatted_address', 'place_id'],
    locationBias: cityPlace.geometry.viewport
  };

  service.findPlaceFromQuery(request, function(results, status) {
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

