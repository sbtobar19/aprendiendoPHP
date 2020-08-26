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
                $premier_league = array ('Chelsea', 'Mnachester City', 
                                         'Mnachester United', 'Tottenham', 
                                         'Arsenal', 'Liverpool' , 'Leicester')
            ?>

            <?php
                // ciclo While
                $i = 0;

                //validando que arreglo tenga valores
                if(count($premier_league) > 0){

                    // recorriendo el arreglo con mediante while
                    // si el valor de la variable es menor al del array recorre e imprime el array
                    // y le suma 1 a la variable a cada recorrido que realiza
                    while($i < count($premier_league)){
                        echo "{$premier_league[$i]} <br>";
                        
                        //condicion para terminar el ciclo while
                        // si el valor de la variable mas uno es igual a valor del array imprime el texto
                        if($i + 1 === count($premier_league)){
                            echo "Fin";
                        }

                        // aumentando el valor de la variable en cada recorrido
                        $i++;
                    }
                }
                // validancion en caso de que el array no tenga valores
                else {
                    echo "No hay resultados";
                }
                ?>

        </div>
    </div>




  </body>
</html>
