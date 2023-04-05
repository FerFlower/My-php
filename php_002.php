<html lang="es">
<?php
$Numero_de_tabla=12;
$cantidad=12;
echo "<p>_________ La tabla de multiplicar ________</p>";
for($i = 0 ; $i<$cantidad+1;$i++){
    $multiplicador = $i*$Numero_de_tabla;
    echo  $i." x ".$Numero_de_tabla." = ".$multiplicador."<br><br>";
}
?>