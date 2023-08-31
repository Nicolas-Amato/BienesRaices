<?php
  //base de datos
  require '../../includes/config/database.php';
  $DB = conectar_DB();

   //campo vendedores

   $consulta = "SELECT * FROM vendedores";
   $consultaV = mysqli_query($DB, $consulta);

// variable para mortrar errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descipcion = '';
    $habitaciones = '';
    $WC= '';
    $estacionamiento = '';
    $vendedor_ID = '';
   
  
  if($_SERVER['REQUEST_METHOD']  === 'POST' ) {

    $titulo = mysqli_real_escape_string( $DB, $_POST['titulo']);
    $precio = mysqli_real_escape_string( $DB, $_POST['precio']);
    $descipcion = mysqli_real_escape_string( $DB, $_POST['descipcion']);
    $habitaciones = mysqli_real_escape_string( $DB, $_POST['habitaciones']);
    $WC= mysqli_real_escape_string( $DB, $_POST['WC']);
    $estacionamiento = mysqli_real_escape_string( $DB, $_POST['estacionamiento']);
    $vendedor_ID = mysqli_real_escape_string( $DB, $_POST['vendedor_ID']);
    $publicado = date('y/m/d');
    $imagen = $_FILES['imagen'];
    //vereficando completado de campos

    if(!$titulo){$errores[] = 'la Titulo es OBLIGATORIA';}
    if(!$precio){$errores[] = 'el precio es OBLIGATORIA';}
    if(strlen ($descipcion) < 50){$errores[] = 'la Descripcion es OBLIGATORIA';}
    if(!$habitaciones){$errores[] = 'la cantidad de habitaciones es OBLIGATORIA';}
    if(!$WC){$errores[] = 'la cantidad de baños es OBLIGATORIA';}
    if(!$estacionamiento){$errores[] = 'la cantidad OBLIGATORIA';}
    if(!$vendedor_ID){$errores[] = 'elige un vendedor';}
    //validando img o files
    if(!$imagen['name'] || $imagen['error']){
      $errores[] = 'la imagen es OBLIGATORIA';
    }
    //validando tamaño archivo

    $medida = 1000 * 1000;

    if(!$imagen['size'] > $medida ){
      $errores [] = 'el tamaño es demasiado GRANDE';
    }
    
    //verificandi validacion

    if(empty($errores)){
      //INSERTANDO EN BASE DE DATOS

      $query = " INSERT INTO propiedades (titulo, precio, descipcion,
      habitaciones, WC, estacionamiento, publicado, vendedores_ID, imagen) VALUES (
     '$titulo', '$precio', '$descipcion', '$habitaciones',
     '$WC', '$estacionamiento','$publicado', '$vendedor_ID', '$imagen') ";
     
     //ingresando  a BD
     $carpetaIMG = '../../imagen';

     if(!is_dir($carpetaIMG)){
      mkdir($carpetaIMG);
     }

     //subir imagen a BD

     move_uploaded_file($imagen['tmp_name'], $carpetaImg . '/archivo.jpg');


     //echo($query);
     $resultadoBD = mysqli_query($DB, $query);

      if($resultadoBD){
        header('location:/bienesraices/admin/index.php');
      }

    }    
} 
  
  require '../../includes/funciones.php';   
  incluirTemplate('header');

        
?>

    <main class="contenedor seccion">
        <h1> Generar Publicacion Propiedad </h1>
        <a href="/bienesRaices/admin/index.php" class="boton boton-verde-no-block">volver</a>
      
       <?php foreach ($errores as $error) : ?>
       <div class="alerta error">
        <?php echo $error; ?>
       </div>
       <?php endforeach; ?>


        <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/crear.php" enctype="multipart/form-data">
        

            <fieldset>
              <legend> Informacion General </legend>

              <label for="titulo">titulo</label>
              <input type="text" id="titulo" name='titulo' placeholder="nombre propiedad" value="<?php echo $titulo; ?>">

              <label for="precio"> Precio: </label>
              <input type="NUMBER" id="precio" name='precio' placeholder="preciod propiedad" min="1" value="<?php echo $precio; ?>">

              <label for="imagen"> imagen </label>
              <input type="file" id="imagen" accept="image/jpg , image/png" name="imagen">

              <label for="descipcion"> descripcion </label>
              <textarea id="descipcion" name="descipcion" >"<?php echo $descipcion; ?>"</textarea>

            </fieldset>
            
            <fieldset>

              <legend>Informacion Propiedad</legend>

              <label for="habitaciones">habitaciones</label>
              <input type="number" id="habitaciones" name='habitaciones' placeholder="cantidad de habitaciones" min="1" max="9" value="<?php echo $habitaciones; ?>">
 
              <label for="WC">baños</label>
              <input type="number" id="WC" name='WC' placeholder="cantidad de baños" min="1" max="9" value="<?php echo $WC;?>">
              
              <label for="estacionamiento">estacionamiento:</label>
              <input type="number" id="estacionamiento" name='estacionamiento' placeholder="ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
       
            </fieldset>

            <fieldset>
              <legend>Informacion Vendedor</legend>
               <select name="vendedor_ID">
                  <option value=''>--seleccione--</option>
                  <?php while($vendedor = mysqli_fetch_assoc($consultaV)) : ?>
                    <option <?php echo $vendedor_ID === $vendedor['id'] ? 'selected' : '' ?> value= "<?php echo $vendedor['id']?>"> <?php echo $vendedor["nombre"] ." ". $vendedor["apellido"];?> </option>
                  <?php endwhile; ?>
               </select>

            </fieldset>        

            <input type="submit" value='crear propiedad' class="boton boton-verde-no-block">    
        </form>

            
        
    </main>


    <?php
        
        incluirTemplate('footer');
    ?>
   
</body>
</html>