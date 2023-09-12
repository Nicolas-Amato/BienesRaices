<?php


//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

 //importar coneccion
 require '../includes/config/database.php';
 $DB = conectar_DB();

 //escribir el query

 $query = "SELECT * FROM propiedades";

  //consulta BD
 $ResulBD = mysqli_query($DB, $query);

 $mensajeWEB = $_GET['mensaje'] ?? null;


 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){

        //delete imagen
        $query = "SELECT imagen FROM propiedades WHERE id = {$id}";
        $resultado = mysqli_query($DB, $query);
        $propiedades = mysqli_fetch_assoc($resultado);

        unlink('./imagen/' . $propiedades['imagen']);

        //delete propiedasdes
        $query = "DELETE FROM propiedades WHERE id = {$id}";
        $resultado = mysqli_query($DB, $query);

        if($resultado){
            //redireccionar al usuario
            header('location/admin');
        }
    }
 }

 // incluye template
 require '../includes/funciones.php';   
 incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1> Administrador </h1>
        <?php if($mensajeWEB == 1):?>
            <p class="alerta exito"> Anuncio Creado Correctamente </p>
        <?php elseif($mensajeWEB == 2):?>
            <p class="alerta exito"> Anuncio Actualizado Correctamente </p>
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
                    <td> <img src="../imagen/<?php echo $listado['imagen'];?>" class="imagen-repo"></td>
                    <td> $ <?php echo $listado['precio']?></td>
                    <td>

                    <form method="POST" class="W-100">
                    <input type="HIDDEN" href="" name="id" value=<?php echo $listado['id'] ?>>

                    <input type="SUBMIT" href="" class="boton-rojo-block" value="Eliminar">

                    </form>

                    <a href="../admin/propiedades/actualizar.php?id=<?php echo $listado['id']; ?>" class="boton-amarillo-block">actualizar</a>
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