<html>
    <head>
        <meta charset="UTF-8">
        <title> Crear Personas </title>
    </head>

    <body>

        <form name="crearPersonas" method="post" action="Utilities/insertarPersona.php">
            <table align="center">
                <tr>
                    <td> Nombre: </td>
                    <td> <label for="nombre"> </label>
                    <input type = "text" name ="nombre"> </td>
                </tr>

                <tr>
                    <td> Apellido: </td>
                    <td> <label for="apellido"> </label>
                    <input type = "text" name = "apellido"></td>
                </tr>

                <tr>
                    <td> DNI: </td>
                    <td> <label for="dni"> </label>
                    <input type = "text" name = "dni"> </td>
                </tr>

                <tr>
                    <td align="center"> <input type = "submit" name="enviar" value="Enviar"> </td>
                </tr>

            </table>
        </form>
    </body>
</html>