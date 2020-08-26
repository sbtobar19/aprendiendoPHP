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
                //funcion con valores por defectos
                function usuarios($nombre = 'Santiago Bohorquez', $telefono = '00000000'){
                  
                  // almacenando y retornando el vclor de la variable 
                  // nombre y telefono en la variable contacto
                  return $contacto = $nombre . " " . $telefono;

                }
                //alamcenando funcion y sus valores en variable
                $usuario =  usuarios('Santiago','1234-1234');

                // imprimiendo variable que almacena funcion
                echo $usuario;
                echo "<hr>";

                //asignando un valor vacio a la funcion y imprimiendola
                $usuario2 = usuarios("", "123");
                echo $usuario2;
                echo "<hr>";

                //llamando metodo y cambiandole el valor de variable nombre asignado por defecto a juan 
                //me mostrara el valor que cambiamos mas el numero por defecto que definimos
                $usuario3 = usuarios("juan");
                echo $usuario3;

            ?>
        </div>
    </div>




  </body>
</html>
