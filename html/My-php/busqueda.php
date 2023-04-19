<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/diseño_html.css">
  <title>Filtro</title>
</head>
<body>
<div id="todo">
    <p id>Registro de Notas de Estudiantes</p>
    <form action="emviar.php" method="post"> 
        <div id="Datos">
        <h3>Datos</h3>
        <label>Id del alumno</label> 
        <input type="number" name="id" id="id" /> 
        </div >
</body>
</html>
<?php
if($_POST){
$Id_es= $_POST['id'];
include_once 'Conexion.php';

$sql= "SELECT Id_Estudiante,Nombre,Ha1,Ha2,Ha3,Ha4,Exa,Pro,Par,Fin FROM notas where Id_Estudiante=?";
   
$Resultado = $conexion->prepare($sql);
$Resultado->execute(array($Id_es));

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
}
?>
