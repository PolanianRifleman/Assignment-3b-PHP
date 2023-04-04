<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    <link rel="stylesheet" href="styles.css">
    <title>ANSWER</title>
  </head>

  <body>
    
    <?php
    $d = $_POST['d'];
    if (strspn($d, '1234567890'))
    {
        $r = $_POST['d']/2;
        echo "
            <p>
                The diameter of the circle is: " .$_POST['d'], "<br>",
                "The radius of the circle is: " .$_POST['d']/2, "<br>",
                "The area of the circle is: " .$r*$r*M_PI, "<br>",
                "The circumference of the circle is: " .$r*M_PI*2,
            "</p>";
    
    if (strspn($d, 'glognut'))
            echo "
            <h1> GET OUT OF HERE HARRIS</h1>";
    }
    else
    {
        echo "<h1>INVALID INPUT</h1>";
    }
    ?>
    
  </body>
  
</html>