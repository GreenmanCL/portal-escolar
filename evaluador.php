<?php include 'menu.php'; ?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Calculadora</h2>
<form method="POST" action="">
<link rel="stylesheet" href="class.css">
<h3>Ingresa una calificacion del 0 al 100:</h3>
1: <input type="number" name="a" id="a" style="width: 50px" required>

<br>
<br>
<button type="submit" name="calcular">Calcular</button>
</form>


<hr>





<?php




if (isset($_POST['calcular'])) {


$n1=$_POST['a'];


if (is_numeric($n1)) {
     if($n1<0 or $n1>100){
     echo"Ingresa una calificación valida del 0-100";
     }
     else if($n1>=0 && $n1<=69){
     echo"No acreditado";
     }
     else if($n1>=70 && $n1<=79){
    echo"Satisfactorio";
     }
     else if($n1>=80 && $n1<=89){
    echo"Muy bien";
     }
     else if($n1>=90 && $n1<=100){
    echo"Exelente";
     }

     }
else {
    echo "Ingresa un valor que sea numero";
}






}
















?>