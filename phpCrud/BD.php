<?php
const DB = 'mysql';
const DB_servidor = 'localhost';
const DB_charset = 'utf8';

abstract class BD {
    private static $db = DB;
    private static $db_usuario = 'root';
    private static $db_pass = '40xWQ)fCQsdhY-Y6';
    private static $db_servidor = DB_servidor;
    private static $db_nombre = 'tecnofor';
    private static $db_charset = DB_charset;
    private $conexion; #Conectar con la base de datos

    public function connect(){
        try {
            $dsn = self::$db.":host=".self::$db_servidor.";
            dbname=".self::$db_nombre.";";
            
            $pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
            $pdo->exec("SET CHARSET ".self::$db_charset);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        } catch (PDOException $e) {
            exit("ERROR: {$e->getMessage()}");
        }
    }

    private function desconnect(){
        $this->conexion = null;
    }

    //Crud
    abstract protected function insert($register_student, $register_visit, $operation); #Create
    abstract protected function consult(); #Read
    abstract protected function update($registro); #Update
    abstract protected function delete($accion, $eliminar); #Delete
}
?>