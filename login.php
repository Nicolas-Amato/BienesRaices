<?php

   require 'includes/config/database.php';
   $DB = conectar_DB();

   $errores = [];
  
  if($_SERVER['REQUEST_METHOD']  === 'POST' ){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $email = mysqli_real_escape_string($DB, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($DB, $_POST['password']);

    if(!$email){
        $errores[] = 'Tu Email es incorrecto o no Valido';
    }

    if(!$password){
        $errores[] = 'Tu password es obligatorio';
    }

    echo "<pre>";
    var_dump($errores);
    echo "</pre>";
  }





   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>


<main class="contenedor seccion">
    <h1> Iniciar Sesion </h1>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Usuario y Contraseña</legend>

            <label for="email">email </label>
            <input type="text" name="email" placeholder=" Tu email" id="email" require>

            <label for="password">password </label>
            <input type="password" name="password" placeholder="password" id="password" require>

        </fieldset>

        <input type="submit" value="Inicar Sesion" class="boton-verde-no-block">

    </form>

      
</main>


<?php
  
 incluirTemplate('footer');
?>
