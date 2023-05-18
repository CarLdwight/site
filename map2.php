
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="fetchDisplay.js"></script>

<script type="text/javascript"> 

//geojson
var storeList = <?php echo json_encode($storeList,JSON_PRETTY_PRINT) ?>;

//Map
var myMap = L.map('map').setView([14.179410,120.605578], 16);

/*===================================================
                      Tile Layers              
===================================================*/

const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const tileLayer = L.tileLayer(tileUrl,{
 maxZoom: 19 ,
 attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors\''
});
tileLayer.addTo(myMap);






//Generate merchant list//


<?php 
    
?>

//Pop Shop Details//
function makePopupContent(shop) {
  return `

<div class="row">
    <div class="column">
    <div style="width: 470px">
        <div class="row gx-3 mb-3">
        <input class="form-control" type="hidden" value="${shop.properties.site_id}"  name="site_id" id="site_id" >
            <div class="col-md-10">
                 <label class="small mb-1" for="coordinates">Coordinates</label>
                <input class="form-control" type="text" value="${shop.properties.latitude},${shop.properties.longitude}"  name="latitude" name="lat" readonly required>
            </div>

            <div class="col-md-2">
            <label class="small mb-1" for="coordinates">Years</label>
                 <select class="form-control" id="YEAR" onchange="fetch()">
                    <option value=''> Year </option>
                    <?php  
                        while ($rows=mysqli_fetch_array($res)) {
                                ?> 

                                <option  value="<?php echo $rows['Year'] ?>"> <?php echo $rows['Year'] ?> </option>
                     <?php            
                            }
                    ?>
                    </select>
            </div>
            <div class="col-md-12">
                <label class="small mb-1" for="locationname">Location Name</label>
                <input class="form-control"  type="text" value="${shop.properties.Name}" name="name" readonly required>
            </div>
            
        </div>
    </div>
    <table class="table-bordered table-hover" style="background-color: #fff !important; border: 2px solid #323232 !important;">
        <thead style="background-color: #007f80 !important; color: #fff;">
          <tr>
            <th>Substrate</th>
            <th>Percent Cover</th>     
      </tr>
      </thead>
      <tbody id="ans">
     
      </tbody>
    </table>
  </div>
 
</div>

       
    
  `;
}
function onEachFeature(feature, layer) {
    layer.bindPopup(makePopupContent(feature), { closeButton: false, offset: L.point(0, -8) });
}

//Shop Marker//
var myIcon = L.icon({
    iconUrl: 'assets/img/marker-icon.png',
    iconSize: [20, 29]
});


//mapping geoJSON//
const shopsLayer = L.geoJSON(storeList, {
    onEachFeature: onEachFeature,
    pointToLayer: function(feature, latlng) {
        return L.marker(latlng, { icon: myIcon });
    }
});
shopsLayer.addTo(myMap);

//animation//
function flyToStore(store) {
    const lat = store.geometry.coordinates[1];
    const lng = store.geometry.coordinates[0];
    myMap.flyTo([lat, lng], 18, {
        duration: 3
    });
    setTimeout(() => {
        L.popup({closeButton: false, offset: L.point(0, -8)})
        .setLatLng([lat, lng])
        .setContent(makePopupContent(store))
        .openOn(myMap);
    }, 3000);
}

</script>