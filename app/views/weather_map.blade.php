@extends('layouts.master_material')

@section('content')


<body background="/img/weather.png">

    <nav class="indigo">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo left">3-Day Weather Forecast</a>
        </div>
    </nav>

    <div class="container">

    <p id="locationName"></p>

    <!-- Form to enter new lat and lng -->
    <form style="padding: 0px 0px 20px 0px" method="post" action="weather_form" class="col s12">
        <div class="input-field col s6">
            <input placeholder="29.4241" type="text" name="lat" id="latitude" class="validate">
            <label for="latitude"><b>Latitude</b></label>
        </div>
        <br>
        <div class="input-field col s6">
            <input placeholder="-98.4936" type="text" name="lng" id="longitude">
            <label for="longitude"><b>Longitude</b></label>
        </div>
        <br>
    </form>

    <!-- Submit lat and lng button -->
    <div>
        <button class="waves-effect waves-light btn indigo z-depth-5" style="margin: 0px 0px 30px 0px" type="button" id="submit"> Submit </button>
    </div>

    <!-- div to hold forecast -->
    <div id="forecast"></div>

    <!-- div to hold map -->
    <div id="map-canvas" class="z-depth-5"></div>

    </div>

    <!-- footer -->
    <footer class="page-footer indigo">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Thanks for checking the weather!</h5>
          </div>
          <div class="col l4 offset-l2 s12">
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2016 Pancho Escobedo
        <a class="grey-text text-lighten-4 right" href="portfolio.html">Back to portfolio</a>
        </div>
      </div>
    </footer>

    <!-- Load the Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5Wm7YvviL8dFXivBh5hTrVPWzJBiq4QY"></script>

    <script type="text/javascript">
    (function() {
        "use strict";

        var latitude = ('29.4241');

        var longitude = ('-98.4936');

        var locationHandler = function(event) {

        $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
            APPID: "aeee7dc54a3111bd38e9660f2e193f82",
            lat: latitude,
            lon: longitude,
            units: "imperial",
            cnt: 3
        }).done(function(data) {
            console.log(data);

                //Adds name of weather map location (clears previous name)
                $('#locationName').html('');
                var par = $('<p>');
                par.append('<p>' + '<h2>' + data.city.name + '<h2>' + '</p>');
                $('#locationName').append(par);

                //Clears forecast info before entering 3 day forecast
                $('#forecast').html('');
            for (var i = 0 ; i < data.list.length; i++) {
                var div = $('<div>');
                div.addClass('blocking z-depth-4');
                div.append('<p>' + data.list[i].temp.min + '&deg' + '/' + data.list[i].temp.max + '&deg' + '</p>');
                div.append('<p>' + '<img src= "http://openweathermap.org/img/w/' + data.list[i].weather[0].icon + '.png">' + '</p>');
                div.append('<p>' + data.list[i].weather[0].main + '</p>');
                div.append('<p>' + 'Humidity: ' + data.list[i].humidity + '</p>');
                div.append('<p>' + 'Wind: ' + data.list[i].speed + ' mph' + '</p>');
                div.append('<p>' + 'Pressure: ' + data.list[i].pressure + '</p>');
                $('#forecast').append(div);
            };

        });

        };

        // Set our map options
        var mapOptions = {
            
            // Set the zoom level
            zoom: 4,

            // This sets the center of the map at our location
            center: {
                lat:  29.4241,
                lng: -98.4936
            }

        };

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        // Calls weather forecast
        locationHandler();

        var myLatlng = {lat: 29.4241, lng: -98.4936};

        var marker = new google.maps.Marker({
            animation: google.maps.Animation.DROP,
            draggable: true,
            position: myLatlng, 
            map: map
        });

        var dragListen = function(event) {
            google.maps.event.addListener(marker, 'dragend', function () {
                    document.getElementById("latitude").value = this.getPosition().lat();
                    document.getElementById("longitude").value = this.getPosition().lng();

                    latitude = parseFloat($('#latitude').val());
                    longitude = parseFloat($('#longitude').val());
                    myLatlng = {lat: latitude, lng: longitude};
                    console.log(latitude);
                    console.log(longitude);
                    locationHandler();
                    var newCenter = {
                            lat: latitude,
                            lng: longitude
                        };

                    map.setCenter(newCenter);
                    marker.setPosition(newCenter);

                });

        };

        dragListen();

        marker.setMap(map);

        $('#submit').click(function(){
            latitude = parseFloat($('#latitude').val());
            longitude = parseFloat($('#longitude').val());
            myLatlng = {lat: latitude, lng: longitude};
            console.log(latitude);
            console.log(longitude);
            locationHandler();
            var newCenter = {
                    lat: latitude,
                    lng: longitude
                };
            map.setCenter(newCenter);
            marker.setPosition(newCenter);

            });

    })(); 

    </script>
</body>

@stop