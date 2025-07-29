<?php
class Conexion
{
    public function connect() 
    {
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $database = "php_crudn";

        try{
            $con = new PDO('mysql:host='. $host .';dbname='.$database.';charset=utf8', $user, $password);
            $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        }catch(PDOException $e){
            echo "No se pudo conectar: " . $e;
        }
        

        // return database handler
        
    }
}
