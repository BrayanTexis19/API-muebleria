<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar categoria</title>
</head>
<body>
    <form action="<?= base_url('index.php/Productos/modificarCategoria/'.$categoria->id_categoria ) ?>" method="post">
        <label for="">Nombre de la categoria</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escriba aquí" value="<?= $categoria->nombre ?>">
        <label for="">Status</label>
        <input type="number" name="status" id="status" min=0 max=1 value="<?= $categoria->activo ?>">
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>