<?php
     require '../../includes/funciones.php';   
     incluirTemplate('header');
    ?>


    <main class="contenedor seccion">
        <h1> crear </h1>


        <a href="/bienesRaices/admin/index.php" class="boton boton-verde-no-block">volver</a>


        <form class="formulario">
            <fieldset>
              <legend> Informacion General </legend>

              <label for="titulo">titulo</label>
              <input type="text" id="titulo" placeholder="nombre propiedad">

              <label for="precio"> Precio: </label>
              <input type="text" id="precio" placeholder="nombre propiedad">

              <label for="imagen"> imagen </label>
              <input type="file" id="imagen" accept="image/jpg , image/png">

              <label for="descripcion"> Descripcion </label>
              <textarea id="descripcion" ></textarea>

            </fieldset>
            
            <fieldset>

              <legend>Informacion Propiedad</legend>

              <label for="habitaciones">habitaciones</label>
              <input type="text" id="habitaciones" placeholder="cantidad de habitaciones" min="1" max="9">
 
              <label for="baños">baños</label>
              <input type="text" id="baños" placeholder="cantidad de baños" min="1" max="9">
              
              <label for="estacionamiento">estacionamiento</label>
              <input type="text" id="estacionamiento" placeholder="cantidad de coches">
       
             </fieldset>

             <fieldset>
                <legend>Informacion Vendedor</legend>
                <select>
                    <option value="1">Juan</option>
                    <option value="2">Mara</option>
                </select>

             </fieldset>
             
        </form>

        <input type="submit" value="crear propiedad" class="boton boton-verde-no-block">
    </main>


    <?php
        
        incluirTemplate('footer');
       ?>
   
</body>
</html>