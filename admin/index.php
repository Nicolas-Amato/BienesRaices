<?php
 //importar coneccion
 require '../includes/config/database.php';
 $DB = conectar_DB();

 //escribir el query

 $query = "SELECT * FROM propiedades";

  //consulta BD
$ResulBD = mysqli_query($DB, $query);



    $mensajeWEB = $_GET['mensaje'] ?? null;

    // incluye template
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
             <?php while($listado = mysqli_fetch_assoc($ResulBD)) : ?>
                <tr>
                    <td><?php echo $listado['id'] ?></td>
                    <td><?php echo $listado['titulo']?></td>
                    <td> <img src="../imagen/<?php echo $listado['imgen'] ?>" class="imagen-repo"></td>
                    <td><?php echo $listado['precio']?></td>
                    <td>
                       <a href="" class="boton-rojo-block">eliminar</a>
                       <a href="" class="boton-amarillo-block">actualizar</a>
                    </td>
                </tr>

             <?php endwhile; ?> 
        
            </tbody>
        </table>







    </main>


    


    <?php
        
        incluirTemplate('footer');
       ?>
   
</body>
</html>