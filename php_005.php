<?php
if ($_POST) {
    $Nombre = $_POST['txt_Nombre'];
    $Gmail = $_POST['txt_gmail'];

    echo "Mi nombre es :" . $Nombre . "Gmail : " . $Gmail;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY</title>

</head>

<body>
    <p>Formulario tipio post</p>
    <form action="php_005.php" method="post">

        <label for="name">Nombre de usuario:</label>
        <input type="text" id="Nombre" name="txt_Nombre">
        <br><br>
        <label for="mail">Correo electrónico:</label>
        <input type="email" id="Mail" name="txt_gmail">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>