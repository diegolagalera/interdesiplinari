@extends('layouts.layoutf')
@section('content')
<h2><i class="fa fa-thumb-tack"></i>&nbsp&nbspDónde estamos?</h2>
<div class="row">
<div id="googleMap" style="width:100%;height:400px;"></div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
    			var marker;
    			var geocoder = new google.maps.Geocoder();
    			var myLatLng = new google.maps.LatLng(40.708802, 0.579773);
    			var mapOptions = {zoom: 16, center: myLatLng, mapTypeId: google.maps.MapTypeId.ROADMAP}
    			var map = new google.maps.Map($("#googleMap").get(0), mapOptions);

    				var address = "Avinguda de la Ràpita, 68";
    				if (marker) { marker.setMap(null); }
    				geocoder.geocode({address: address}, function(results) {
    			    	marker = new google.maps.Marker({
    				    	position: results[0].geometry.location,
    			    		map: map
    			    	});
    					var infoWindow = new google.maps.InfoWindow({
    						content: "Aquí estamos: <h3>BAXkids</h3> <h4>Avinguda de la Ràpita, 68</h4>"}
    			    	);
    			    	infoWindow.open(map, marker);
    		    	});
    		});

  </script>
  <!--Utilitzem aquest enllaç afegint la nostra key per a la api de google maps-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD22JjjDA82NwFx97KQ-6p0ZM8rsEI23PM&callback=myMap"></script>

@endsection
