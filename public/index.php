<?php global $config; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>TechStock</title>
    
    <link rel="stylesheet" href="/styles/globals.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <link rel="stylesheet" href="/styles/home.css">
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