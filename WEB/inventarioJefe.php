<?php

include('conexion.php');

$urlImg = $_POST['urlImg'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$modelo_idModelo = $_POST['modelo_idModelo'];
$tipoRepuesto_idTipoRepuesto = $_POST['tipoRepuesto_idTipoRepuesto'];
$marca_idMarca = $_POST['marca_idMarca'];
$tipoGarantia_idTipoGarantia = $_POST['tipoGarantia_idTipoGarantia'];
$condicionRepuesto_idCondicionRepuesto = $_POST['condicionRepuesto_idCondicionRepuesto'];
$bodega_idBodega = $_POST['bodega_idBodega'];

$sql = "INSERT INTO repuesto (urlImg, nombre, precio, stock, modelo_idModelo, tipoRepuesto_idTipoRepuesto, marca_idMarca, tipoGarantia_idTipoGarantia, condicionRepuesto_idCondicionRepuesto, bodega_idBodega) VALUES ('$urlImg', '$nombre', $precio, $stock, $modelo_idModelo, $tipoRepuesto_idTipoRepuesto, $marca_idMarca, $tipoGarantia_idTipoGarantia, $condicionRepuesto_idCondicionRepuesto, $bodega_idBodega)";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

$conn->close();

?>
