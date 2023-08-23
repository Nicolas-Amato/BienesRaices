<?php

function conectar_DB(){

    $DB = mysqli_connect('localhost', 'root', 'shaggo05', 'BD_bienesraices');

    if($DB){
        echo "se conecto";
    }else {
        echo "no se conecto";
    }
}

?>