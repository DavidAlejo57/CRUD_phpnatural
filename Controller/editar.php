<?php
define('BASE_DIR', 'C:\xampp\htdocs\CRUD_PHPN');
require_once BASE_DIR . '\conexion.php';
require_once BASE_DIR . '\Model\Items.php';

$db = new Conexion();
$pdo = $db->connect();

if (isset($_POST['nombre']) && isset($_POST['descri']) && isset($_POST['valor']) && isset($_POST['cate'])) {
    echo $_POST['id'];
    $item = new Items();
    $item->name = $_POST['nombre'];
    $item->descripcion = $_POST['descri'];
    $item->price = $_POST['valor'];
    $item->categoria = $_POST['cate'];
    $sql = 'UPDATE items SET name = "' . $item->name . '", description = "' . $item->descripcion . '", price = "' . $item->price . '", category_id = "' . $item->categoria . '" WHERE id = ' . $_POST['id'];
    $items = $pdo->query($sql, PDO::FETCH_ASSOC);
    header("Location: ../index.php");
} else {
    echo "Error: Datos incompletos.";
}
