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
              //condiciones
              if(1 < 2){
                echo "1 es menor";
              }
              else{
                echo "1 es mayor";
              }

              echo "<hr>";

              if(1 < 0){
                echo "1 es menor";
              }
              else{
                echo "1 es mayor";
              }

              echo "<hr>";

              // validaciones con variables
              $edadUno = 12;
              $edadDos = 12;
              if($edadUno < $edadDos){
                echo $edadUno.  " Es Menor";
              }
              elseif ($edadUno == $edadDos){
                echo $edadUno.  " Es Igual Que " . $edadDos;
              }
              else{
                echo $edadUno.  " Es Mayor ";
              }

              echo "<hr>";

              // mescla de operadores
              $numeroUno = 10;
              if($numeroUno % 2 == 0){
                echo "El Numero Es Par";
              }
              else {
                echo "El Numero Es Impar";
              }
            ?>
            <hr>

        </div>
    </div>




  </body>
</html>
