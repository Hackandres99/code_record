<?php

require_once "BD.php";

class Anwsers_modelo extends BD{

    private $user_email;
    private $id_comment;
    private $anwser;
    private $user_mention;
    
    private $update_date;
    private $table = 'anwsers';
    
    public function insert($record_com_anwser, $register2 = null, $operation = null){
        $conexion = parent::connect();
        try {
            $query = "INSERT INTO {$this->table} SET user_email=:user_email,
            id_comment=:id_comment, user_mention=:user_mention, anwser=:anwser";
            
            $create_com_anwser = $conexion->prepare($query)->execute($record_com_anwser);

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