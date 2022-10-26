<?php

    include_once('../Config/Conexion.php');

    $DNI = $_POST['DNI'];
    $nombreCliente = $_POST['NombreCliente'];
    $apellidoCliente = $_POST['ApellidoCliente'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];

    $sql = "INSERT INTO cliente(dni,Nombre,Apellido,Correo,Telefono)VALUES('$DNI','$nombreCliente','$apellidoCliente','$correo','$telefono')";

    $query = mysqli_query($conexion,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
