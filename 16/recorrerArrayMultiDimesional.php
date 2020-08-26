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
            <h2>Foreach Arreglos Multidimensionales</h2>
            <ul>
                <?php
                    // recorrido de array persona y luego solo se recorre el array datos
                    // ejemplo Persona -> datos
                    // as es para renombrar el arreglo
                    foreach($persona ['datos'] as $person):
                ?>
                <li> <?php echo $person; ?> </li>

                <?php endforeach; ?>

                <?php
                    // recorrido de array persona y luego solo se recorre el array lenguaje
                    // ejemplo Persona -> lenguaje
                    // as es para renombrar el arreglo
                    // para cerrar un foreach se agregan dos puntos al final y luego la etiqueta endforeach;
                    // ejemplo foreach($persona as $leng): endforeach;
                    foreach($persona as $leng):
                ?>
                    <?php
                        //validando si existe el arreglo front-end dentro del arreglo persona
                        // con el metodo array_key_exists de la sigueinte forma Persona -> front-end
                        // para cerrar un if se agregan dos puntos al final y luego la etiqueta endif;
                        // ejemplo if (array_key_exists('front-end',$leng)): endif;                    
                        if (array_key_exists('front-end',$leng)):
                    ?>
                        <h2>Lenguajes De Fron End</h2>
                        <?php foreach($leng ['front-end'] as $fron): ?>
                            <li> <?php echo $fron; ?> </li>                      
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php
                        //validando si existe el arreglo back-end dentro del arreglo persona
                        // con el metodo array_key_exists de la sigueinte forma Persona -> back-end
                        // para cerrar un if se agregan dos puntos al final y luego la etiqueta endif;
                        // ejemplo if (array_key_exists('back-end',$leng)): endif;                    
                        if (array_key_exists('front-end',$leng)):
                    ?>
                        <h2>Lenguajes De back End</h2>
                        <?php foreach($leng ['back-end'] as $back): ?>
                            <li> <?php echo $back; ?> </li>                      
                        <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
            </ul>
           
        </div>
    </div>




  </body>
</html>
