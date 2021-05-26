<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
      //impersiones de texto 
      echo"<h1>Hola mundo</h1>";

      //variables
      $nombre="Kevon Diaz";
      $edad=15 ;

      //<h3>minombre edad: 23 años</h3>
      echo '<h3>'.$nombre.'edad: '.$edad.'años </h3> ';

      //edad += 10
      $edad .= $nombre;
      echo '<h3>' .edad. '</h3>';

      //condicionales
      if($edad > 17){
        echo '<h3>Es mayor de edad</h3>';
    } else {
        echo '<h3>Es menor de edad</h3>';
    }
?>
 </body>  
 </html>

   

