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
                //array multi anidados
                $persona = array (
                    'datos' => array (
                        'nombre' => 'santiago',
                        'apellido' => 'bohorquez', 
                        'pais' => 'chile'
                    ),
                    'lenguajes' => array(
                        'front-end' => array('css','html5','javaScript','jQuery'),
                        'back-end' => array('php','mysql','python','angular'),
                    ) 
                );
            ?>
            <pre>
                <?php
                //impresion de los array
                    print_r($persona);
                    print_r($persona['datos']);
                    print_r($persona['lenguajes']['front-end']);
                    print_r($persona['lenguajes']['back-end']);
                    print_r($persona['lenguajes']['front-end'][2]);
                ?>
            </pre>
           
        </div>
    </div>




  </body>
</html>
