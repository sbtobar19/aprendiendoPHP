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
                echo "<h2>Primer Array</h2>";
                echo "<br>";
                // versiones anteriores De Array 
                $tecnologias = ['CSS','HTML','JavaScript','jQuery',20];

                //contadar de elementos en array primera forma
                echo "<hr>";  
                echo "<br>";
                echo "primera forma Imprimir Contador De Array "; 
                echo "<br>";
                  print_r($tecnologias);
            ?>
              
            <pre>
                <?php 
                    // impresion en formato de tabla
                    echo "<hr>";  
                    echo "<br>";
                    echo "Segunda forma Imprimir Contador De Array ";
                    echo "<br>";
                    print_r($tecnologias); 
                ?>
            </pre>

            <pre>
                <?php
                      // impresion en formato de tabla mas su tipo de dato y su largo
                      echo "<hr>";  
                      echo "<br>";
                      echo "Tercera forma Imprimir Contador De Array ";
                      echo "<br>";
                      var_dump($tecnologias);
                ?>
            </pre>  
            <hr>

        </div>
    </div>




  </body>
</html>
