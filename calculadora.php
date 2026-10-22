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
<h3>Ingresa:</h3>
1: <input type="number" name="a" id="a" style="width: 50px" required>
2: <input type="number" name="b" id="b" style="width: 50px" required>

<br>
<br>
<button type="submit" name="calcular">Calcular</button>
</form>


<hr>





<?php




if (isset($_POST['calcular'])) {



$n1=(int)$_POST['a'];
$n2=(int)$_POST['b'];



$sum=$n1+$n2;
$rest=$n1-$n2;
$mul=$n1*$n2;

if($n1==0 || $n2==0){
    $divis=" No se puede dividir entre cero";
}
else{
$divis=$n1/$n2;
}


echo"<br>";
echo "Suma de: " . $n1 . " y: " . $n2 . "=" . $sum;
echo"<br>";
echo "Resta de: " . $n1 . " y: " . $n2 . "=" . $rest;
echo"<br>";
echo "Multiplicacion de: " . $n1 . " y: " . $n2 . "=" . $mul;
echo"<br>";
echo "División de: " . $n1 . " y: " . $n2 . "=" . $divis;
echo"<br>";



}
















?>