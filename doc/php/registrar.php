<?php

//include"conexion.php";
try {

if(!empty($_POST["l"])){
    if(!empty($_POST['1']) and !empty($_POST['2']) and  !empty($_POST['3']) and !empty($_POST['4']) ){

        $Numero1= $_POST['1'];//Nombre
        $Numero2= $_POST['2'];//DNI
        $Numero3= $_POST['3'];//Correo
        $Numero4= $_POST['4'];//Contraseña

   

    $sql= "INSERT INTO user (Nombr ,	Dni ,	Correo,Contra	)VALUES (:01i,:02i,:03i,:04i)";
   
   $Resultado = $conexion->prepare($sql);
   $Resultado->execute(array(":01i"=>$Numero1,":02i"=>$Numero2,":03i"=>$Numero3,":04i"=>$Numero4));
   echo '<div class="alert alert-success">Producto Registrado correctamente </div>';
  
    $Resultado->closeCursor();
    
    
    $Numero1= null;
    $Numero2= null;
    $Numero3= null;
    $Numero4= null;
   
}else{
        
        echo '<div class="alert alert-warning">Algunos datos no an sido ingresados</div>';
    
    
}}} catch ( PDOException $error) {
         echo$error->getCode();
    echo "line del error: ".$error->getLine();


    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }


?>