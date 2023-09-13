<?php

   require 'includes/funciones.php';   
   incluirTemplate('header', $inicio = true);

?>


    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos En Venta</h2>
        <?php 
         $limite = 3;
         include 'includes/template/anuncios.php'
        ?>


        <div class="img-contacto">
            <h3> Encuentra la Casa de Tus Sueños </h3>
            <p>llena el formulario de contacto y un asesor se contactara a la brevedad</p>
            <a class="boton-amarillo" href="contacto.html">Contacto</a>
    
        </div>

    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">                    
                    <picture>
                        <source srcset="build/img/blog1.webp" type="imagen/webp">
                        <source srcset="build/img/blog1.jpeg" type="imagen/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>guia para decorar tu casa con tu estilo</h4>
                        <p class="info-meta"> escrito por <span> 20/10/2023</span> por: <span>Admin</span></p>
                        <p>consejos para cosntriur una terrasa en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>     
            </article>

            <article class="entrada-blog">
                <div class="imagen">                    
                    <picture>
                        <source srcset="build/img/blog2.webp" type="imagen/webp">
                        <source srcset="build/img/blog2.jpeg" type="imagen/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>guia para decorar tu casa con tu estilo</h4>
                        <p class="info-meta"> escrito por <span> 20/10/2023</span> por: <span>Admin</span></p>
                        <p>consejos para cosntriur una terrasa en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>

            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimonios</h3>

            <div class="testimonial">
                <blockquote>
                    el personal se comporto de una forma exelente. muy buenaq atencion y la casa me quedo como esperaba
                </blockquote>
                <p>Nicolas Amato</p>
            </div>
        
        </section>

    </div>

<?php   
   incluirTemplate('footer');
?>




