var map;

map = new GMaps({
  div: '#map',
  lat: 23.709921,
  lng: 90.407143,
  scrollwheel: false,
  panControl: false,
  zoomControl: false,
});

map.addMarker({
  lat: 23.709921,
  lng: 90.407143,
  title: 'Smilebuddy',
  infoWindow: { 
    content: '<p> Smilebuddy, Dhanmondhi 27</p>'
  },
  icon: "images/map1.png"
});