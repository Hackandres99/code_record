<?php

require_once "BD.php";

class Comment_modelo extends BD{

    private $user_email;
    private $id_thread;
    private $comment;
    private $user_mention;
    
    private $update_date;
    private $table = 'comments';
    
    public function insert($record_comment, $register2 = null, $operation = null){
        $conexion = parent::connect();
        try {
            $query = "INSERT INTO {$this->table} SET user_email=:user_email,
            id_thread=:id_thread, user_mention=:user_mention, comment=:comment";
            
            $create_comment = $conexion->prepare($query)->execute($record_comment);

        } catch (Exception $e) {
            exit("ERROR: {$e->getMessage()}");
        }
    }
    
    public function consult($campos = null, $condiciones = null){
        $conexion = parent::connect();
        try {
            $c_campos = '';

            if(!empty($campos)){
                foreach($campos as $campo){
                    $c_campos .= $campo.", ";
                }
                $c_campos = substr($c_campos, 0, -2);
            }else{
                $c_campos = '*';
            }

            if($condiciones != null){
                foreach($condiciones as $llave => $valor){
                    if($valor != ''){
                        $c_condiciones[] = "{$llave} {$valor}";
                    }
                }
                $query = "SELECT $c_campos FROM {$this->table} 
                WHERE ".implode(' AND ', $c_condiciones).";"; 

            }else{
                $query = "SELECT $c_campos FROM {$this->table};";
            }
            // echo "Consulta exitosa.";
            return $consultar = $conexion->query($query)->fetchAll();
            
        } catch (Exception $e) {
            exit("ERROR: {$e->getMessage()}");
        }
    }

    public function update($registro){}

    public function delete($accion, $eliminar){}

}


?>
