<?php 

    require("Conexion.php");

    $url = "https://reclutamiento-14cf7.firebaseio.com/personas.json";
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];

    if($nombre==null || $apellido==null || $dni==null || !is_numeric($dni)){ //validacion simple
        echo "Reingrese datos";
        exit();
    }

    $value = array( 
        "nombre" => $nombre,
        "apellido" => $apellido,
        "dni" => $dni
    );

    $enviarJson = json_encode($value);
    $respuesta = Conexion::requestPOST($url, $enviarJson);
    
    if($respuesta){
        echo "Nuevo registro agregado.";
    }else{
        echo "Error, No se agrego.";
    }
?>
