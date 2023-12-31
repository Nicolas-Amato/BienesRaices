<?php

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
  
    if(!$id){header('location:/');}

    
    require 'includes/funciones.php';   
    incluirTemplate('header');
    
//importar conexcion basa datos
    require 'includes/config/database.php';
    $DB = conectar_DB();

    //conaultar base de datos
    $query = "SELECT * FROM propiedades WHERE id = {$id}";
    
    //obtenes resultado
    $resuldatoAnuncio = mysqli_query($DB, $query);
    $propiedad = mysqli_fetch_assoc($resuldatoAnuncio);
?>

<main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo']; ?></h1>
        <img  loading="lazy" src="/BienesRaices/imagen/<?php echo $propiedad['imagen'];?>" alt="imagen anuncio">
         
    <div class="resumen-propiedad">

        <p class="precio"><?php echo number_format($propiedad['precio']); ?></p>
        <ul class="icono-caracteristicas">
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="icono anuncio">
                <p><?php echo $propiedad['WC']; ?></p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
        </ul>
           
        <p><?php echo $descripciones = $propiedad['descipcion']; ?></p>


          
        
       </div>
            
</main>

<?php
incluirTemplate("footer");
?>
</body>
</html>