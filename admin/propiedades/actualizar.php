<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();


if(!$auth){
  header('location: ../../login.php');
}


   //validando ID
   $propiedadId = $_GET['id'];
   $propiedadId= filter_var($propiedadId, FILTER_VALIDATE_INT);
   
   if(!$propiedadId){
    header('location: ../index.php');
   }

   
   //importar coneccion desde base de datos
   require '../../includes/config/database.php';
   $DB = conectar_DB();




   //CONSULTA PROPIEDAD
   
   $consulta = "SELECT * FROM propiedades WHERE id = {$propiedadId}";
   $resultado = mysqli_query($DB, $consulta);
   $actualizar = mysqli_fetch_assoc($resultado);

   //CONSULTA VENDEDORES
   $consulta = "SELECT * FROM vendedores";
   $consultaV = mysqli_query($DB, $consulta);

   // variable para mortrar errores
    $errores = [];
       
    $titulo = $actualizar['titulo'];
    $precio = $actualizar['precio'];
    $descipcion = $actualizar['descipcion'];
    $habitaciones = $actualizar['habitaciones'];
    $WC= $actualizar['WC'];
    $estacionamiento = $actualizar['estacionamiento'];
    $vendedor_ID = $actualizar['vendedores_id'];
    $imagen =  $actualizar['imagen']; 
   
  
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
    
    //validando tamaño archivo
    $medida = 1000 * 1000;
    if(!$imagen['size'] > $medida ){
      $errores [] = 'el tamaño es demasiado GRANDE';
    }
    
    //verificando validacion imagenes
    
    if(empty($errores)){

      //creando carpeta
      $carpetaIMG = '../../imagen/';
      if(!is_dir($carpetaIMG)){
       mkdir($carpetaIMG);
      }

      //eliminar foto para actualizarla
      if($imagen['name']){
        //borra la imagen anterios en caso de subir una nueva 
        unlink($carpetaIMG . $actualizar['imagen']);
        //genera numero randon de ID
        $nombreImgRandon = md5( uniqid( rand(), true ) ) .".jpg";
        // movemos el archivo  
        move_uploaded_file($imagen['tmp_name'], $carpetaIMG . $nombreImgRandon);
      } else {
        $nombreImgRandon = $actualizar['imagen'];
      }
     
      // parametros de Query
      $query = " UPDATE propiedades SET titulo = '{$titulo}', precio = {$precio}, imagen = '{$nombreImgRandon}', descipcion = '{$descipcion}', habitaciones = {$habitaciones}, WC = {$WC},
      estacionamiento = {$estacionamiento}, vendedores_id = {$vendedor_ID} WHERE id = {$propiedadId}";
     

     echo($query);

     //consulta a la base de dataos  echo($query);
     $resultadoBD = mysqli_query($DB, $query); 

      if($resultadoBD){
        header('location:/bienesraices/admin/index.php?mensaje=2 ');
      }

    }    
  } 
  
    
  incluirTemplate('header');
         
?>

    <main class="contenedor seccion">
        <h1> Actualizar Publicacion Propiedad </h1>
        <a href="/bienesRaices/admin/index.php" class="boton boton-verde-no-block">volver</a>
      
       <?php foreach ($errores as $error) : ?>
       <div class="alerta error">
        <?php echo $error; ?>
       </div>
       <?php endforeach; ?>


        <form class="formulario" method="POST" enctype="multipart/form-data">
        

            <fieldset>
              <legend> Informacion General </legend>

              <label for="titulo">titulo</label>
              <input type="text" id="titulo" name='titulo' placeholder="nombre propiedad" value="<?php echo $titulo; ?>">

              <label for="precio"> Precio: </label>
              <input type="NUMBER" id="precio" name='precio' placeholder="preciod propiedad" min="1" value="<?php echo $precio; ?>">

              <label for="imagen"> imagen </label>
              <input type="file" id="imagen" accept="image/jpg , image/png" name="imagen">
              <img  class="imagen-small" src="/imagen/<?php echo $imagen ?>" >

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

            <input type="submit" value='Actualizar propiedad' class="boton boton-verde-no-block">    
        </form>

            
        
    </main>


    <?php
        
        incluirTemplate('footer');
    ?>
   
</body>
</html>