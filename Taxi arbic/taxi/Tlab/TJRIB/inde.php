<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>
  <head>
    <title>Reverse Geocoding</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  </head>
  <body onload="initMap()">
    <div id="floating-panel">
      <input id="latlng" type="text" value="40.714224,-73.961452" />
      <input id="submit" type="button" value="Reverse Geocode" />
    </div>
    <div id="map"></div>

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
      <script src="index.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEEz6EuBwN3abHp3s5ZImFO8TQfQuHWQc&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>
