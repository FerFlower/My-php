<?php
include"conexion.php";
try {


    if(!empty($_GET['yu3']) and !empty($_GET['yu4']) ){

 
        $Numero3= $_GET['yu3'];//Correo
        $Numero4= $_GET['yu4'];//Contraseña

//--------------------------------------------------------------------------------------------
$sql= "SELECT Correo,  Contra, Nombr ,	Dni FROM user";
$Resultado = $conexion->prepare($sql);
$Resultado->execute();

$bt=false;
$bl=false;
$Nombre;
$Correo;
$Dni;
 while($registro=$Resultado->fetch(pdo::FETCH_ASSOC)){

    $cor=$registro['Correo'];
    $con=$registro['Contra'];
if($Numero3==$cor){
    $bt=true;
    $Nombre= $registro['Nombr'];
    $Correo= $registro['Correo'];
    $Dni= $registro['Dni'];
    if($Numero4==$con){
        $bl=true;
    }

} }
   // $sql= "SELECT Correo,  Contra FROM user where Correo=?";
   // $Fil = $conexion->prepare($sql);
   // $Fil->execute(array($cor));
     
  if($bt==true && $bl==true){

    $datos = array(
        'wwt:1' =>$Nombre,
        'wwt:2' =>$Dni ,
        'wwt:3' =>$Correo,
        'wwt:ñ' => 12
    );
    sleep(2);
    $query_string = http_build_query($datos);
    $nueva_url = "php/exit.php?&";
    header('Location: ' . $nueva_url . $query_string);

    
   
  }elseif($bt==true && $bl==false){echo '<div id="miDiv" class="alert alert-warning">La contraseña esta mal</div>'
    ;

  }else{echo '<div id="miDiv" class="alert alert-warning">El correo es incorrecto'.$Numero3."no exite".$Numero4.'</div>';}

//--------------------------------------------------------------------------------------------

}else{
        
       
    
    
}} catch ( PDOException $error) {
         echo$error->getCode();
    echo "line del error: ".$error->getLine();

 echo '<div class="alert alert-warning">Algunos datos no an sido ingresados</div>';
    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }


?>