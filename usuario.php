<?php
 //importar conexion
 require 'includes/config/database.php';
 $DB = conectar_DB();

//email y password
$email = "correo@correo.com";
$password = "1234567";

$passwHash = password_hash($password, PASSWORD_DEFAULT);

// querry

$query = "INSERT INTO usuarios(email, password) VALUES ('{$email}', '{$passwHash}')"; 

//agregar a base de datos
$ResultLogin = mysqli_query($DB, $query);
?>