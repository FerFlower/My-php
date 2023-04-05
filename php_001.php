<html lang="es">
<?php 
$Deuda = 240; 
$Interes; 
echo "<p> ________________ Mi BANCO _______________</p>";

if ($Deuda <= 100) { 
    $Interes = 15; 
} elseif ($Deuda >=101 && $Deuda <=400){ 
    $Interes= 17; 
} elseif($deuda >=4001 && $Deuda <= 1000){
    $Interes= 20;
}else{
    $Interes= 25;
}
$total = $Deuda + ($Deuda * ($Interes/100)); 
echo "Tu deuda es de clienete ----> s/.".$Deuda."<br>Interes de aumento --->".$Interes."% <br>Monto a pagar ---->s/.". $total ;
?>