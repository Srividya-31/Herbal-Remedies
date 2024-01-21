<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
.positioned-text {
            position: relative;
            top: 100px; /* Adjust as needed */
            left: 30px; /* Adjust as needed */
            color: white;
            font-size: 72px;
            font-family: 'Times New Roman', serif;
            font-weight: bold;
        }

		.position-text {
            position: relative;
            top: 140px; /* Adjust as needed */
            left: 45px; /* Adjust as needed */
            color: white;
            font-size: 35px;
            font-family: 'Times new roman', sans-serif;
            /* font-weight: bold;*/
        }

        body{
        background-image: url('background.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
  background-size: cover; /* Adjust the background size as needed */
  background-repeat: repeat;
  background-attachment: fixed;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for the desired level of dimming */
    }
    .con {
      position: relative; /* Ensure content is above the overlay */
      z-index: 1; /* Ensure content is above the overlay */
      padding: 20px;
      color: #fff; /* Adjust text color for better visibility */
    }
  

	</style>
  <body>
  <div class="overlay"></div>
	<div class="positioned-text">Explore the Healing</div>
	<div class="positioned-text">World of Medicinal Plants!</div>
	<div class="position-text">Learn how to use these green treasures</div>
	<div class="position-text">for your well-being.</div>
  <div class="header">
  	<h2>Login</h2>
  </div>
      
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  </div>

   


  
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
      </div> 
</body>
  </div>
</html>