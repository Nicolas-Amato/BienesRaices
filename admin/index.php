<?php


    $mensajeWEB = $_GET['mensaje'] ?? null;

     require '../includes/funciones.php';   
     incluirTemplate('header');
    ?>


    <main class="contenedor seccion">
        <h1> Administrador </h1>
        <?php if($mensajeWEB == 1):?>
            <p class="alerta exito"> anuncio creado correctamente </p>
        <?php endif;?>

        <a href="/bienesraices/admin/propiedades/crear.php" class="boton boton-verde-no-block"> Nueva Propiedad </a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <th>
                    <tr>1</tr>
                    <tr>casa en la playa</tr>
                    <tr> <img src="../imagen/1f2bbaab32e878c781145e0665ef4b5a.jpg" class="imagen-repo"></tr>
                    <tr>$ 252000</tr>
                    <tr>
                       <a href="">eliminar</a>
                       <a href="">actualizar</a>
                    </tr>
                </th>
                
        
            </tbody>
        </table>







    </main>


    


    <?php
        
        incluirTemplate('footer');
       ?>
   
</body>
</html>