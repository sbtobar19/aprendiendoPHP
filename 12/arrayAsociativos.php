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
                //array asociativos
                $persona = array (
                    'nombre' => 'santiago',
                    'apellido' => 'bohorquez', 
                    'pais' => 'chile'
                );
            ?>
            <pre>
                <?php 
                // impresion de array completo
                    print_r($persona);
                ?>
            </pre>

            <?php
            // impresion de array asociativo mediante llaves
                echo $persona ['nombre'];
            ?>

            <pre>
                <?php 
                // impresion de array cambiando llaves por numeros
                    print_r(array_values($persona));
                ?>
            </pre>

            <pre>
                <?php 
                // impresion las llaves del array
                    print_r(array_keys($persona));
                ?>
            </pre>

        </div>
    </div>




  </body>
</html>
