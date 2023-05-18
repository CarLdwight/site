<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Settings</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"></script>
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css">
      <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
      
  </head>
  <style>
    #map { height: 460px; }
      body{
        background-color: white;
      }
      .info{
        width:400px;
      }
  </style>
      <body>
          <div class="container">
            
            <div class="info">
                 <label class="labels" style=" font-size: 11px; margin-left:50px;">Latitude</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="lat" value="14.07325895738352" id="latitude" class="form-control" placeholder="latitude" readonly/>
                    </div>
                  </div>

                       <label class="labels" style=" font-size: 11px; margin-left:50px;">Longitude</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="long" value="120.6353384256363" id="longitude" class="form-control" placeholder="longitude" readonly/>
                    </div>
                  </div>
        
    <div class="form-group">  
                      <input id="address" type="hidden" name="address" readonly="" required="" />
                    </div>
              
            </div>
        
            <div class="col-md-10 col-lg-6 col-xl-7  order-1 order-lg-2">
                 <div id="map" class="img-fluid" ></div>
              </div>
           </div>  
      </body>
      <script>
        var rememberLat = document.getElementById('latitude').value;
var rememberLong = document.getElementById('longitude').value;
var add =document.getElementById('address').value;

if( !rememberLat || !rememberLong ) {
 rememberLat = 14.07325895738352;
 rememberLong = 120.6353384256363;
}

var map = L.map('map').setView([14.07325895738352,120.6353384256363],13);
L.tileLayer( 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a  https://www.google.com/maps/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

 // Google Map Layer
    const googleUrl='http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}';
    const googleMap= '&copy; <a https://www.google.com/maps/copyright">OpenStreetMap</a> contributors\'';
    googleStreets = L.tileLayer(googleUrl,{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3'],
       attribution: '&copy; <a href="http://www.google.com/maps/copyright">GoogleMap</a>'
     });
     googleStreets.addTo(map);

     
     // Satelite Layer
    googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
       maxZoom: 20,
       subdomains:['mt0','mt1','mt2','mt3'],
       attribution: '&copy; <a href="http://www.google.com/maps/copyright">GoogleMap</a>'
     });
    googleSat.addTo(map);


    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

    const tileLayer = L.tileLayer(tileUrl,{
     maxZoom: 20 ,
     attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors\''
    });
    tileLayer.addTo(map);


    /*===================================================
                          LAYER CONTROL               
    ===================================================*/

    var baseLayers = {
      "OpenStreetMap": tileLayer ,
      "Satellite":googleSat, 
       "Google Map":googleStreets , 
      
    };

    L.control.layers(baseLayers).addTo(map);



  var searchControl = L.esri.Geocoding.geosearch({
    position: 'topright',
    placeholder: 'Enter an address or place e.g. 1 York St',
    useMapBounds: false,
    providers: [L.esri.Geocoding.arcgisOnlineProvider({
      
      nearby: {
        lat: 14.07325895738352,
        lng: 120.6353384256363
      }
    })]
  }).addTo(map);

  var results = L.layerGroup().addTo(map);

  searchControl.on('results', function (data) {
    results.clearLayers();
    for (var i = data.results.length - 1; i >= 0; i--) {
      results.addLayer(L.marker(data.results[i].latlng));
    }
  });


var gcs = L.esri.Geocoding.geocodeService();
map.on('click', (e)=>{
gcs.reverse().latlng(e.latlng).run((err, res)=>{
if(err) return;
//alert(res.address.Match_addr);
document.getElementById('address').value = res.address.Match_addr;
//L.marker(res.latlng).bindPopup(res.address.Match_addr).openPopup();
});
});

var myIcon = L.icon({
iconUrl: 'https://clipground.com/images/clipart-map-pin-2.png',
iconSize: [20, 29],

});


var marker = L.marker([rememberLat, rememberLong],{
draggable: true,
icon: myIcon
}).addTo(map);

marker.on('dragend', function (e) {
  updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
});

map.on('click', function (e) {
marker.setLatLng(e.latlng);
  updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
});

function updateLatLng(lat,lng,reverse) {
if(reverse) {
  marker.setLatLng([lat,lng]);
  map.panTo([lat,lng]);
} else {
  document.getElementById('latitude').value = marker.getLatLng().lat;
  document.getElementById('longitude').value = marker.getLatLng().lng;
map.panTo([lat,lng]);
}
}
      </script>
 </html> 