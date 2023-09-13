<?php

   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>


    <main class="contenedor seccion">
        <h1> Anuncios </h1>

        <?php 
         include 'includes/template/anuncios.php'
        ?>
    </main>



<?php
  
 incluirTemplate('footer');
?>

    
</body>
</html>