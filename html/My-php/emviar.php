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


$Resultado->closeCursor();

 

    $Promedio = ($Habi1 +$Habi2+$Habi3+$Habi4)/4;
    $Final = ($Promedio*0.5)+($Exame*0.15)+($Proye*0.15)+($Parti*0.20)
  //$Resultado->closeCursor();
 // echo "Conexion Establecida";
  

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diseño_php.css">
    <title>Ver Registro</title>
</head>
<body>
    <header id="de" >
    <p id="re">Esto son los Datos Guardados !!!</p>
    </header> 
<!--To de apartir de aca ira en php-->
    <div id="conteiner">
        <div id="Datos">
            <h3>Datos</h3>
            <label>Nombre</label>
            <h4 id="ni"><?php echo $Nombr;?></h4> 
            <label>ID</label>
            <h4 id="ne"><?php echo $Id_es;?></h4>
        </div>
        <div id="Califi">
            <h3>Calificacion del promedio</h3>
            <ul>50% Habilidades del estudiante <br></ul>
                <ul>15% Trabajo del estudiante <br></ul>
                <ul>15% Examen del estudiante <br></ul>
                <ul>20% Participacion del estudiante <br></ul>
        </div>
        <div id="Notas">
            <h3>Notas</h3>
           <div id="abi">
            <h3 id="ha">Habilidad</h3>
            <label>Nota 1</label>
            <h4 id="no"><?php echo $Habi1;?></h4><br> 
            <label>Nota 2</label>
            <h4 id="no"><?php echo $Habi2;?></h4><br>
            <label>Nota 3</label>
            <h4 id="no"><?php echo $Habi3;?></h4><br> 
            <label>Nota 4</label>
            <h4 id="no"><?php echo $Habi4;?></h4><br> 
            <label id="nop">Promedio</label>
            <h4 id="nop"><?php echo$Promedio;?></h4><br>
            
           </div>
           <div id="travajo">
            <h3 id="ha">Travajo</h3>
            <label>Nota </label>
            <h4 id="no"><?php echo $Proye;?></h4><br>
           </div>
           <div id="habilidad">
            <h3 id="ha">Participacion</h3>
            <label>Nota </label>
            <h4 id="no"><?php echo $Parti;?></h4><br>
           </div>
           <div id="examen">
            <h3 id="ha">Examen</h3>
            <label>Nota </label>
            <h4 id="no"><?php echo $Exame;?></h4><br>
           </div>
           <div id="pro">
            <h3 id="haf">Promedio Final</h3>
            <label id="nop">Nota </label>
            <h4 id="nof"><?php echo $Final;?></h4><br>
           </div>
        </div>
    </div>
    <div id="espas"></div>
    <!--Aca termina el php embio .-->
    
    
    
</body>
</html>

