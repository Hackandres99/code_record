<?php

require_once "BD.php";

class comments_modelo extends BD{

    private $bd;
    private $student_email;
    private $comment;
    private $creation_date	;
    private $table = 'comments';
    private $message = '';
    private $class = '';
    
    public function insert($record_comment, $comment, $email){
        $conexion = parent::connect();
        if($email == ''){
            $this->message = 'Inicie sesión para poder mandar un comentario.';
        }else if($comment == ''){
            $this->message = 'Ingrese un comentario.';
        }else{
            try {
                $query = "INSERT INTO {$this->table} SET student_email=:student_email,
                comment=:comment";
                
                $create_comment = $conexion->prepare($query)->execute($record_comment);
                $this->message = 'Comentario enviado correctamente.';
            } catch (Exception $e) {
                exit("ERROR: {$e->getMessage()}");
            }
        }
    }

    public function getMessage()
    {
        return $this->message;
    }
    
    public function consult($campos = null, $condiciones = null){}

    public function update($registro){}

    public function delete($accion, $eliminar){}

}


?>
