<?php

   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>


    <main class="contenedor seccion">
        <h1> Anuncios </h1>

        <?php 
         $limit = 9;
         include 'includes/template/anuncios.php'
        ?>
    </main>



<?php
  
 incluirTemplate('footer');
?>

    
</body>
</html>