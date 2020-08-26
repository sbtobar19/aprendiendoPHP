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
          <h2>Descripción Producto</h2>   
          <pre>
                <?php
                    //mostrando valores de la url existente en la pagina Principal 
                    //al momento de acceder a la pagina de productos
                    var_dump($_GET);
                 ?>
          </pre>
          <hr> 
          <!--imprimiendo los valores existente en la url existente en la pagina Principal-->
          <!--separandolos mediante su valor-->
          <p>ID: <?php echo $_GET['id']; ?></p>        
          <p>Nombre: <?php echo $_GET['nombre']; ?></p>   
        </div>
    </div>




  </body>
</html>
