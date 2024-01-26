// الدالة التالية تنشئ خريطة Google Maps وتعرضها في عنصر الـ div المحدد
function initMap() {
  // إنشاء كائن خريطة جديد
  var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 31.7917, lng: -7.0926}, // تعيين مركز الخريطة الافتراضي إلى الموقع المركزي للمغرب
      zoom: 8 // تعيين المستوى الافتراضي للتكبير
  });
  // استخدام HTML5 Geolocation API لتحديد المو
  navigator.geolocation.getCurrentPosition(function(position) {
    var userLocation = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };

    // إضافة علامة لموقع المستخدم على الخريطة
    var marker = new google.maps.Marker({
      position: userLocation,
      map: map,
      title:userLocation
    });

    // تحريك الخريطة لتكون مركزها موقع المستخدم
    map.setCenter(userLocation);
    
  });

  // الحصول على الموقع الجغرافي للمدينة المحددة
  function showCityLocation() {
    var homeSelect = document.getElementById("home");
    var selectedhome = citySelect.options[citySelect.selectedIndex].value;

      var citySelect = document.getElementById("city");
      var selectedCity = citySelect.options[citySelect.selectedIndex].value;

      const pr = document.getElementById('pri');
      if(selectedCity=="الرباط"){
        pr.value= " ثمن رحلة هو : " +100+"  درهم";
      }
      if(selectedCity=="الجديدة"){
        pr.value= " ثمن رحلة هو : " +80+"  درهم";

      }
      if(selectedCity=="مراكش"){
        pr.value= " ثمن رحلة هو : " +70+"  درهم";

      }
      if(selectedCity=="فاس"){
        pr.value= " ثمن رحلة هو : " +150+"  درهم";

      }
      if(selectedCity=="أكادير"){
        pr.value= " ثمن رحلة هو : " +130+"  درهم";

      }


            //home إرسال طلب الحصول على موقع المدينة من Geocoding API
            var geocoder1 = new google.maps.Geocoder();
         /*   geocoder1.geocode({ address: selectedhome + ", Morocco" },
            function(results1, status1) {
               if (status1 == google.maps.GeocoderStatus.OK) {
                   var cityLocation = results1[0].geometry.location;
     
                   // تحديث مركز الخريطة إلى موقع المدينة
                   map.setCenter(cityLocation);
     
                 
                //   document.getElementById("prix").value=cityLocation;
     
                   // إنشاء علامة على الموقع الحالي للمدينة
     
                   var marker = new google.maps.Marker({
                       position: cityLocation,
                       map: map,
                       title: selectedhome
                   });
     
               } else {
                   alert("لم يتم العثور على المدينة المحددة.");
               }
           });*/
     
       
      


      // إرسال طلب الحصول على موقع المدينة من Geocoding API
      

    
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({ address: selectedCity + ", Morocco" },
       function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
              var cityLocation = results[0].geometry.location;

              // تحديث مركز الخريطة إلى موقع المدينة
              map.setCenter(cityLocation);

            
           //   document.getElementById("prix").value=cityLocation;

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
                            const  mint =  duration;
                              const km=  distance + "  :  "+  selectedCity ;
                            document.getElementById("km").value = km;
                            document.getElementById("mint").value = mint;


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

      // مصفوفة لتخزين الأسعار


// استدعاء العنصر <select>
const destinationSelect = document.getElementById('city');

// استدعاء العنصر <input> لعرض الثمن
const priceInput = document.getElementById('pri');

// تعيين القيمة المناسبة عند تغيير الوجهة المحددة

  
    }





  //سعر بين المدن
 

  // إضافة مستمع للحدث للزر "البحث"
  var searchButton = document.getElementById("search-button");
  searchButton.addEventListener("click", showCityLocation);
}


//-----------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------

