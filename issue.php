<!DOCTYPE html>
<html>
  <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm0f6mbXlF8xGjg8-3S1y66LQO8YVOqdM&libraries=places" type="text/javascript"></script>


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

  #map-canvas{
    width: 300px;
    height: 300px;
  }


   
  </style>

   <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
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
                      <li >
                        <a href="map.php">Map</a>
                      </li>                      
                      <li class="active" >
                        <a href="issue.php">Register an issue</a>
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
<div class="row-fluid" style="width: 100%">


          <div class="row-fluid" style="width: 100%">
            <center>.
              <h1 style="font-family: sans-serif; color:rgb(130,130,130); text-shadow: 3px 3px black ;font-size: 3.5em;"><b></b>REGISTER AN ISSUE</h1>
            </center>
          </div>




          

          <div class="row">
              <form method="post">
              <section id="s01" style="margin-left: 30px;">
              <fieldset>
                <br>
                <label>Mobile:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type = "text" name = "contact_no" class="form-control" placeholder="Contact Number" required="" style="width: 200px;display: inline;margin-left: 20px;" >  
                <span class="error">*</span>
                <br><br>
                <label>Category:</label>  &nbsp;
                  <select name="category" style="width: 200px;height:30px ;display: inline;margin-left: 20px; " id="category">
                    <option value="Women safety">Women Safety</option>
                    <option value="Crime safety">Crime safety</option>
                    <option value="Noise Pollution">Noise Pollution</option>
                    <option value="Potholes">Potholes</option>
                    <option value="Damaged Infrastructure">Damaged Infrastructure</option>
                    <option value="Garbage">Garbage</option>
                    <option value="Others">Others</option>
                  </select> 
                <span class="error">*</span>
                <br><br>

                <label>Description:</label>
                <textarea rows="1" id="description" name="description" placeholder="Enter Text Here......." required="" style="width: 200px;display: inline;margin-left: 10px;padding: 5px" ></textarea>
                <span class="error">*</span>
                <br><br>

              <div class="row">
                <div class="col-lg-4">
                  <center>
                  <h2>Add location</h2></center><br>
                  <div id="dvMap" style="width: 100%px; height: 300px"></div>
                  
                  <script type="text/javascript">
                        window.onload = function () {
                            var mapOptions = {
                                center: new google.maps.LatLng(18.9527, 72.8351),
                                zoom: 14,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            var infoWindow = new google.maps.InfoWindow();
                            var latlngbounds = new google.maps.LatLngBounds();
                            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                            google.maps.event.addListener(map, 'click', function (e) {
                                
                                document.getElementById("latitude").value = e.latLng.lat();
                                document.getElementById("longitude").value = e.latLng.lng();
                            });
                        }
                    </script><br>
                    <label>lat:</label>
                    <input type="text" id="latitude" name="latitude" value="">&nbsp;&nbsp;
                    <label>lng:</label> 
                    <input type="text" id="longitude" name="longitude" value="">    
                    <br><br>.           
                </div>
                
                <div class="col-lg-4">
                  <center><h2>Add Image</h2></center><br>
                  <input type="file" name="image" id="image" /> 
                                  
                </div>

                <div class="col-lg-4">
                  <center><h2>Sound Pollution</h2></center><br>
                  <label>Sound Decibel:</label>  &nbsp;
                  <select name="sound" style="width: 200px;height:30px ;display: inline;margin-left: 20px; " id="sound">
                    <option value="normal">normal</option>
                    <option value="medium">medium</option>
                    <option value="high">high</option>
                    <option value="Extreamly high">Extreamly high</option>
                  </select> 
                </div>
                
              </div>

              </fieldset>
              </section>

              <input type="submit" name="insert" id="insert" value="Insert" />
            </form>             
          </div>
      </div>

     <div class="row-fluid">
      <footer>Copyright &copy; Riddikulus &nbsp;   .</footer>
    </div>
    </div>  


    <?php

    if (isset($_POST["insert"])) 
        {
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

      // prepare and bind
      $stmt = $conn->prepare("INSERT INTO issues (category,contact_no,description,image,sound,loc_latitude,loc_longitude,status,date_issue,upvote,downvote) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssbsddssii",$category,$contact_no,$description,$file,$sound,$loc_latitude,$loc_longitude,$status,$date_issue,$upvote,$downvote);

      // set parameters and execute
      
      $category = $_POST["category"];
      $contact_no = $_POST["contact_no"];
      $description = $_POST["description"];
      /*
      if(isset($_FILES['image'])){
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      }
      */

      if(!empty($_FILES) && isset($_FILES['image'])){
        //echo $_FILES['image']['tmp_name'];
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      }
      else
      {
        $file = "No image available";
      }
      $sound = $_POST["sound"];
      
      $loc_latitude = $_POST["latitude"];
      $loc_longitude = $_POST["longitude"];
      $status = "Not resolved";
      $date_issue = date("Y-m-d h:i:sa");
      $upvote = 0;
      $downvote = 0;
      
      
      
      $stmt->execute();

      
      if($stmt)
      {
        header('Location: map.php');
        //echo "New User created successfully";
      }
      else{
        header('Location: register.php');
        //echo "Unsuccessful";
      }
      
      //echo "New User created successfully";

      $stmt->close();
      $conn->close();
    }
    ?>

    
  </body>
</html>