<?php
define('BASE_DIR', 'C:\xampp\htdocs\CRUD_PHPN');
require_once BASE_DIR . '\conexion.php';
require_once BASE_DIR . '\Model\Items.php';

$db = new Conexion();
$pdo = $db->connect();

$sql = "SELECT * FROM `items` ORDER by id DESC LIMIT 1";
$items = $this->pdo->query($sql, PDO::FETCH_ASSOC);

if (isset($_POST['nombre']) && isset($_POST['descri']) && isset($_POST['valor']) && isset($_POST['cate'])) {
    $item = new Items();
    $item->id = $items[0]['id'];
    $item->name = $_POST['nombre'];
    $item->descripcion = $_POST['descri'];
    $item->price = $_POST['valor'];
    $item->categoria = $_POST['cate'];
    $sql = 'INSERT INTO items(id, name, description, price, category_id) VALUES ("' . $item->id . '","' . $item->name . '", "' . $item->descripcion . '", "' . $item->price . '", "' . $item->categoria . '")';
    $items = $pdo->query($sql, PDO::FETCH_ASSOC);
    header("Location: ../index.php");
} else {
    echo "Error: Datos incompletos.";
}
