
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> Mostrar Personas </title>
</head>

<body>
<?php
    
    require ("Utilities/Conexion.php");
    $url = "https://reclutamiento-14cf7.firebaseio.com/personas.json";
    $respuestaArray = Conexion::requestGET($url);

    if($respuestaArray){
        echo "<h2 align= 'center'> PERSONAS:</h2>";
        echo "<table align= 'center' cellpadding=5px>";
        echo "<tr> <th> Nombre </th> <th> Apellido </th> <th> DNI </th>";

        foreach ($respuestaArray as $item => $value){
            echo "<tr><td>" . $value["nombre"] . "</td>";
            echo "<td>" .$value["apellido"]. "</td>";
            echo "<td>" .$value["dni"]. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "Error";
    }
?>

</body>
</html>
