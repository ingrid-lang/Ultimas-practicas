<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Guardar Informacion</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php
   $nombre = "Ana Lopez";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL,
    	FILE_APPEND);
    echo "informacion guardada correctamente.";
    echo "<br><br>";
?>
<?php
  $nombre = "Luis Soto";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL , 
    	FILE_APPEND);
    echo "informacion guardada correctamente.";
    echo "<br><br>";
?>
<?php
  $nombre = "Laila Cossio";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL , 
    	FILE_APPEND);
    echo "informacion guardada correctamente.";
    echo "<br><br>";
?>
<?php
    echo "<br><br>";
    $contenido = file_get_contents("alumnos.txt");
    // echo $conenido;
    echo nL2br($contenido);
    ?>
</body>
</html>