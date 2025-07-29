<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Crear</title>
</head>

<body>
    <div class="container w-100 border p-4 my-4">
        <div class="row py-1">
            <?php
            require_once "Controller/item.php";
            $items = new Item();
            ?>
            <h2>Crear un nuevo item</h2>
            <form class="row g-3" action="Controller/crear.php" method="post">
                <div class="mb-1">
                    <label for="text" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-1">
                    <label for="text" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descri">
                </div>
                <div class="mb-1">
                    <label for="text" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="valor">
                </div>
                <div class="mb-1">
                    <label for="text" class="form-label">Categoria</label>
                    <input type="number" class="form-control" name="cate">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>

</body>

</html>