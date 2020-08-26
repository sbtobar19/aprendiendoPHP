<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
          <h2>Agenda Telefonica</h2>            
            <?php
                //funcion con parametros
                function usuarios($nombre, $telefono){
                  // impresion de variables de la funcion
                  echo $nombre . "<br/>";
                  echo $telefono . "<br/>";
                  echo "<hr>";
                }
                //llamando funcion y agregandole valores
                usuarios('Santiago','1234-1234');

                //llamando funcion y agregandole valores
                usuarios('Miguel','9876-9876');

                //llamando funcion y agregandole valores
                usuarios('Pedro','4567-4567');
            ?>
        </div>
    </div>




  </body>
</html>
