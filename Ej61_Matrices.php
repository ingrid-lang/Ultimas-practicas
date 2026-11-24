<?php
// Ejercicio 61 - Matrices
// MatrizA: de 10 en 10 desde 100
// MatrizB: de 20 en 20 desde 500
// MatrizC: suma de A + B

$A = [];
$B = [];
$C = [];
$valorA = 100;
$valorB = 500;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $A[$i][$j] = $valorA;
        $B[$i][$j] = $valorB;
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        $valorA += 10;
        $valorB += 20;
    }
}

function mostrar($matriz, $titulo) {
    echo "<h3>$titulo</h3>";
    echo "<table border='1' cellpadding='10'>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<html>
<body>
    <h2>Ejercicio 61 - Matrices</h2>
    <?php
        mostrar($A, "MatrizA");
        mostrar($B, "MatrizB");
        mostrar($C, "MatrizC");
    ?>
</body>
</html>
