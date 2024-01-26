 function initMap() {
  // إنشاء خريطة Google Maps
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 31.7917, lng: -7.0926}, // إحداثيات افتراضية
    zoom: 15 // التكبير الافتراضي
  });

  // الحصول على موقع المستخدم
  navigator.geolocation.getCurrentPosition(function(position) {
    var userLocation = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };

    // إضافة علامة لموقع المستخدم على الخريطة
    var marker = new google.maps.Marker({
      position: userLocation,
      map: map,
      title: 'موقع المستخدم'
    });

    // تحريك الخريطة لتكون مركزها موقع المستخدم
    map.setCenter(userLocation);
  });


}
// الدالة التالية تنشئ خريطة Google Maps وتعرضها في عنصر الـ div المحدد
function initMap() {
  // إنشاء كائن خريطة جديد
  var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 31.7917, lng: -7.0926}, // تعيين مركز الخريطة الافتراضي إلى الموقع المركزي للمغرب
      zoom: 8 // تعيين المستوى الافتراضي للتكبير
  });

  // الحصول على الموقع الجغرافي للمدينة المحددة
  function showCityLocation() {
      var citySelect = document.getElementById("city");
      var selectedCity = citySelect.options[citySelect.selectedIndex].value;

      // إرسال طلب الحصول على موقع المدينة من Geocoding API
      
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({ address: selectedCity + ", Morocco" },
       function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
              var cityLocation = results[0].geometry.location;

              // تحديث مركز الخريطة إلى موقع المدينة
              map.setCenter(cityLocation);

              // إنشاء علامة على الموقع الحالي للمدينة
              var marker = new google.maps.Marker({
                  position: cityLocation,
                  map: map,
                  title: selectedCity
              });

              // حساب المسافة بين موقع المدينة وموقع المستخدم
              if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                      var userLocation = {
                          lat: position.coords.latitude,
                          lng: position.coords.longitude
                      };

                      // إنشاء كائن متجه بين موقع المستخدم وموقع المدينة
                      var directionsService = new google.maps.DirectionsService();
                      var request = {
                          origin: userLocation,
                          destination: cityLocation,
                          travelMode: google.maps.TravelMode.DRIVING
                      };

                      directionsService.route(request, function(result, status) {
                          if (status == google.maps.DirectionsStatus.OK) {
                              var distance = result.routes[0].legs[0].distance.text;
                              var duration = result.routes[0].legs[0].duration.text;
                              alert("المسافة بين موقعك ومدينة " + selectedCity + " هي " + distance + " والوقت المقدر للوصول هو " + duration);
                          } else {
                              alert("لا يمكن حساب المسافة.");
                          }
                      });
                  });
              }
          } else {
              alert("لم يتم العثور على المدينة المحددة.");
          }
      });
  }

  // إضافة مستمع للحدث للزر "البحث"
  var searchButton = document.getElementById("search-button");
  searchButton.addEventListener("click", showCityLocation);
}












