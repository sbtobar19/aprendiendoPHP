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
          <h2>Agenda Telefonica</h2>            
            <?php
                $agenda = array();

                function guardarUsuario($nombre, $telefono){
                  // accesiendo a variable global (arreglo)
                  // para almacenar valores
                  global $agenda;
                  //el signo [] es para guardar en el ultimo elemento del array
                  //agregando los valores de la funcion al arreglo
                  $agenda [] = array($nombre,$telefono);
                }
                //insertando valores en el arreglo mendiante la funcion
                guardarUsuario("Santiago", "1234");
                guardarUsuario("Miguel", "5678");
                guardarUsuario("Camila", "4862");

                echo "<pre>";
                    //imprimiendo arreglo
                    var_dump($agenda);
                echo "</pre>";
                echo "<hr>";


                function mostrarUsuarios($id){
                  global $agenda;
                  //almacenado el valor de la variable id que de la funcion en la variable usuario
                  //la variable de la funcion se le agrega al arreglo para mostrar los valores
                  //almacenados ya existente en el arreglo
                  $usuario = $agenda[$id];
                  //recorriendo los valores almacenado en la variable Usuario
                  foreach($usuario as $user){
                    //imprimiendo valores de la variable Usuario
                    echo $user . '<br>';
                  }
                }
                // imprimiendo el primar valor que se almaceno en el arreglo 
                // mediante los valores almacenados en la funcion guardarUsuario
                mostrarUsuarios(1);
            ?>
        </div>
    </div>




  </body>
</html>
