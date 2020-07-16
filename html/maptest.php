<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;margin-bottom:50px;"></div>
    <div id="googleMap1" style="width:100%;height:400px;margin-bottom:50px;"></div>
    <div id="googleMap2" style="width:100%;height:400px;margin-bottom:50px;"></div>
    <div id="googleMap3" style="width:100%;height:400px;margin-bottom:50px;"></div>
    <div id="googleMap4" style="width:100%;height:400px;margin-bottom:50px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var map1 = new google.maps.Map(document.getElementById("googleMap1"), mapProp);
var map2 = new google.maps.Map(document.getElementById("googleMap2"), mapProp);
var map3 = new google.maps.Map(document.getElementById("googleMap3"), mapProp);
var map4 = new google.maps.Map(document.getElementById("googleMap4"), mapProp);
}
</script>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHtIcSg7ZRqscRV9Ebyh6N27_MYi7j3yM&callback=myMap"></script>

</body>
</html>

