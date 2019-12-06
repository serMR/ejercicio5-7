<?php
class Conexion{

    public static function requestPOST($url, $enviarJson){
        
        $conexion = curl_init();
        curl_setopt($conexion, CURLOPT_URL, $url);
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($conexion, CURLOPT_POST, true);
        curl_setopt($conexion, CURLOPT_POSTFIELDS, $enviarJson);

        $response = curl_exec($conexion);
        $http_code = curl_getinfo($conexion, CURLINFO_HTTP_CODE);

        ($http_code >=200) && ($http_code<300) ? $ok= TRUE : $ok= FALSE;

        curl_close($conexion);
        return $ok;
    }

    public static function requestGET($url){
        
        $conexion = curl_init();
        curl_setopt($conexion, CURLOPT_URL, $url);
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($conexion, CURLOPT_HTTPGET, 1);

        $respuesta = curl_exec($conexion);
        $http_code = curl_getinfo($conexion, CURLINFO_HTTP_CODE);

        if($http_code >=200 && $http_code<300){
            $respuestaArray = json_decode($respuesta, true);
        }else {
            $respuestaArray= null;
        }
        curl_close($conexion);
        return $respuestaArray;
    }

}

?>