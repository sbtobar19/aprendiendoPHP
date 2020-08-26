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
            <?php
                // imprimiendo variables php 
                  $hola = "Hola Mundo";
                  $numero = 20;

                  // etiqueta ."\n" es para darle separacion a una impresion
                  echo $hola."\n";
                  // etiqueta ."<br />" es para dar un salto de linia a la impresion
                  echo $numero."<br/>";

                  // imprimiendo variables html+php  
                  echo $hola,"\n";
                  $saludos = "<h1>hola</h1>";
                  echo $saludos;
            ?>
        </div>
    </div>




  </body>
</html>
