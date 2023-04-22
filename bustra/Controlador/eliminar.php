<?php

//include "../modelo/conexion.php";
try {



        /*
        Numero5 es ID del producto
        */
if(!empty($_GET["id"])){
        $Numero5 = $_GET['id'];
        $sql = "DELETE FROM  productos where Id_Productos = :05i";

        $Resultado = $conexion->prepare($sql);
        $Resultado->execute(array(":05i" => $Numero5));
        $Resultado->closeCursor();
        echo '<div class="alert alert-success">Producto Eliminado correctamente </div>';

        // $Numero1= null;
        // $Numero2= null;
        // $Numero3= null;
        // $Numero4= null;

}
} catch (PDOException $error) {
    echo $error->getCode();
    echo '<div class="alert alert_warning">Ubo un error al elimnar</div>';
    echo "line del error: " . $error->getLine();
    echo "Conexion Erronea" . $error;
    die('Error: ' . $error->GetMessage());

}


?>