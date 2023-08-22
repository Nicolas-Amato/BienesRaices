<?php

   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>


    <main class="contenedor seccion contenido-centrado">
        <h1> Casa Del Lago </h1>
        <picture>
            <source srcset="build/img/anuncio1.webp" type="imagne/webp">
            <source srcset="build/img/anuncio1.jpeg" type="imagne/jpeg">
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="imagen anuncio">
        </picture>

        <div class="resumen-propiedad">

            <p class="precio"> $ 3.000.000 </p>

            <ul class="icono-caracteristicas">
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="icono anuncio">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p>3</p>
            </li>
           </ul>
           
           <p> casa en el lago con exelente vista, acabados de lujo a un exelente precio
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio labore reprehenderit+
            repudiandae explicabo, voluptas porro aspernatur vel quaerat maxime, recusandae quia
            magnam repellat assumenda quasi quod dignissimos cupiditate. Natus, laborum?
            asa en el lago con exelente vista, acabados de lujo a un exelente precio
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio labore reprehenderit+
            repudiandae explicabo, voluptas porro aspernatur vel quaerat maxime, recusandae quia
            magnam repellat assumenda quasi quod dignissimos cupiditate. Natus, laborum?
            </p>


          
        
        </div>

            
        
    </main>
<?php 
   incluirTemplate('footer');
   
?>

</body>
</html>