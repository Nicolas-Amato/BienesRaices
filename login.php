<?php
 //conexion con base de datos
   require 'includes/config/database.php';
   $DB = conectar_DB();

   $errores = [];
  
  if($_SERVER['REQUEST_METHOD']  === 'POST' ){
   
    $email = mysqli_real_escape_string($DB, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($DB, $_POST['password']);

    if(!$email){
        $errores[] = 'Ingresa tu Email correctamente';
    }

    if(!$password){
        $errores[] = 'Tu password es obligatorio';
    }
    
    //VALIDAMOS SI EL PASS O USUARIOES CORRECTO 

    if(empty($errores)){
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultadoLogin = mysqli_query($DB, $query);

        if($resultadoLogin ->num_rows){
            //REVISAR SI EL EMAIL ES CORECTO
            $usuario = mysqli_fetch_assoc($resultadoLogin); 
            //REVISAR SI EL PASS ES CORECTO
            $auth = password_verify($password, $usuario['password']);


            if($auth){
                //autenticar usuario
                session_start();
                //llenavdo arreglo de sesion
                $_SESSION['usuario'] =  $usuario['email'];
                $_SESSION['login'] = TRUE;

                header('Location /admin');


            } else{
                $errores[] = 'password incorrecto, intente nuevamente';
            }
    
        }else {
            $errores[] = 'el Email ingresado es inexistente, porfavos ingrese un email';

        }


    }
  }

   //incluye header
   require 'includes/funciones.php';   
   incluirTemplate('header');
   
?>


<main class="contenedor seccion">
    <h1> Iniciar Sesion </h1>
    <?php foreach($errores as $error):?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

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
