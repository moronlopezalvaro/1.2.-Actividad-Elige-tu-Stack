<?php
$fechaActual = date('d/m/Y'); 
$horaActual = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero de demostración PHP</title>
</head>
<body>
    <main>
        <h1>Fichero de demostración PHP</h1>
        <p>Fecha actual del servidor: <?php echo htmlspecialchars($fechaActual); ?></p>
        <p>Hora actual del servidor: <?php echo htmlspecialchars($horaActual); ?></p>
    </main>
</body>
</html>