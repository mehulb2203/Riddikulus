<html>
	<head>
		<title>Login</title>

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

		<?php
		if (isset($_POST["login-submit"])) 
        {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "riddikulus";
			
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			if($conn->connect_error)
			{
				die("Connaction Failed: ".$conn->connect_error);
			}
			
			
			$sql="SELECT contact_no,password FROM users";
			 
			$result = $conn->query($sql);
			$tn = $result->num_rows;

			$contact_no = $_POST["contact_no"];
			
			$password = $_POST["password"];

			//$contact_no = "9826806507";
			
			//$password = "unnati@123"; 
			$flag = 0;
			
			if($result->num_rows > 0)
			{
				

				while($row = $result->fetch_assoc())
				{
					
					
					if((strcmp($contact_no,$row["contact_no"]) == 0) && (strcmp($password,$row["password"])==0))
					{
						if((strcmp($contact_no,"9876543210")==0)&& (strcmp($password,"admin")==0))
						{
							//echo "It is Admin login";
							$flag = 1;
							header('Location: map_admin.php');
						}
						else
						{
							//echo "Login successful";
							$flag = 1;
							header('Location: map.php');
						}
					}
						
				}

				if($flag == 0)
				{
					//echo "Login unsuccessful";
					header('Location: index.php');
				}

				$flag = 0;

				
			}
			else
			{
				//echo "Dataset is empty";
				header('Location: login.php');
			}
			
			
			$result->close();
		
			$conn->close();
			
		}
		?>


<div class="container-fluid" >
			<div class="row-fluid" style="width: 100%">
				        <div id="d01" class="col-lg-12 col-sm-12 col-xs-12 col-md-12 withimg" style="padding: 0px;width: 100%; height: 200px">

        </div>

					<div class="row-fluid" style="width: 100%">
						<center>.
							<br><br><br><br>
							<h1 style="font-family: sans-serif; color:rgb(130,130,130); text-shadow: 3px 3px black ; font-size: 3.5em"><b>LOGIN</b></h1>
						</center>
					</div>
					

					<div class="row">
						<form method="post">
							<section id="s01">
							<fieldset>
								<br>


								<label for="username">Mobile No</label>
                  				<input type="text" name="contact_no" id="contact_no" tabindex="1" class="form-control" placeholder="1234567890" value="<?php if(isset($_COOKIE['member_login'])) echo $_COOKIE['member_login']; ?>" autocomplete="on" required="" style="width: 200px;display: inline;margin-left: 20px;">
                  				<span class="error">*</span>
								<br><br>


								<label for="password">Password</label>
                  				<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off" required="" style="width: 200px;display: inline;margin-left: 20px;" <?php if(isset($_COOKIE['member_password'])) echo $_COOKIE['member_password']; ?> >
                  				<span class="error">*</span>
								<br><br>


								<input type="checkbox" tabindex="3" name="remember" id="remember" <?php if(isset($_COOKIE['member_password'])){ ?> checked <?php } ?> >
                      			
                      			<label for="remember" style="margin-top: 0px;"> Remember Me</label>
                      	
                      			<div id="errMsg">
           							<?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; 
	                  				unset($_SESSION['errMsg']);}
	                  				?>
        						</div>
								<input type="submit" name="login-submit" id="login-submit"  value="Submit">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="register.php"><span style="color: blue;"><b>CREATE A NEW ACCOUNT?</b></span></a>
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