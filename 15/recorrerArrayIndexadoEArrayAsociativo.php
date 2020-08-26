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
                // primer ejemplo
                $tecnologias = array ('CSS','HTML','JavaScript','jQuery','Python');
            ?>
            <h2>Lenguajes que Conozco</h2>
            <!--forma de imprimir un array en una lista-->
            <ul>
            <?php
                // foreache que recorre array para imprimirlo
                foreach($tecnologias as $tecnologias):
            ?>
                <li><?php 
                        // impresion del array
                        echo $tecnologias; 
                    ?>
                </li>
            <?php
            // termino del ciclo foreach
                endforeach;
            ?>
            </ul>
            <!--fin de la forma de imprimir un array en una lista-->


            <?php
                // Segundo ejemplo            
                $persona = array (
                    'nombre' => 'Santiago',
                    'apellido' => 'Bohorquez', 
                    'pais' => 'Chile'
                );
            ?>

            <h2>Datos Personales</h2>
            <!--forma de imprimir un array asociativo en una lista-->
            <ul>
                <?php
                     // primero forma de recorrer un arreglo para mostrar sus llaves y valores
                     // se agrega el arreglo luego la llave y por ultimo el valor
                     // ejemplo de recorrido de foreach
                     // array persona -> nombre -> Santiago
                    foreach($persona as $key => $val):
                ?>
                    <li><?php 
                            // impresion del array concatendo mas un caracter
                            echo $key . ': ' . $val; 
                        ?>
                    </li>                    
                <?php
                    //termino del ciclo foreach
                    endforeach;
                ?>
            </ul>

            <h2>Datos Personales</h2>
            <!--forma de imprimir un array asociativo en una lista-->
            <ul>
                <?php
                     // segunda forma de recorrer un arreglo para mostrar sus  valores
                     // se agrega el arreglo y luego l el valor
                     // ejemplo de recorrido de foreach
                     // array persona -> Santiago
                    foreach($persona as $val):
                ?>
                    <li><?php 
                            // impresion de los valores del array
                            echo $val; 
                        ?>
                    </li>                    
                <?php
                    //termino del ciclo foreach
                    endforeach;
                ?>
            </ul>

           
        </div>
    </div>




  </body>
</html>
