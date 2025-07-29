<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>CRUD</title>
</head>

<body>
    <div class="container w-100 border p-4 my-4">

        <div class="d-md-flex justify-content">
            <a type="button" class="btn btn-primary" href="crear.php">Crear item</a>
        </div>

        <div class="row py-1">
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php
                    require_once "Controller/item.php";
                    $items = new Item();
                    foreach ($items->mostrar() as $item) {
                        echo "<tr>";
                        printf("<td><a>" . $item['id'] . "</a></td>");
                        printf("<td><a>" . $item['name'] . "</a></td>");
                        printf("<td><a>" . $item['description'] . "</a></td>");
                        printf("<td><a>$" . $item['price'] . "</a></td>");
                        printf("<td><a>" . $item['category_id'] . "</a></td>");
                        printf("<td><a class='btn btn-primary btn-sm' href='editar.php?id=" . $item['id'] . "'>Editar</a></td>");
                        printf("<td><a class='btn btn-danger btn-sm' href='Controller/borrar.php?id=" . $item['id'] . "'>Borrar</a></td>");
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>