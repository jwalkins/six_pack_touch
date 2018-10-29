        jQuery(function($) {
        // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyBMJffbv1ZCbnXlMBRbXLiQAVcwBvfSKAk&sensor=false&callback=initialize";
            document.body.appendChild(script);
        });

        function initialize() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the page
            map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            map.setTilt(45);

            // Multiple Markers
            var markers = [
                /*['Edinburgh Academicals Rugby Club, Training Pitches', 55.959835, -3.217425],*/
                ['Peffermill Playing Fields, Match Pitches', 55.931177, -3.151756],
                ['Oriam, Training and Matches', 55.910433, -3.314858],
                ['Inverleith Park, Training', 55.963448, -3.217228],
                ['Stewart Melville , training', 55.953851, -3.226014]
                //ADD REST OF LOCATIONS//
            ];

            // Info Window Content
            var infoWindowContent = [
                /*['<div class="info_content">' +
                '<h3>Edinburgh Academicals Rugby Club - Winter Training</h3>' +
                '<p>Edinburgh Academicals grass pitches located in the heart of Stockbridge, on the northern edge of the city centre. The home of our training during the dark Scottish winters.</p>' +
                '<p><a title="Open Edinburgh Academicals Rugby Club in Google Maps" href="https://goo.gl/maps/DJVimEMyWt42" target="_blank">LOCATION: N Park Terrace, Edinburgh EH4 1HQ</a></p>' +
                '</div>'],*/
                ['<div class="info_content">' +
                '<h3>Peffermill Playing Fields - ETS Touch League</h3>' +
                '<p>University of Edinburgh Playing Fields. Home of the ETS Touch League played on Monday nights throughout the summer</p>' +
                '<p><a title="Open Peffermill Playing Fields in Google Maps" href="https://goo.gl/F4SLQe" target="_blank">LOCATION: Peffermill Road, Edinburgh EH16 5LL</a></p>' +
                '</div>'],
                ['<div class="info_content">' +
                '<h3>Oriam - Active Touch League</h3>' +
                '<p>Heriot Watt High Performance Centre. Home of the Active Touch League played on throughout the winter</p>' +
                '<p><a title="Open Oriam Heriot Watt in Google Maps" href="https://goo.gl/yl72l0" target="_blank">LOCATION: Heriot Watt University, Edinburgh EH14 4AS</a></p>' +
                '</div>'],
                ['<div class="info_content">' +
                '<h3>Inverleith Park - Summer Training</h3>' +
                '<p>Inverleith Park. Training location throughout the summer.</p>' +
                '<p><a title="Open Inverleith Park in Google Maps" href="https://goo.gl/rgBPlh" target="_blank">LOCATION: Arboretum Rd, Edinburgh EH3 5NZ</a></p>' +
                '</div>'],
                 ['<div class="info_content">' +
                '<h3>Stewart Melville College - Winter Training</h3>' +
                '<p>Stewart Melvill astro pitches located in the West of Edinburgh. Home of our training during the dark Scottish winters.</p>' +
                '<p><a title="Open Stewart Melville College in Google Maps" href="https://goo.gl/maps/79vUEcjKjRS2" target="_blank">LOCATION: Queensferry Road, Edinburgh EH4, 3NZ</a></p>' +
                '</div>'],
                //ADD REST OF LOCATION DESCRIPTIONS//
            ];

            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(12);
                google.maps.event.removeListener(boundsListener);
            });

        }
