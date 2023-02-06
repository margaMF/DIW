<?php 
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    if(isset($_POST["enviar"]) && !empty($_POST["enviar"])){

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $id = $_POST['id'];
        $genero = $_POST['genero'];
        $edad = $_POST['edad'];
        $observaciones = $_POST['observaciones'];
        $localidad = $_POST['localidad'];

        echo 'Nombre: '.$nombre;
        echo 'Apellidos: '.$apellidos;
        echo 'Identificador: '.$id;
        echo 'Genero: '.$genero;
        echo 'Edad: '.$edad;
        echo 'Observaciones: '.$observaciones;
        echo 'Localidad: '.$localidad;

    }
?
