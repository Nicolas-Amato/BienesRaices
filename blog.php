<?php

   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>

    <main class="contenedor seccion contenido-centrado">
        <h1> Blog </h1>

        <article class="entrada-blog">
            <div class="imagen">                    
                <picture>
                    <source srcset="build/img/blog1.webp" type="imagen/webp">
                    <source srcset="build/img/blog1.jpeg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>guia para decorar tu casa con tu estilo</h4>
                    <p> escrito por <span> 20/10/2023</span> por: <span>Admin</span></p>
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
                <a href="entrada.php">
                    <h4>guia para decorar tu casa con tu estilo</h4>
                    <p> escrito por <span> 20/10/2023</span> por: <span>Admin</span></p>
                    <p>consejos para cosntriur una terrasa en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>     
        </article>
        <article class="entrada-blog">
            <div class="imagen">                    
                <picture>
                    <source srcset="build/img/blog3.webp" type="imagen/webp">
                    <source srcset="build/img/blog3.jpeg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>guia para decorar tu casa con tu estilo</h4>
                    <p> escrito por <span> 20/10/2023</span> por: <span>Admin</span></p>
                    <p>consejos para cosntriur una terrasa en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>     
        </article>
        <article class="entrada-blog">
            <div class="imagen">                    
                <picture>
                    <source srcset="build/img/blog4.webp" type="imagen/webp">
                    <source srcset="build/img/blog4.jpeg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>guia para decorar tu casa con tu estilo</h4>
                    <p> escrito por <span> 20/10/2023</span> por: <span>Admin</span></p>
                    <p>consejos para cosntriur una terrasa en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>     
        </article>

    </main>
 <?php
    
   incluirTemplate('footer');
 ?>


    <script src="build/js/bundle.min.js"></script>
</body>
</html>