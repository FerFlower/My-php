<?php

include "../modelo/conexion.php";
try {

    if (!empty($_POST["l"])) {

        /*
        Numero5 es ID del producto
        */

        $Numero5 = $_POST['5'];
        $sql = "DELETE FROM  productos where Id_Productos = :05i";

        $Resultado = $conexion->prepare($sql);
        $Resultado->execute(array(":05i" => $Numero5));
        $Resultado->closeCursor();
        echo '<div class="alert alert_success">Producto Eliminado correctamente </div>';

        // $Numero1= null;
        // $Numero2= null;
        // $Numero3= null;
        // $Numero4= null;

    } else {
        echo '<div class="alert alert_warning">Algunos datos no an sido ingresados</div>';
    }
} catch (PDOException $error) {
    echo $error->getCode();
    echo '<div class="alert alert_warning">Ubo un error al elimnar</div>';
    echo "line del error: " . $error->getLine();
    echo "Conexion Erronea" . $error;
    die('Error: ' . $error->GetMessage());

}


?>