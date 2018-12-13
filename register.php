<html>
	<head>
		<title>Register</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  <style>

  #d01{
    background: url(header-image.jpg) no-repeat center; 
    background-size: cover;
}


.error {color: #FF0000;}

#s01{
	margin-left: 39%;
}


footer {
    color: black;
    background-color: rgb(213,213,213);
    clear: left;
    text-align: right;
    border-radius: 7px 7px 0px 0px;
   bottom:0;
   width: 98%;
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



	</head>
	<body>
		<!-- Code for registration -->
		<?php

		if (isset($_POST["register-submit"])) 
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
			$stmt = $conn->prepare("INSERT INTO users (contact_no,user_name,email_id,password) VALUES (?,?,?,?)");
			$stmt->bind_param("ssss",$contact_no,$user_name,$email_id,$password);

			// set parameters and execute
			
			/*
			$age = $_POST["age"];
			$edu = $_POST["edu"];
			$income = $_POST["income"];
			$gen = $_POST["gen"];
			*/

			$contact_no = $_POST["contact_no"];
			$user_name = $_POST["user_name"];
			$email_id = $_POST["email_id"];
			$password = $_POST["password"];
			//$admin = 0;
			
			
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
<div class="container-fluid" >
			<div class="row-fluid" style="width: 100%">
				        <div id="d01" class="col-lg-12 col-sm-12 col-xs-12 col-md-12 withimg" style="padding: 0px;width: 100%; height: 200px">

        </div>

					<div class="row-fluid" style="width: 100%">
						<center>.
							<br><br><br>
							<h1 style="font-family: sans-serif; color:rgb(130,130,130); text-shadow: 3px 3px black ; font-size: 3.5em"><b>REGISTER</b></h1>
						</center>
					</div>

					

					<div class="row">
							<form method="post">
							<section id="s01">
							<fieldset>
								<br>
								<label>Username:</label>  <input type = "text" name = "user_name" class="form-control" placeholder="Username" required="" style="width: 200px;display: inline;margin-left: 20px;" >	
								<span class="error">*</span>
								<br><br>

								<label>Mobile:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type = "text" name = "contact_no" class="form-control" placeholder="Contact Number" required="" style="width: 200px;display: inline;margin-left: 20px;" >	
								<span class="error">*</span>
								<br><br>

								<label>Password:</label> <input type = "password" name = "password" class="form-control" placeholder="password" required="" style="width: 200px;display: inline;margin-left: 20px;">
								<span class="error">*</span>
								<br><br>
								<label>Email:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" class="form-control" placeholder="abc@xyz.com" name = "email_id" required="" style="width: 200px;display: inline;margin-left: 20px;">
								<span class="error">*</span>
								<br><br>
								<input type="submit" name="register-submit" id="register-submit"  value="Submit">
								<br><br>
							</fieldset>
							</section>
						</form>							
					</div>
			</div>

		<div class="row-fluid">
			<footer>Copyright &copy;Riddikulus &nbsp;   .</footer>
		</div>


	</body>
</html>

