<!DOCTYPE html>

<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
    <?php

require './conexion.php';

$instruccion_SQL = "INSERT INTO profesores (Nombre, ApellidoM, ApellidoP, Cedula) values ('$nombre', '$apellidom', '$apellidop', '$cedula') ";

$resultado = mysqli_query($connexion,$instruccion_SQL);

mysqli_close($connexion);

?>
    </body>

</html>