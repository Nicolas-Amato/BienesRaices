<?php
  //base de datos
  require '../../includes/config/database.php';
  $DB = conectar_DB();


  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
   }
    
    
  require '../../includes/funciones.php';   
  incluirTemplate('header');

        
?>

    <main class="contenedor seccion">
        <h1> Generar Publicacion Propiedad </h1>


        <a href="/admin" class="boton boton-verde-no-block">volver</a>
        <input type="submit" value="crear propiedad" class="boton boton-verde-no-block">


        <form class="formulario" method="POST" action="/bienesRaices/admin/propiedades/crear.php">
            <fieldset>
              <legend> Informacion General </legend>

              <label for="titulo">titulo</label>
              <input type="text" id="titulo" name='titulo' placeholder="nombre propiedad">

              <label for="precio"> Precio: </label>
              <input type="NUMBER" id="precio" name='precio' placeholder="preciod propiedad" min="1">

              <label for="imagen"> imagen </label>
              <input type="file" id="imagen" name='imagen' accept="image/jpg , image/png">

              <label for="descripcion"> Descripcion </label>
              <textarea id="descripcion" name="descripcion" ></textarea>

            </fieldset>
            
            <fieldset>

              <legend>Informacion Propiedad</legend>

              <label for="habitaciones">habitaciones</label>
              <input type="number" id="habitaciones" name='habitaciones' laceholder="cantidad de habitaciones" min="1" max="9">
 
              <label for="WC">baños</label>
              <input type="number" id="WC" name='WC' placeholder="cantidad de baños" min="1" max="9">
              
              <label for="estacionamiento">estacionamiento</label>
              <input type="number" id="estacionamiento" name='estacionamiento' placeholder="cantidad de coches" min="1" max="9">
       
            </fieldset>

            <fieldset>
              <legend>Informacion Vendedor</legend>
               <select name="vendedor">
                   <option value="1">rodolfo</option>
                   <option value="2">Mara</option>
               </select>

            </fieldset>
             
        </form>

        
        
    </main>


    <?php
        
        incluirTemplate('footer');
    ?>
   
</body>
</html>