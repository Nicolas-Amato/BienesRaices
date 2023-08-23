<?php

function conectar_DB(){

    $DB = mysqli_connect('localhost', 'root', 'shaggo05', 'bienesraices_CRUD');

    if(!$DB){
        echo "no se conecto";
        exit;
    }

    return $DB;
}

?>