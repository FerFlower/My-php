<?php  
if($_GET){
    $gmail ="@gmail.com";
    $usuario = $_GET['usuario'];
    $Contraseña = $_GET['Contra'];
    
    define("gmail","@gmail.com");
    echo "Tu correo es : ".$usuario.$gmail."<br>Tu contraseña es : ".$Contraseña;
    
}
    ?>