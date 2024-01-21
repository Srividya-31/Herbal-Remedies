<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleint.css">


    <form action="process_form.php" method="post">
    <!-- Form fields as usual -->
</form>

    <title>Form</title>
</head>
<style>
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


<div class="header">
  	<h2>Submit Form</h2>
  </div>
    <form action="process_form.php" method="post">
       
           



        <div class="input-group">
        <label for="category">Category:</label>
        <select name="category" required id="category">
            <option>Select</option>
            <option value="cold">Cold</option>
            <option value="cough">Cough</option>
            <option value="fever">Fever</option>
            <option value="headache">Headache</option>
            <option value="stomachpain">Stomach Pain</option>
            <option value="handpain">Handpain</option>
            <!-- Add more options as needed -->
        </select><br>
        </div>


        

    <!-- Your form fields go here -->
    <div class="input-group">
        <input type="submit" class="btn" value="Submit">
    </div>
  </div>
</form>




        

        <!-- Inside the <body> section of your HTML file -->
<div class="ball"></div>

    </form>
</div>
</body>
</html>
