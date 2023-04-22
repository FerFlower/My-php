<?php
$nombre = $_POST['pt1'];
$dni= $_POST['pt2'];

// Hacer algo con los datos recibidos

$response = array($nombre => $dni);
echo json_encode($response);
?>