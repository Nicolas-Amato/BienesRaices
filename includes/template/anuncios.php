<?php
//importar conexcion basa datos
require 'includes/config/database.php';
$DB = conectar_DB();

//conaultar base de datos
$query = "SELECT * FROM propiedades LIMIT $limit";

//obtenes resultado
$resuldatoAnuncio = mysqli_query($DB, $query);

?>

<div class="contenedor-anuncio">
  <?php while($propiedad = mysqli_fetch_assoc($resuldatoAnuncio)): ?>
      <div class="anuncio">
         <div class="reacomodar">
          <img class="acomodar-img" loading="lazy" src="/BienesRaices/imagen/<?php echo $propiedad['imagen'];?>" alt="imagen anuncio">
         </div>        
        
         <div class="contenido-anuncio">

         <h3><?php echo $propiedad['titulo']; ?></h3>
         <?php 
            $cantidad=50;
            $descripciones = $propiedad['descipcion']; 
            $descripcion = (strlen($descripciones)>$cantidad) ? substr($descripciones,0,$cantidad).'...' : $descripciones;?>
          <p><?php echo $descripcion;?></p>
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

          <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo">
           ver propiedad
          </a>
         </div>
      </div>
   <?php endwhile; ?>

</div>

<?php
 mysqli_close($DB);
 ?>

