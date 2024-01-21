<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Button Example</title>
  <style>
    /* You can add some styling if needed */
    button {
        position: absolute;
      top: 160%;
      left: 1%;
      padding: 10px;
      background-image: url('sambrani.jpg'); 
    
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      
      /* Set the width and height of the button */
      width: 200px;
      height: 200px;

      font-size:25px;
      font-family:  'Times New Roman', serif; /* Set the desired font style */
      font-weight: bold;
      color:white;
      vertical-align: top; /* Align the text to the top */

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

    /* Additional styling for the content inside the body */
    .content {
      position: relative; /* Ensure content is above the overlay */
      z-index: 1; /* Ensure content is above the overlay */
      padding: 20px;
      color: #fff; /* Adjust text color for better visibility */
    }

    
    #button1{
      margin-top: 250px;
      background-image: url('brahmi300.png'); 
      left:1%;
    }

    #button2{
      top:160%;
      margin-left: 210px;
      background-image: url('tulasi300.png'); 
    }
    
    #button3{
        margin-top: 250px;
      margin-left: 210px;
      background-image: url('turmeric300.png'); 
    }

    #button4{
      top:160%;
      margin-left: 420px;
      background-image: url('ginger300.png'); 
    }

    #button5{
        margin-top: 250px;
      margin-left: 420px;
      background-image: url('bilva300.png'); 
    }

    #button6{
      top:160%;
      margin-left: 630px;
      background-image: url('garike3001.jpg'); 
    }

    #button7{
        margin-top: 250px;
      margin-left: 630px;
      background-image: url('neem3001.jpg'); 
    }
    

    #button8{
      top:160%;
      margin-left: 840px;
      background-image: url('peppermint300.png'); 
    }

    #button9{
        margin-top: 250px;
      margin-left: 840px;
      background-image: url('amla300.png'); 
    }
    
  </style>
 
</head>
<body>
<div class="overlay"></div>
<div class="content">
 
<button id="button" onclick="window.location.href='ajwain.php'">

Ajwain
</button>  

<button id="button1" onclick="window.location.href='brahmi.php'">
Brahmi
</button>

<button id="button2" onclick="window.location.href='tulsi.php'">
Tulasi
</button>

<button id="button3" onclick="window.location.href='turmeric.php'" >
<h2>Turmeric</h2>
</button>

<button id="button4" onclick="window.location.href='ginger.php'" >
Ginger
</button>
<button id="button5" onclick="window.location.href='bilvapatre.php'">
Bilva Patre
</button>

<button id="button6" onclick="window.location.href='garike.php'"
 >
Garike
</button>

<button id="button7" onclick="window.location.href='neem.php'">
Neem
</button>

<button id="button8" onclick="window.location.href='peppermint.php'"
>
Peppermint
</button>

<button id="button9" onclick="window.location.href='amla.php'"
>
Amla
</button>





</div>
</body>
</html>
