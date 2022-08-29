<?php

require_once "BD.php";

class Thread_modelo extends BD{

    private $student_email;
    private $id_subject;
    private $title;
    private $comment;
    
    private $update_date;
    private $table = 'threads';
    
    public function insert($record_thread, $register2 = null, $operation = null){
        $conexion = parent::connect();
        try {
            $query = "INSERT INTO {$this->table} SET student_email=:student_email,
            id_subject=:id_subject, title=:title, comment=:comment";
            
            $create_comment = $conexion->prepare($query)->execute($record_thread);

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
