<?php
include_once 'Conexion.php';

$sql= "SELECT Id_Estudiante,Nombre,Ha1,Ha2,Ha3,Ha4,Exa,Pro,Par FROM notas";
   
$Resultado = $conexion->prepare($sql);
$Resultado->execute();

 while($registro=$Resultado->fetch(pdo::FETCH_ASSOC)){

     echo "<br><br><br>Id Estudiante   : ".$registro['Id_Estudiante'].
     "<br> Nombre Estudiante   : ".$registro['Nombre'].
     "<br> Habilidades N°1 : ".$registro['Ha1'].
     "<br> Habilidades N°2 : ".$registro['Ha2'].
     "<br> Habilidades N°3 : ".$registro['Ha3'].
     "<br> Habilidades N°4 : ".$registro['Ha4'].
     "<br> Examen Final : ".$registro['Exa'].
     "<br> Participacion : ".$registro['Par'].
     "<br> Proyecto : ".$registro['Pro'];

     $Resultado->closeCursor();
     $conexion = null;
  }

?>
