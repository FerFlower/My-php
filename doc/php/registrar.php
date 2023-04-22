<?php

include"conexion.php";
try {


    if(!empty($_GET['pt1']) and !empty($_GET['pt2']) and  !empty($_GET['pt3']) and !empty($_GET['pt4']) ){

        $Numero1= $_GET['pt1'];//Nombre
        $Numero2= $_GET['pt2'];//DNI
        $Numero3= $_GET['pt3'];//Correo
        $Numero4= $_GET['pt4'];//Contraseña

   

    $sql= "INSERT INTO user (Nombr ,	Dni ,	Correo,Contra	)VALUES (:01i,:02i,:03i,:04i)";
   
   $Resultado = $conexion->prepare($sql);
   $Resultado->execute(array(":01i"=>$Numero1,":02i"=>$Numero2,":03i"=>$Numero3,":04i"=>$Numero4));
 
    $Resultado->closeCursor();

    $datos = array(
        'wwt:1' => $Numero1,
        'wwt:2' => $Numero2,
        'wwt:3' => $Numero3,
        'wwt:4' => $Numero4,
        'wwt:ñ' => 70
    );
    sleep(5);
    $query_string = http_build_query($datos);
    $nueva_url = "php/exit.php?";
    header('Location: ' . $nueva_url . $query_string);

    
   
}else{
        
       
    
    
}} catch ( PDOException $error) {
         echo$error->getCode();
    echo "line del error: ".$error->getLine();

 echo '<div class="alert alert-warning">Algunos datos no an sido ingresados</div>';
    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }


?>