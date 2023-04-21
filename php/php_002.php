<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="php_002.php" method="post">
    <p>
        <label for="txt">Que Tabla de bultiplicar deseas : </label>
        <input type="text" name="multi" /><br/>
</p><p>
        <label for="txt">De cuantos digitos :</label>
        <input type="text" name="mil" /><br/>
</p>
        <input type="submit" value="Login"/>

    </form>
</body>
</html>

<?php

if($_POST){
$Numero_de_tabla = $_POST['multi'];
$cantidad = $_POST['mil'];
echo "<p>_________ La tabla de multiplicar ________</p>";
for ($i = 0; $i < $cantidad + 1; $i++) {
    $multiplicador = $i * $Numero_de_tabla;
    echo  $Numero_de_tabla . " x " .$i . " = " . $multiplicador . "<br><br>";
}}
?>