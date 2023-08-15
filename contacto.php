<?php
   include './includes/templates/header.php';
?>



    <main class="contenedor seccion ">
        <h1> Contacto </h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="imagen/webp">
            <source srcset="build/img/destacada3.jpeg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="entrada blog">
        </picture>
        <h2> llenar el formulario de contacto </h2>
       
        <form class="formulario">
            <fieldset>

                <legend>Informacion Personal</legend>
                <label for="Nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="Nombre">
                
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">

                <label for="Telefono">Telefono</label>
                <input type="tel" placeholder="Tu telefono" id="Telefono">

                <label for="mensaje">mensaje</label>
                <textarea id="mensaje" ></textarea>

            </fieldset>
        </form>
        <form class="formulario">
            <fieldset>
                <legend>Informacion sobre la propiedad</legend>

                <label for="opciones">Compra o Venta</label>
                <select id="opciones">
                    <option value="">--seleccione--</option>
                    <option value="compra">Compra</option>
                    <option value="Venta">Venta</option>
                </select>

                <label for="Precio">Precio o Presupuesto</label>
                <input type="number" placeholder="tu precio o presupuesto" id="Precio">
            </fieldset>

            <fieldset>
                <legend> Contacto </legend>

                <p>como desea ser contactado</p>
                <div class="forma-contacto">
                    
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto"  type="radio" value="Telefono" id="contactar-telefono">

                    <label for="contactar-Email">Email</label>
                    <input name="contacto" type="radio" value="Email" id="contactar-Email">

                </div>

                <p>Si eliguio telefono, seleccione el dia y la hora</p>

                <label for="Dia">Fecha: </label>
                <input type="date" id="Dia">

                <label for="Hora">Hora: </label>
                <input type="time" id="Hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde-block">
        </form>

       

    </main>
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.hmtl">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright"> Derechos reservados para FitoA &copy</p>
    </footer>


    <script src="build/js/bundle.min.js"></script>
</body>
</html>