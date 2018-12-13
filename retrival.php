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

<?php

$con = mysqli_connect("localhost","root","","riddikulus");
                 mysqli_select_db($con,"issues");

                      if (!$con) 
                         {
                            die("Connection failed: " . mysqli_connect_error());
                         }

        $selectquery = "select * from issues";
        $selectqueryexec = mysqli_query($con, $selectquery);                 
                         
        while($row = mysqli_fetch_assoc($selectqueryexec))
                {                 
            
                            if($row['loc_latitude']==18.972216956349612 && $row['loc_longitude']==72.8301280449291)
                            {
                              echo " Status : ";
                              echo " ".$row['status']." ";
                              echo " <br><br> ";
                              break;
                            }  
                              
                }

              $upvotevar=0;
              $downvotevar=0;

$con = mysqli_connect("localhost","root","","riddikulus");
                 mysqli_select_db($con,"issues");

                      if (!$con) 
                         {
                            die("Connection failed: " . mysqli_connect_error());
                         }

        $selectquery = "select * from issues";
        $selectqueryexec = mysqli_query($con, $selectquery);                 
        

        while($row = mysqli_fetch_assoc($selectqueryexec))
                {                 
            
                    if($row['loc_latitude']==18.972216956349612 && $row['loc_longitude']==72.8301280449291)
                        {

                              $upvotevar = $row['upvote'];
                              $downvotevar = $row['downvote'];

                        }

                }

                
              

                echo "Upvotes are: ";   

                //echo "<input type='button' name='likebtn' value='likebutton'> ";


                echo " " .$upvotevar."<br><br>";   
                
                echo "Downvotes are: ";   

                //echo "<input type='button' name='dislikebtn' value='dislike button'> ";

                echo " " .$downvotevar."<br><br>";
                

                
                 



$con = mysqli_connect("localhost","root","","riddikulus");
                 mysqli_select_db($con,"issues");

                      if (!$con) 
                         {
                            die("Connection failed: " . mysqli_connect_error());
                         }

        $selectquery = "select * from issues";
        $selectqueryexec = mysqli_query($con, $selectquery);                 
                         
        while($row = mysqli_fetch_assoc($selectqueryexec))
                {                 
            
                    if($row['loc_latitude']==18.972216956349612 && $row['loc_longitude']==72.8301280449291)
                        {
                             
                            echo " description of problem is:   \t". $row['description'] . "<br><br>";
                            mysqli_close($con);
                            exit();  

                        }

                }   
        mysqli_close($con);
        exit();        

?>


    
  </body>
</html>