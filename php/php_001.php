<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="php_001.php"  method="post">
    <p>
        <label for="txt">De cuanto es tu deuda con el banco : </label>
        <input type="text" name="deuda" /><br/>
        </p>

        <input type="submit" value="Ver deuda"/>

    </form>
</body>
</html>

<?php
if($_POST){
$Deuda = $_POST['deuda'];
$Interes;
echo "<p> ________________ Mi BANCO _______________</p>";

if ($Deuda <= 100) {
    $Interes = 15;
} elseif ($Deuda >= 101 && $Deuda <= 400) {
    $Interes = 17;
} elseif ($Deuda >= 4001 && $Deuda <= 1000) {
    $Interes = 20;
} else {
    $Interes = 25;
}
$total = $Deuda + ($Deuda * ($Interes / 100));
echo "Tu deuda es de clienete ----> s/." . $Deuda . "<br>Interes de aumento --->" . $Interes . "% <br>Monto a pagar ---->s/." . $total;
}?>