<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Guardar Informacion</title>
</head>
<body>
<h2>Guardar informacion en un archivo</h2>
<h2>Registro de alumnos</h2>

<form method="post">
    Nombre de alumno:<br>
    <input type="text" name="nombre"><br><br>

    Edad:<br>
    <input type="number" name="edad"><br><br>

    Pasatiempo:<br>
    <input type="text" name="pasatiempo"><br><br>

    <input type="submit" name="guardar" value="guardar">
</form>

<?php
if (isset($_POST["guardar"])) {
    $dato = $_POST["nombre"] . " - " . $_POST["edad"] . " años - " . $_POST["pasatiempo"] . PHP_EOL;
    file_put_contents("Informacion.txt", $dato, FILE_APPEND);
}
?>

<h2>Lista de alumnos registrados</h2>

<?php
if (file_exists("Informacion.txt")) {
    echo nl2br(file_get_contents("Informacion.txt"));
}
?>

</body>
</html>