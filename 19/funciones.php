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

              //funciones
              function saludar (){
                echo "hola amigos";
              }
              //llamando funcion
              saludar();
            ?>

            <br>

            <?php  
              //funcion
              function suma (){
                echo 20 + 20;
              }
              //llamando funcion
              suma();
            ?>
          <h2>Agenda Telefonica</h2>            
            <?php
                //funcion
                function usuarios(){
                  echo "Santiago <br/>";
                  echo "1234-1234 <br/>";
                }
                //llamando funcion
                usuarios();
            ?>

        </div>
    </div>




  </body>
</html>
