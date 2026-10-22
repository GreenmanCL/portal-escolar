<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'menu.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">

</head>
<body>
    <form method="POST" action="">
         <input type="number" step="any" name="a" id="a" required>
        <br><br>
         <input  type="number" step="any" name="b" id="b" required>
        <br><br>
         <input  type="number" step="any" name="c" id="c" required>
        <br><br>
        <button name="Calificar">Calificar</button>
    </form>
         <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['Calificar'])) {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);
        if ($a >= 0 && $a <= 100 && $b >= 0 && $b <= 100 && $c >= 0 && $c <= 100) {           
        $promedio = ($a + $b + $c) / 3;
        if($promedio >= 70) {
        echo "<h2>Aprobaste con: " . $promedio. "</h2>";}
        else {
            echo "<h2>Reprobaste con: " . $promedio ."</h2>";
        }
        } else {
            echo "<h2>Las calificaciones deben estar entre 0 y 100.</h2>";
        }
    }
    ?>
</body>
</html>