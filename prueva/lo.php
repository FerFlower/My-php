<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="lo.php"></script>
    <button onclick="javascript_to_php()">awdawdwa</button>
    
    <form ><input type="submit" value="Refresck" class="buton"  name="l"></form>
</body>
</html>

<script type="text/javascript">
function javascript_to_php() {
    var jsVar1 = "Hello";
    var jsVar2 = "World";
    window.location.href = window.location.href + "?w1=" + jsVar1 + "&w2=" + jsVar2;


}
</script>
 
<?php
// comprobar si tenemos los parametros w1 y w2 en la URL
if (isset($_GET["w1"]) && isset($_GET["w2"])) {
    // asignar w1 y w2 a dos variables
    $phpVar1 = $_GET["w1"];
    $phpVar2 = $_GET["w2"];
 
    // mostrar $phpVar1 y $phpVar2
    echo "<p>Parameters: " . $phpVar1 . " " . $phpVar1 . "</p>";
    

} else {
    echo "<p>No parameters</p>";
}

?>
<?php
if(!empty($_GET["l"])){

$nueva_url = "http://localhost/My-php/prueva/lo.php";

// Redirigir al usuario a la nueva URL
header('Location: ' . $nueva_url);}
?>*/