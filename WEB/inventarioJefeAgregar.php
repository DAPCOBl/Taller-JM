<?php

include_once("conexion.php");

$conn = Cconexion::ConexionBD();

if ($conn) {

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

    $sql = "INSERT INTO repuesto (urlImg, nombre, precio, stock, modelo_idModelo, tipoRepuesto_idTipoRepuesto, marca_idMarca, tipoGarantia_idTipoGarantia, condicionRepuesto_idCondicionRepuesto, bodega_idBodega) VALUES (:urlImg, :nombre, :precio, :stock, :modelo_idModelo, :tipoRepuesto_idTipoRepuesto, :marca_idMarca, :tipoGarantia_idTipoGarantia, :condicionRepuesto_idCondicionRepuesto, :bodega_idBodega)";

    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':urlImg', $urlImg);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':modelo_idModelo', $modelo_idModelo);
        $stmt->bindParam(':tipoRepuesto_idTipoRepuesto', $tipoRepuesto_idTipoRepuesto);
        $stmt->bindParam(':marca_idMarca', $marca_idMarca);
        $stmt->bindParam(':tipoGarantia_idTipoGarantia', $tipoGarantia_idTipoGarantia);
        $stmt->bindParam(':condicionRepuesto_idCondicionRepuesto', $condicionRepuesto_idCondicionRepuesto);
        $stmt->bindParam(':bodega_idBodega', $bodega_idBodega);

        if ($stmt->execute()) {
            echo '<script language="javascript">alert("Registro insertado");</script>';
        } else {
            echo '<script language="javascript">alert("Error al insertar el registro" + . $stmt->errorInfo()[2]);</script>';
        }
    } catch (PDOException $e) {
        echo '<script language="javascript">alert("Error en la consulta: " + . $e->getMessage()");</script>';
    }

    $conn = null;
} else {
    echo "Error de conexión a la base de datos.";
}

?>