<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="php_003.php" method="post">
    <p>
        <label for="txt">La cantidad de numeros consecutibos que euieres sumar : </label>
        <input type="text" name="minumero" /><br/>
        </p>

        <input type="submit" value="Ver deuda"/>

    </form>
</body>
</html>
<?php
if($_POST){
$nose = true;
$contador = 0;
$Suma_numeros_consecutibos = $_POST['minumero'];

$suma = 0;
echo "<p>_____________ SUMA DE NUMEROS CONSECUTIBOS _________</p>";
do {
    $contador++;
    $suma = $suma + $contador;
    echo $contador . " + ";
    if ($contador == $Suma_numeros_consecutibos) {
        $nose = false;
        echo " = " . $suma;
    }

} while ($nose);
}?>