<?php
include_once 'conexion.php';
$Id_es= $_POST['id'];
$Nombr= $_POST['no'];
$Habi1= $_POST['h1'];
$Habi2= $_POST['h2'];
$Habi3= $_POST['h3'];
$Habi4= $_POST['h4'];
$Exame= $_POST['ex'];
$Parti= $_POST['pa'];
$Proye= $_POST['pr'];

$sql= "INSERT INTO notas (Id_Estudiante,Nombre,Ha1,Ha2,Ha3,Ha4,Exa,Pro,Par)VALUES (:Id,:No,:H1,:H2,:H3,:H4,:Ex,:Pa,:Pr)";

$Resultado = $conexion->prepare($sql);
$Resultado->execute(array(':Id'=>$Id_es,':No'=>$Nombr,':H1'=>$Habi1,':H2'=>$Habi2,':H3'=>$Habi3,':H4'=>$Habi4,':Ex'=>$Exame,':Pa'=>$Parti,':Pr'=>$Proye));

echo "Regisro embiado";
$Resultado->closeCursor();

?>
