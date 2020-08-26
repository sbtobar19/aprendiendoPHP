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
              //secuencias de validacion switch
              $lenguaje = "PHP";

              switch($lenguaje){
                case 'PHP':
                  echo "BackEnd";
                // break es para cerrar la secuencia Switch  
                break;

                case 'JavaScript':
                  echo "Front End y BackEnd (NodeJS)";
                // break es para cerrar la secuencia Switch  
                break;
                
                case 'HTML5':
                  echo "Front End";
                // break es para cerrar la secuencia Switch  
                break;

                // default es para un valor fuera de los detallados como un else
                default:
                  echo "Valor No Valido";
                break;
              }
            ?>
            <hr>

        </div>
    </div>




  </body>
</html>
