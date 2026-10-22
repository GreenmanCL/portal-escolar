<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas</title>
</head>
<body>
    <h1>¡Tabla de multiplicar del 1 al 10!</h1>
    <form method="POST" action="">
        <label for="n1">Numero:</label><br>
        <input type="number" step="any" id="n1" name="n1" required>
        <br><br>
        <button type="submit" name="btn">Calcula</button>
        <br><br>
    </form>

    <?php
        if( $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btn']) ) {
            $n = floatval($_POST['n1']);
            echo "<table border='1'>";
            echo "<tr><th>Multiplo</th><th>Resultado</th></tr>";
            for( $i = 1; $i <= 10; $i++ ) {
                echo "<tr>";
                echo "<td>". $i ."</td>";
                echo "<td>". $i*$n ."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } 
    ?>
</body>
</html>