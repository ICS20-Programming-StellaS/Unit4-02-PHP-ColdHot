 <!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Cold or hot, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Cold or Hot</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Cold or Hot";?></h1></center>

    <!-- Image -->
    <?php
      echo '<center><img src= "./image/hot_cold.jpg" alt="Hot or Cold" width="30%" height="auto"></center>';
    ?>

    <!-- user input -->
    <form action="./results.php" method="post" target="results">  
      <label for=temperature">Termperature in (°C) :</label>
      <input type="number" name="temperature">
      <br>
      <br>

      <input type="submit" value="What's it like out?">
      
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">	
      </iframe>
      
    </form></center>
    <br>
    <br>
  </body>
</html>