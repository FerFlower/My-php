<?php

include"../modelo/conexion.php";
try {

if(!empty($_POST["l"])){
    if(!empty($_POST['1']) and !empty($_POST['2']) and  !empty($_POST['3']) and !empty($_POST['4']) ){

        $Numero1= $_POST['1'];
        $Numero2= $_POST['2'];
        $Numero3= $_POST['3'];
        $Numero4= $_POST['4'];

       /* $Numero1= "login";
        $Numero2= "login";
        $Numero3= 23;
        $Numero4= 23;*/

    $sql= "INSERT INTO productos (
        Nom_Productos ,
        Des_Productos ,
        Pre_Productos ,
        Cas_Productos 
        )VALUES (:01i,:02i,:03i,:04i)";
   
   $Resultado = $conexion->prepare($sql);
   $Resultado->execute(array(":01i"=>$Numero1,":02i"=>$Numero2,":03i"=>$Numero3,":04i"=>$Numero4));

   echo "Regisro embiado";
    $Resultado->closeCursor();
    
    
    $Numero1= null;
    $Numero2= null;
    $Numero3= null;
    $Numero4= null;
   
    }}
    
    } catch ( PDOException $error) {
         echo$error->getCode();
    echo "line del error: ".$error->getLine();


    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }


?>