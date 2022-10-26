<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-warning p-2 text-white text-center">Agregar cliente</h1>
    <br>

    <div class="container">
        <form action="../CRUD/Insertar.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="DNI" name="DNI">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombre Cliente" name="NombreCliente">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Apellido cliente" name="ApellidoCliente">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Correo" name="Correo">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Telefono" name="Telefono">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>