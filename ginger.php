<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Kalnia">

    <title>Styled Image and Paragraph with Dark Background Image in PHP HTML</title>
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
            height: auto;
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

    <div class="heading" >Ginger :</div>

    <?php
        // PHP logic to set the image source and paragraph text
        $imageSrc = 'gingermain.jpg'; // Replace with the actual path to your image
        $paragraphText = 'Ginger, a versatile spice, holds significant medicinal importance attributed to its anti-inflammatory properties, digestive benefits, and nausea relief. With proven efficacy in alleviating pain, supporting cardiovascular health, and potentially exhibiting anti-cancer properties, ginger emerges as a potent natural remedy. Its immune-boosting, antioxidant, and antibacterial features contribute to overall well-being, while its role in blood sugar regulation and respiratory health further underscores its therapeutic potential. As a traditional remedy for various ailments, including menstrual pain and weight management, ginger holistic health benefits make it a valuable addition to a balanced lifestyle, though consultation with a healthcare professional is advised for personalized guidance.';
    ?>
<div class="chart-container">
        <canvas id="myChart" class="chart"></canvas>
       
    </div>

    <!-- Include Chart.js library -->
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include your script file -->
    <script src="ginger.js"></script>



    <div class="img">
        <img src="<?php echo $imageSrc; ?>" alt="Image Description">
        <p><?php echo $paragraphText; ?></p>
    </div>

    
</div>
</body>
</html>
