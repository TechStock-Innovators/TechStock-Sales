<?php
$config = parse_ini_file("./.ini", true);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStock</title>
    <link rel="stylesheet" href="./src/styles/globals.css">
    <link rel="stylesheet" href="./src/styles/header.css">
    <link rel="stylesheet" href="./src/styles/footer.css">
    <link rel="stylesheet" href="./src/styles/home.css">

    <!-- choose one -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body>
    <?php include "./src/components/header.php";?>
    <?php
        $page = match ($_SERVER["REQUEST_URI"]) {
            '/' => "./src/Pages/Home.php",
            '/sobre' => "./src/Pages/Sobre.php",
            '/recursos' => "./src/Pages/Recursos.php",
        };
        include $page; 
    ?>
    <?php include "./src/components/footer.php";?>
</body>
</html>