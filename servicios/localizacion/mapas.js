var map;
function initMap() {
  var myLatLng = {lat: 19.0438393, lng: -98.1982317};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Puebla de los Ángeles'
  });
}
