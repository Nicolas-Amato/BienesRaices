<?php
if(!isset($_SESSION)){
    session_start();    
}

$auht = $_SESSION['login'] ?? FALSE;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css"> 
</head>


<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra ">
                <a class="logo-header" href="/bienesraices/index.php">
                    <img src="/bienesraices/build/img/logo.svg" alt="logotipo Bienes Raices">
                </a>
                
                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono menu resposive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesraices/build/img/dark-mode.svg" alt="efecto-oscuro">

                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auht): ?>
                            <a href="cerrar-sesion.php">logout</a> 
                        <?php endif; ?>

                    </nav>
                </div>

            </div>        

            <?php if($inicio){ ?>
            <h1>Venta de Casas y Departamentos Exclusivos</h1> 
            <?php } ?>
        </div>
    </header>