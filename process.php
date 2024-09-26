<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname ="brf";



$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}
$id= $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mes = $_POST['mes'];
$idFactura = $_POST['idFactura'];
$nombreFactura = $_POST['nombreFactura'];
$mesFactura = $_POST['mesFactura'];
$aporte = $_POST['aporte'];

$sql = "INSERT INTO df(id,nombre,telefono,mes,idFactura,nombreFactura,mesFactura,aporte) VALUES ('$id', '$nombre', '$telefono','$mes','$idFactura','$nombreFactura','$mesFactura','$aporte')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();