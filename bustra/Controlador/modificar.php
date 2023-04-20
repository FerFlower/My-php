<?php

include "../modelo/conexion.php";
try {

    if (!empty($_POST["l"])) {
        if (!empty($_POST['1']) and !empty($_POST['2']) and !empty($_POST['3']) and !empty($_POST['4']) and !empty($_POST['5'])) {

            /*
            Numero1 es nombre del producto
            Numero2 es descripcion del producto
            Numero3 es precio del producto
            Numero4 es Cantidad de producto
            Numero5 es ID del producto
            */
            $Numero1 = $_POST['1'];
            $Numero2 = $_POST['2'];
            $Numero3 = $_POST['3'];
            $Numero4 = $_POST['4'];
            $Numero5 = $_POST['5'];
            /*  $Numero1= "login";
            $Numero2= "login";
            $Numero3= 23;
            $Numero4= 23;
            $Numero4= 23;*/
            $sql = "UPDATE  productos SET (
        
        Nom_Productos = :01i,
        Des_Productos = :02i,
        Pre_Productos = :03i,
        Cas_Productos = :04i
        where Id_Productos = :05i
        ";

            $Resultado = $conexion->prepare($sql);
            $Resultado->execute(array(":01i" => $Numero1, ":02i" => $Numero2, ":03i" => $Numero3, ":04i" => $Numero4, ":05i" => $Numero5));
            $Resultado->errorInfo();
            echo "Regisro modificado";
            $Resultado->closeCursor();
            echo '<div class="alert alert_success">Producto Registrado correctamente </div>';

            // $Numero1= null;
            // $Numero2= null;
            // $Numero3= null;
            // $Numero4= null;

        } else {
            echo '<div class="alert alert_warning">Algunos datos no an sido ingresados</div>';
        }
    }

} catch (PDOException $error) {
    echo $error->getCode();
    echo "line del error: " . $error->getLine();
    echo "Conexion Erronea" . $error;
    die('Error: ' . $error->GetMessage());

}


?>