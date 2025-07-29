<?php
    define('BASE_DIR','C:\xampp\htdocs\CRUD_PHPN');
    require_once BASE_DIR . '\conexion.php';
    require_once BASE_DIR . '\Model/Items.php';

    class Item{
        private $db;
        private $pdo;

        function __construct()
        {
            $this->db = new Conexion();
            $this->pdo = $this->db->connect();
        }

        function mostrar(){
            $sql = "SELECT * FROM items order by id asc";
            $items = $this->pdo->query($sql, PDO::FETCH_ASSOC);
            return $items;
        }

        function find($id){
            $sql = "SELECT * FROM items WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            return $item;
        }

    }
?>