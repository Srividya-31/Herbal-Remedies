<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Kalnia">

    <title>Ajwain</title>
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
      background-color: rgba(0, 0, 0, 0.7); /* Adjust the alpha value for the desired level of dimming */
    }
    .content {
      position: relative; /* Ensure content is above the overlay */
      z-index: 1; /* Ensure content is above the overlay */
      padding: 20px;
      color: #fff; /* Adjust text color for better visibility */
    }

        .container {
            
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        .chart-container {
             margin-top: 50px; /* Adjust the margin as needed */
             text-align: center;
             position: absolute; /* Set the position to absolute */
             top: 20px; /* Position at the top */
             left: 560px; /* Position at the left */
             width: 400px;
            height: 300px;
        }

        .chart-container .legend {
            color: black !important;
        }

        img {
            width: 400px;
            height: 250px;
            margin-top:30px;
            margin-left: 40px;
      
            border-radius: 8px;
           /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);*/
        }

        p {
            margin-top: 20px;
            font-size: 20px;
            line-height: 1.6;
            color: #fff;
        }

        .chart {
            width: 100%;
            height: 100%;
            background-color:white;
            
        }
        .heading {
    font-size: 44px;
    margin-left: 20px;
    color: white;
    text-decoration: underline;
    font-family: 'Kalnia';
    margin-top:10px;
    
}


    </style>
</head>
<body>
<div class="overlay"></div>
<div class="content">

    <div class="heading" >Bilva Patre:</div>

    <?php
        // PHP logic to set the image source and paragraph text
        $imageSrc = 'bilvamain.jpg'; // Replace with the actual path to your image
        $paragraphText = 'Bilva patra, also known as Bael or Bilva leaves, holds significant medicinal importance in traditional medicine systems, particularly in Ayurveda. Renowned for its diverse therapeutic properties, Bilva patra is recognized for its anti-inflammatory, anti-bacterial, and anti-viral attributes. It is widely used to treat digestive disorders, such as diarrhea and dysentery, owing to its astringent qualities. The leaves are also valued for their ability to alleviate respiratory conditions, including asthma and bronchitis. Additionally, Bilva patra is known for its role in managing diabetes, promoting cardiovascular health, and supporting the immune system. Its rich nutrient profile, including vitamins and minerals, contributes to its overall health-promoting effects, making it a versatile and esteemed herb in traditional medicine.






        ';
    ?>
<div class="chart-container">
        <canvas id="myRadarChart" class="chart"></canvas>
       
    </div>

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Include your script file -->
    <script src="bilva.js"></script>



    <div class="img">
        <img src="<?php echo $imageSrc; ?>" alt="Image Description">
        <p><?php echo $paragraphText; ?></p>
    </div>

    
</div>
</body>
</html>
