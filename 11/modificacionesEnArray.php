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
                //versiones anteriores de crear array
                $tecnologias = ['CSS','HTML','JavaScript','jQuery'];
            ?>
            
            <pre>
                <?php   
                    //impresion de array
                    print_r($tecnologias);
                ?>
            </pre>

            <?php
                //agregando un elemento a arreglo
                $tecnologias [] = 'Python';

                $tecnologias [5] = 'Java';
            ?>

            <pre>
                <?php 
                    //impresion de array
                    print_r($tecnologias);
                ?>
            </pre>

            <?php
                //borrar ultimo elemento y almacenarlo en variable de un array
                //almacenando ultimo valor del array en una variable
                $java = array_pop($tecnologias);
            ?>
            <h1>
               <?php  
                    //imprimiendo variable con valor de array
                    echo $java; 
                ?>
            </h1>
            <?php
                //borrar el primer elemento de un array
                unset($tecnologias[0]);
            ?>
            <hr>
            <pre>
                <?php 
                    //impresion de array
                    print_r($tecnologias);
                ?>
            </pre>

            <?php
                //borrar el primer elemento de un array y agregarlo a variable
                $html = array_shift($tecnologias);
            ?>
            <hr>
            <h1>
               <?php  
                    //imprimiendo variable con valor de array
                    echo $html; 
                ?>
            </h1>

            <pre>
                <?php 
                    //impresion de array
                    print_r($tecnologias);
                ?>
            </pre>


            <?php
                //borrar ciertos elementos y agregar otros en el orden que uno desee
                //el numero uno es de donde se borrara y luego el otro numero uno es cuantos se borraran
                //luego le agremos un nuevo valor al array
                $array = array_splice($tecnologias, 1,1, array('AngularJS'));
            ?>
            <hr>
            <pre>
                <?php 
                    //impresion de array
                    print_r($array);
                ?>
            </pre>
            <pre>
                <?php 
                    //impresion de array
                    print_r($tecnologias);
                ?>
            </pre>

        </div>
    </div>




  </body>
</html>
