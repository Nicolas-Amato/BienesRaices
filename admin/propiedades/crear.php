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
              <input type="file" id="imagen">

            </fieldset>
            




        </form>
    </main>


    <?php
        
        incluirTemplate('footer');
       ?>
   
</body>
</html>