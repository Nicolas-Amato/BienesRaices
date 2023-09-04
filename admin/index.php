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
                <tr>
                    <td>1</td>
                    <td>casa en la playa</td>
                    <td> <img src="../imagen/1f2bbaab32e878c781145e0665ef4b5a.jpg" class="imagen-repo"></td>
                    <td>$ 252000</td>
                    <td>
                       <a href="" class="boton-rojo-block">eliminar</a>
                       <a href="" class="boton-amarillo-block">actualizar</a>
                    </td>
                </tr>
                
        
            </tbody>
        </table>







    </main>


    


    <?php
        
        incluirTemplate('footer');
       ?>
   
</body>
</html>