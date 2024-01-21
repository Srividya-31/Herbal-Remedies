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
             left: 740px; /* Position at the left */
             width: 550px;
            height: 300px;
        }

        .chart-container .legend {
            color: black !important;
        }

        img {
            width: 500px;
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

button {
        position: absolute;
      top: 160%;
      left: 4%;
      padding: 10px;
      background:rgb(100,165,148,5);
    
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      
      /* Set the width and height of the button */
      width: 200px;
      height: 50px;

      font-size:25px;
      font-family:  'Times New Roman', serif; /* Set the desired font style */
      font-weight: bold;
      color:black;
      vertical-align: top; /* Align the text to the top */

    }

    #button1{
      top:160%;
      margin-left: 260px;
      
    }


    </style>
</head>
<body>
<div class="overlay"></div>
<div class="content">

    <div class="heading" >Ajwain(Sambrani):</div>

    <button id="button" onclick="window.location.href='homepage.php'">
View
</button>

<button id="button1" onclick="window.location.href='index1.php'">
Interact
</button>

    
</div>
</body>
</html>
