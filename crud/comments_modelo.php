<?php

require_once "BD.php";

class Comment_modelo extends BD{

    private $student_email;
    private $id_thread;
    private $comment;
    
    private $update_date;
    private $table = 'comments';
    
    public function insert($record_comment, $register2 = null, $operation = null){
        $conexion = parent::connect();
        try {
            $query = "INSERT INTO {$this->table} SET student_email=:student_email,
            id_thread=:id_thread, comment=:comment";
            
            $create_comment = $conexion->prepare($query)->execute($record_comment);

        } catch (Exception $e) {
            exit("ERROR: {$e->getMessage()}");
        }
    }
    
    public function consult($campos = null, $condiciones = null){
        
    }

    public function update($registro){}

    public function delete($accion, $eliminar){}

}


?>
