<?php 

    include_once("../Config/Conexion.php");

    $Id = $_POST['Id'];
    $dni = $_POST['DNI'];
    $Nombre = $_POST['NombreCliente'];
    $Apellido = $_POST['ApellidoCliente'];
    $Correo = $_POST['Correo'];
    $Telefono = $_POST['Telefono'];

    $sql = "UPDATE cliente SET dni='$dni', Nombre='$Nombre', Apellido='$Apellido', Correo ='$Correo', Telefono='$Telefono' WHERE id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>