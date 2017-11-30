@extends('front_office/layouts.app')
@section('title')
| Half map
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
@endsection
@section('content')



<div id="map" style="height: 800px;"></div>


@endsection
@section('js')
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script>
var map = L.map('map').setView([33.8616437, 7.3176854], 7);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
<?php
foreach($get_col as $get_cols){ 
?>
    L.marker([<?php echo $lat; ?>, <?php echo $long; ?>]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
<?php
}
?>

</script> 
@endsection 