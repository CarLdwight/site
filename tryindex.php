<?php 
include 'dbcon.php';
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"></script>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 


  
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

 <style>
    #map { height: 300px; width:500px; }
      body{
        background-color: white;
      }
      .info{
        width:100%;
      }
  </style>

<body>
  <main id="main">

    <!-- ======= Site Section ======= -->
    <section id="site1" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Barangay Papaya</h2>
          <p>Add New Site</p>
        </div>

        <div class="row">
          <div class="image col-lg-6" data-aos="fade-right">
              <div id="map" class="img-fluid" ></div>
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left" data-aos-delay="100">
            <form action="site_query.php" method="post"   enctype="multipart/form-data">
            <div class="row">
                  <div style="text-align: right;">
                    <button class="btn" type="submit"  name="submit" style=" background-color: #4CAF50; border-color: #4CAF50; color: white; border-radius: 5px;"> Save New Site </button>
                    <a href="tryindex2.php" class="btn" style=" background-color: #fa3e05; border-color: #fa3e05; color: white; border-radius: 5px;"> Cancel </a>
                  </div>
              <div class="info">
                 <label class="labels" style=" font-size: 11px; margin-left:50px;">Latitude</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="lat" value="14.179410" id="latitude" class="form-control" placeholder="latitude" readonly/>
                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Longitude</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="long" value="120.605578" id="longitude" class="form-control" placeholder="longitude" readonly/>
                    </div>
                  </div>
        
                  <div class="form-group">  
                    <input id="address" type="hidden" name="address" readonly="" required="" />
                  </div> 
              </div>
            </div>

              <div class="row gx-3 mb-3">
                  <div class="col-md-10">
                      <label class="small mb-1" for="locationname">Location Name</label>
                      <input class="form-control"  type="text"  name="Name" required>
                  </div>
                  <div class="col-md-2">
                      <label class="small mb-1" for="coordinates">Year</label>
                      <input type="text" class="form-control" name="Year" id="Year" placeholder="Year" required  />
                  </div>
              </div>
            </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <hr>
                <div class="row gx-3 mb-3">
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate1" required>
                  </div>
                  <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct1" required>
                  </div>
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate2" required>
                  </div>
                   <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct2"  required>
                  </div>
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate3" required>
                  </div>
                  <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct3" required>
                  </div>
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate4"required>
                  </div>
                  <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct4"  required>
                  </div>
              </div>
            </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left" data-aos-delay="100">
                <hr>
                <div class="row gx-3 mb-3">
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate5" required>
                  </div>
                  <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct5" required>
                  </div>
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate6">
                  </div>
                   <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct6"  required>
                  </div>
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate7">
                  </div>
                  <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct7" required>
                  </div>
                  <div class="col-md-8">
                      <label class="small mb-1" for="coordinates">Substrate</label>
                      <input class="form-control" type="text"  name="substrate8">
                  </div>
                  <div class="col-md-4">
                      <label class="small mb-1" for="locationname">Percent Cover</label>
                      <input class="form-control"  type="text" name="pct8"  required>
                  </div>
              </div>
            </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>




<script>
$(document).ready(function(){
  $("#Year").datepicker({
     format: "yyyy",
     viewMode: "years", 
     minViewMode: "years",
     autoclose:true
  });   
})


</script>



  <script>
        var rememberLat = document.getElementById('latitude').value;
var rememberLong = document.getElementById('longitude').value;
var add =document.getElementById('address').value;

if( !rememberLat || !rememberLong ) {
 rememberLat = 14.07325895738352;
 rememberLong = 120.6353384256363;
}

var map = L.map('map').setView([14.179410,120.605578],15);
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>