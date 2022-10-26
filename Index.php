<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD MYSQLI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-warning p-2 text-white text-center">CRUD MYSQLI</h1>
    <br>
    <div class="container">
        <a href="Forms/AgregarCliente.php" class="btn btn-danger">Agregar cliente</a>
    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounded">
        <h1>Lista de clientes</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">DNI</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("Config/Conexion.php");

                $sql = "SELECT * FROM cliente";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $fila['id']?></th>
                        <th scope="row"><?php echo $fila['dni']?></th>
                        <th scope="row"><?php echo $fila['Nombre']?></th>
                        <th scope="row"><?php echo $fila['Apellido']?></th>
                        <th scope="row"><?php echo $fila['Correo']?></th>
                        <th scope="row"><?php echo $fila['Telefono']?></th>
                        <th scope="row">
                            <a href="Forms/EditarDato.php?Id=<?php echo $fila['id']?>" class="btn btn-warning">Editar Datos</a>
                            <a href="CRUD/EliminarDato.php?Id=<?php echo $fila['id']?>" class="btn btn-danger">Eliminar Datos</a>
                        </th>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>