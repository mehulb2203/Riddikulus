<!DOCTYPE html>
<html>
  <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
   

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm0f6mbXlF8xGjg8-3S1y66LQO8YVOqdM&callback=initMap">
    </script>



    <style>

    #map {
        height: 700px;
        position: relative; 
        width: 100%;
       }

  #d01{
    background: url(header-image.jpg) no-repeat center; 
    background-size: cover;
}

.fond{position:absolute;padding-top:85px;top:0;left:0; right:0;bottom:0;
 background-color:#00506b;}

.style_prevu_kit
{
    display:inline-block;
    border:0;
    position: relative;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1); 
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1); 
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);   

}
.style_prevu_kit:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.5);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.5);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.5);
    transition: all 200ms ease-in;
    transform: scale(1.1);
}
footer {
    color: black;
    background-color: rgb(213,213,213);
    clear: left;
    text-align: right;
    width: 98%;
    border-radius: 7px 7px 0px 0px;
    position: absolute;
}

.b01{
  background-color: transparent;
  border: none;
  font-size: 1em;
  color: #aaaaaa;

}

.b01:hover{
  background-color: transparent;
  border: none;
  font-size: 1em;
  color: #ffffff;

}


    
  </style>
<script>
      function initMap() {
        var locations = [
      ['Bondi Beach   Category:Women safety &nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.957732932266254, 72.8094513762951, 12],
      ['Korba Mithinagar Category:Crime safety&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 19.013995660302193, 72.8649243569696, 11],
      ['Gandhi Market Category:Women safety&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.972216956349612, 72.8301280449291, 10],
      ['Ganesh Patel Nagar Category:Noise Pollution&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.987287057145863,72.83754207804418, 5],
      ['Khada Parsi Statue Category:Damaged Infrastructure&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.977646147061236, 72.84399032592773, 3],
      ['Reay Road Category:Garbage&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 19.03161239237521, 72.85866737365723, 1],
      ['K Shantaram Pujare Chowk Category:Damaged Infrastructure&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>',19.02559691196033,72.88551726126877, 9],
      ['Rukhsmani Hospital Category:Potholes  &nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.96234222952174, 72.81857886774719, 2],
      ['Wadi Bandar Category:Potholes&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.96234222952174, 72.81857886774719, 8],
      ['Lower Parel Category:Damaged Infrastructure&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.96234222952174, 72.81857886774719, 7],
      ['TArdeo Category:Damaged Infrastructure&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.96234222952174, 72.81857886774719, 6],
      ['Topaz Category:Potholes&nbsp;&nbsp;<a href="http://localhost/final/retrival1.php">view more</a>', 18.96234222952174, 72.81857886774719, 4]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(18.96234222952174, 72.81857886774719),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length-9; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: {
          url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        }
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

        for (i = locations.length-9; i < locations.length-7; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: {
          url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
        }
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

        for (i = locations.length - 7; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: {
          url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
        }
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }



    google.maps.event.addListener(map, 'click', function (e) {
                                
                                document.getElementById("latitude").value = e.latLng.lat();
                                document.getElementById("longitude").value = e.latLng.lng();
                            });

    var lati = homeMarker.getPosition().lat();
    var long = homeMarker.getPosition().lng();


       /* var uluru = {lat: 19.075984, lng: 72.877656};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

        var uluru2 = {lat: 25.975984, lng: 72.077656};
        var marker2 = new google.maps.Marker({
          position: uluru2,
          map: map
        });*/
      }
    </script>

  </head>


  <body>

    <div class="container-fluid">
      <div class="row-fluid">
        <div id="d01" class="col-lg-12 col-sm-12 col-xs-12 col-md-12 withimg" style="padding: 0px;width: 100%; height: 200px">
          <div class="row">
            <div class="col-lg-9 "></div>

            <div class="col-lg-3 ">
              <div>
              <br>
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <ul class="nav navbar-nav">
                      <li class="active" >
                        <a href="map.php">Map</a>
                      </li>
                      <li >
                        <a href="retrival1.php">Issue Status</a>
                      </li>
                      <li >
                        <a href="index.php">Logout</a>
                      </li>
                    </ul>
                </div>
                </nav>
              </div>
              </div>
          </div>


        </div>
      </div>.
      <br>
<?php

$servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "riddikulus";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }


 ?>

    <div class="row-fluid" id="map" style="border: 2px solid black">
      
    </div>
                        <label>lat:</label>
                    <input type="text" id="latitude" name="latitude" value="">&nbsp;&nbsp;
                    <label>lng:</label> 
                    <input type="text" id="longitude" name="longitude" value="">  
                    <br><br>

                                        <input type="text" id="latitude1" name="latitude1" value="">&nbsp;&nbsp;
                    <label>lng:</label> 
                    <input type="text" id="longitude1" name="longitude1" value="">  

     <div class="row-fluid">
      <footer>Copyright &copy; Riddikulus &nbsp;   .</footer>
    </div>
    </div>  

    
  </body>
</html>