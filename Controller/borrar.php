<?php
define('BASE_DIR', 'C:\xampp\htdocs\CRUD_PHPN');
require_once BASE_DIR . '\conexion.php';
require_once BASE_DIR . '\Model\Items.php';

$db = new Conexion();
$pdo = $db->connect();

if (isset($_GET['id'])) {
    $item = new Items();
    $item->id = $_GET['id'];
    $sql = 'DELETE FROM items WHERE id = ' . $item->id;
    $items = $pdo->query($sql, PDO::FETCH_ASSOC);
    header("Location: ../index.php");
} else {
    echo "Error: ID no especificado.";
}
