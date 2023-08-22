<?php

   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>

    <main class="contenedor seccion">
        <h1>Conose Sobre Nosotros</h1>
        
        <section class="contenido-nosotros">
            <div class="img-nosotros">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpeg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="img nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de Experiencia
                </blockquote>
                <p> ñLorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Expedita natus at labore provident tenetur.
                    Quam dolor dicta ipsum, excepturi voluptas odio ea,
                    officiis enim ullam pariatur atque in nemo? Doloremque.
                    ñLorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Expedita natus at labore provident tenetur.
                    Quam dolor dicta ipsum, excepturi voluptas odio ea,
                    officiis enim ullam pariatur atque in nemo? Doloremque
                </p>
    
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Minus sint at, hic dolorum laboriosam veritatis rem praesentium esse qui sapiente fuga eaque ipsa
                </p>
            </div>
        </section>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>
                    lit. Dolorem consequatur repudiandae aut deserunt, consectetur quidem eligendi
                    accusamus nobis doloremque corrupti saepe iste possimus eos
                </p>
                
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>
                    lit. Dolorem consequatur repudiandae aut deserunt, consectetur quidem eligendi
                    accusamus nobis doloremque corrupti saepe iste possimus eos
                </p>
                
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono seguridad" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    lit. Dolorem consequatur repudiandae aut deserunt, consectetur quidem eligendi
                    accusamus nobis doloremque corrupti saepe iste possimus eos
                </p>
                
            </div>
        </div>
    </section>

    <?php
    
      incluirTemplate('footer');
    ?>

</body>
</html>