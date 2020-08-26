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
                // for loops
                //partes del for loops 
                //primera parte es declarar variable $i = 0;
                //segunda parte hasta donde queremos validar o tiene que revisar el for $i <100;
                //tercera parte la variable va sumando un numero cada ves que recorre el ciclo $i++
                for ($i = 0; $i <= 100; $i++){
                    echo $i . '<br>';
                }
            ?>
            <hr>
            <?php
                // for loops con condicion
                for ($i = 0; $i <= 100; $i++){
                    if ($i == 5){
                        echo "Cinco <br>";
                        // el continue es para que regrese el siglo for y no termine en la condicion
                        continue;
                    }
                    if ($i == 10){
                        echo "diez <br>";
                        continue;
                    }
                    echo $i . '<br>';
                }
            ?>
            <hr>
            <?php
                // for loops que muestra solos numeros pares mediante una condicion
                for ($i = 0; $i <= 500; $i++){
                    if ($i % 2 == 0){
                        echo $i . '<br>';
                    }
                }
            ?>
            <hr>
            <?php
                // arreglo
                $tecnologias = array ('CSS','HTML','JavaScript','jQuery','Python');

                //recorriendo arreglo con un for loops
                for ($i = 0; $i < count ($tecnologias); $i++){
                    echo $tecnologias[$i] . '<br>';
                }
            ?>
        </div>
    </div>




  </body>
</html>
