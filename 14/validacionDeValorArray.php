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
                $tecnologias = array ('css','html5','javaScript','jQuery');
                //primera forma de validacion si un valor existe en un array
                $existe = in_array('html5',$tecnologias);
            ?>
            <pre>
                <?php
                //impresion de los array
                    var_dump($existe);
                ?>
            </pre>

            <pre>
                <?php
                //impresion de los array
                    print_r($existe);
                ?>
            </pre>

            <?php
                $tecnologias = array ('css','html5','javaScript','jQuery');
                //validacion si un valor existe en un array
                $existe = in_array('php',$tecnologias);
            ?>
            <pre>
                <?php
                //impresion de los array
                    var_dump($existe);
                ?>
            </pre>

            <pre>
                <?php
                //impresion de los array
                    print_r($existe);
                ?>
            </pre>

            <?php
                //array asociativos
                $persona = array (
                    'nombre' => 'santiago',
                    'apellido' => 'bohorquez', 
                    'pais' => 'chile'
                );
            ?>

            <?php
                //segunda forma de validacion si un valor existe en un array
                $existe2 = in_array('pedro', array_values($persona));
            ?>

            
            <pre>
                <?php
                    //impresion de los array
                    var_dump($existe2);
                ?>
            </pre>

            <pre>
                <?php
                //impresion de los array
                    print_r($existe2);
                ?>
            </pre>

           
        </div>
    </div>




  </body>
</html>
