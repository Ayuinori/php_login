
<?php
    // inicio do sistema
    session_start();

    // constante de controle
    define('CONTROLO', true);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/icons8-globe-16.png" type="image/png">
    <title>Clube</title>
</head>
<body>
    <h1>Clube</h1>
<?php

    //requerer meus scripts
    require_once('../libs/config.php');
    require_once('../libs/EasyPDO.php');
    require_once('../libs/function.php');

    // sistema de rotas
    require_once('rotas.php');
?>

<script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>