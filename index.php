<DOCTYPE html>
<html lang="en-ca">
  <head>
    
     <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of Trapezoid Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-red.min.css" /> 
    
    <!-- Title -->
    <title>Calculating the Area of a Trapezoid in PHP</title>
  </head>
  <body>
    <?php echo "<h1>Calculating the Area of a Trapezoid in PHP with User Input</h1>"; ?>
    
    <!-- Div -->
    <div id="div">
      <?php
        echo "<h4>Your Input:</h4>";
      ?>

    <!-- Image -->
    <center>
    <img src="./images/trapezoid.png" width="300" length="300" alt="Trapezoid Image">
    </center>

    <!-- Form for user input -->
      <form action="./results.php" method="post" target="display-result">
        <label for="height">Height of the trapezoid (in cm)</label>
        <input type="float" name="height" placeholder="Height..."><br><br>
        <label for="side-a">Length of side A (in cm)</label>
        <input type="float" name="side-a" placeholder="Side A length..."><br><br>
        <label for="side-b">Length of side B (in cm)</label>
        <input type="float" name="side-b" placeholder="Side B length..."><br><br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>
    </div>
    
    <!-- Iframe to display results -->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>