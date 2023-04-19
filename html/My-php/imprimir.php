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
    </body>
</html>
<?php


include_once 'Conexion.php';

$sql= "SELECT Id_Estudiante,Nombre,Ha1,Ha2,Ha3,Ha4,Exa,Pro,Par,Fin FROM notas ";
   
$Resultado = $conexion->prepare($sql);
$Resultado->execute();

 while($registro=$Resultado->fetch(pdo::FETCH_ASSOC)){

  $sub=round(($registro['Ha1']+$registro['Ha2']+$registro['Ha3']+$registro['Ha4'])/4,1);
 
    

?>

<!DOCTYPE html>

<!--To de apartir de aca ira en php-->
    <div id="conteiner">
        <div id="Datos">
            <h3>Datos</h3>
            <label>Nombre</label>
            <h4 id="ni"><?php  echo $registro['Id_Estudiante']; ?></h4> 
            <label>ID</label>
            <h4 id="ne"><?php  echo $registro['Nombre']; ?></h4>
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
            <h4 id="no"><?php  echo $registro['Ha1']; ?></h4><br> 
            <label>Nota 2</label>
            <h4 id="no"><?php  echo $registro['Ha2']; ?></h4><br>
            <label>Nota 3</label>
            <h4 id="no"><?php  echo $registro['Ha3']; ?></h4><br> 
            <label>Nota 4</label>
            <h4 id="no"><?php  echo $registro['Ha4']; ?></h4><br> 
            <label id="nop">Promedio</label>
            <h4 id="nop"><?php  echo $sub; ?></h4><br>
            
           </div>
           <div id="travajo">
            <h3 id="ha">Travajo</h3>
            <label>Nota </label>
            <h4 id="no"><?php  echo $registro['Pro']; ?></h4><br>
           </div>
           <div id="habilidad">
            <h3 id="ha">Participacion</h3>
            <label>Nota </label>
            <h4 id="no"><?php  echo $registro['Par']; ?></h4><br>
           </div>
           <div id="examen">
            <h3 id="ha">Examen</h3>
            <label>Nota </label>
            <h4 id="no"><?php  echo $registro['Exa']; ?></h4><br>
           </div>
           <div id="pro">
            <h3 id="haf">Promedio Final</h3>
            <label id="nop">Nota </label>
            <h4 id="nof"><?php  echo $registro['Fin']; ?></h4><br>
           </div>
        </div>
    </div>
    <div id="espas"></div>
    <!--Aca termina el php embio .-->
    
    
    
</body>
</html>
<?php
 }
 $Resultado->closeCursor();
 $conexion = null;
?>