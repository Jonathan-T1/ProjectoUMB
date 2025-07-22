<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Administrador de Tareas</title>
</head>

<body>
  <?php include 'components/Navbar.php'; ?>

  <div id="contenido">
    <?php
    if (isset($_GET['pagina'])) {
      $pagina = $_GET['pagina'];
      $permitidas = ['cuenta', 'cursos', 'tablero', 'calendario', 'bandeja', 'historial', 'ayuda'];

      if (in_array($pagina, $permitidas)) {
        include "layaouts/$pagina.php";
      } else {
        echo "<h2>Error</h2><p>Página no encontrada.</p>";
      }
    } else {
      echo "<h1>Bienvenido</h1><p>Selecciona una opción del menú para ver el contenido.</p>";
    }
    ?>
  </div>
  <h1>prueba general</h1>

</body>

</html>