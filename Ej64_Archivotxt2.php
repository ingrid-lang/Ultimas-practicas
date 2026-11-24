<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Guardar Informacion</title>
</head>
<body>
    <h2>Guardar informacion en un archivo</h2>
        <form method="post">
        Nombre de alumno:
        <input type="text" name="nombre">
        <input type="submit" name="guardar" value = "guardar">
</form>
<?php
if (isset($_POST["guardar"])) {
    file_put_contents("ProgramacionA.txt", $_POST["nombre"] .  PHP_EOL,
        FILE_APPEND);
}
?>
    <h2>Registro de alumnos</h2>

    <h3>Lista de alumnos registrados</h3>
<?php
if (file_exists("ProgramacionA.txt")) {
    echo nL2br(file_get_contents("ProgramacionA.txt"));
}
?>