<h3><?= $lang[$_SESSION['lang']]['localisation'] ?> </h3>
<!--The div element for the map -->
<div id="map"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var youssoufia = {
            lat: 32.195825,
            lng: -8.563511
        };
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 9,
                center: youssoufia
            });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
            position: youssoufia,
            map: map
        });
    }

    
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeoRtPYQHqs2Tor26SY0om3Hwg_LyvUfY&callback=initMap"></script>