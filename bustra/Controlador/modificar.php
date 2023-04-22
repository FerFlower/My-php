<?php

//include "../modelo/conexion.php";
try {

    if (!empty($_POST["l"])) {
        if (!empty($_POST['iNom']) and !empty($_POST['iDes']) and !empty($_POST['iPre']) and !empty($_POST['iCan']) ) {

       
            $Nom = $_POST['iNom'];
            $Des = $_POST['iDes'];
            $Pre = $_POST['iPre'];
            $Can = $_POST['iCan'];
            $Id = $_POST['id'];
       
            $sql = "UPDATE  productos SET 
        
        Nom_Productos = :01i,
        Des_Productos = :02i,
        Pre_Productos = :03i,
        Cas_Productos = :04i
        where Id_Productos = :05i
        ";

            $Resultado = $conexion->prepare($sql);
            $Resultado->execute(array(":01i" => $Nom, ":02i" => $Des, ":03i" => $Pre, ":04i" => $Can, ":05i" => $Id));
            $Resultado->errorInfo();
            echo "Regisro modificado";
            $Resultado->closeCursor();
            echo '<div class="alert alert-success">Producto Registrado correctamente </div>';
                header("location:Bustrap.php");
            // $Numero1= null;
            // $Numero2= null;
            // $Numero3= null;
            // $Numero4= null;

        } else {
            echo '<div class="alert alert-warning">Algunos datos no an sido ingresados</div>';
        }
    }

} catch (PDOException $error) {
    echo $error->getCode();
    echo "line del error: " . $error->getLine();
    echo "Conexion Erronea" . $error;
    die('Error: ' . $error->GetMessage());

}


?>