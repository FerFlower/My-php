<html lang="es">
<?php
$nose = true;
$contador = 0;
$Suma_numeros_consecutibos = 4;

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
?>