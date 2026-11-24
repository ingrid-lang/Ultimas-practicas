<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Guardar Información</title>
</head>
<body>
<h2>Guardar información en un archivo</h2>
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
// 1. GUARDAR
if (isset($_POST["guardar"])) {
    $dato = $_POST["nombre"] . " - " . $_POST["edad"] . " años - " . $_POST["pasatiempo"] . PHP_EOL;
    file_put_contents("Informacion.txt", $dato, FILE_APPEND);
}

// 2. ELIMINAR UN ALUMNO
if (isset($_POST["eliminar_uno"])) {
    $eliminar = $_POST["eliminar_uno"];
    $lineas = file("Informacion.txt");
    unset($lineas[$eliminar]);
    file_put_contents("Informacion.txt", implode("", $lineas));
}

// 3. ELIMINAR TODOS
if (isset($_POST["eliminar_todo"])) {
    file_put_contents("Informacion.txt", "");
}
?>

<h2>Lista de alumnos registrados</h2>

<?php
if (file_exists("Informacion.txt")) {
    $lineas = file("Informacion.txt");
    foreach ($lineas as $num => $linea) {
        echo $linea . "<br>";

        // Botón para eliminar esa línea
        echo '<form method="post" style="display:inline">
                <input type="hidden" name="eliminar_uno" value="' . $num . '">
                <input type="submit" value="Eliminar">
              </form><br><br>';
    }
}
?>

<!-- Botón para borrar todo el archivo -->
<form method="post">
    <input type="submit" name="eliminar_todo" value="Eliminar todo">
</form>

</body>
</html>
