<html>
<head><title>Ej62 - Básico</title></head>
<body>
<h2>Mis Calificaciones</h2>

<?php
// 1. VECTOR (Arreglo unidimensional) -> Una sola lista
// Solo tiene nombres, un dato por casilla
$alumnos = ["Ana", "Luis", "Maria"];

// 2. MATRIZ (Arreglo multidimensional) -> Tabla con filas y columnas
// Cada fila es un alumno, cada columna es una materia
// Ana: 9 y 8 | Luis: 7 y 6 | Maria: 10 y 9
$calificaciones = [
    [9, 8],
    [7, 6],
    [10, 9]
];

// 3. Mostramos la tabla
echo "<table border='1'>";
echo "<tr><td>Alumno</td><td>Calif 1</td><td>Calif 2</td><td>Promedio</td></tr>";

// Recorremos los 3 alumnos
for ($i = 0; $i < 3; $i++) {
    // Sacamos el promedio de cada alumno
    // $calificaciones[$i][0] es la primera calificación
    // $calificaciones[$i][1] es la segunda calificación
    $promedio = ($calificaciones[$i][0] + $calificaciones[$i][1]) / 2;

    echo "<tr>";
    echo "<td>" . $alumnos[$i] . "</td>";
    echo "<td>" . $calificaciones[$i][0] . "</td>";
    echo "<td>" . $calificaciones[$i][1] . "</td>";
    echo "<td>" . $promedio . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>