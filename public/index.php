<?php global $config; session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>TechStock</title>
    <?php
      $path = "styles/";
      $diretorio = dir($path);
      while($arquivo = $diretorio->read()){
        echo '<link rel="stylesheet" href=/'.$path.$arquivo.'>';
      }
      $diretorio->close();
    ?>

    <link rel="icon" href="/assets/Logo 2.png">
    <!-- choose one -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  </head>
  <body>
    
    <?php 
    require '../App/autoload.php';
    
    use App\core\App;
    use App\core\Controller;
    
    $app = new App();
    
    ?>
    <script>
        feather.replace();
    </script>
  </body>
</html>