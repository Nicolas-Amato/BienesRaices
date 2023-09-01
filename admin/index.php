<?php


    $mensajeWEB = $_GET['mensaje'];
    

     require '../includes/funciones.php';   
     incluirTemplate('header');
    ?>


    <main class="contenedor seccion">
        <h1> Administrador </h1>
        <?php if(intval($mensajeWEB === 1)):?>
            <p class="alerta exito"> anuncio creado correctamente </p>
        <?php endif;?>

        <a href="/bienesraices/admin/propiedades/crear.php" class="boton boton-verde-no-block"> Nueva Propiedad </a>
    </main>


    


    <?php
        
        incluirTemplate('footer');
       ?>
   
</body>
</html>