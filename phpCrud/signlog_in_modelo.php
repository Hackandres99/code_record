<?php

require_once "BD.php";

class Signlog_in_modelo extends BD{

    private $bd;
    private $email;
    private $account_pass;
    private $creation_date;
    private $visit_date;
    private $table1 = 'students';
    private $table2 = 'visits';
    private $message = '';
    private $verify = '';

    public function insert($register_student, $register_visit, $operation){
        $conexion = parent::connect();
        try {
            if($operation != 'visit'){
                $query1 = "INSERT INTO {$this->table1} SET email=:email,
                account_pass=:account_pass";
                $create_user = $conexion->prepare($query1)->execute($register_student);

                $query2 = "INSERT INTO {$this->table2} SET student_email=:email";
                $create_visit = $conexion->prepare($query2)->execute($register_visit);
                $this->message = 'Registro exitoso.';
            }else {
                $query2 = "INSERT INTO {$this->table2} SET student_email=:email";
                $create_visit = $conexion->prepare($query2)->execute($register_visit);
                $this->message = 'Visita exitosa.';
            }
            
        } catch (Exception $e) {
            $this->message = 'Problemas al realizar el registro.';
            exit("ERROR: {$e->getMessage()}");
        }
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getVerify()
    {
        return $this->verify;
    }

    public function setVerify($message)
    {
        $this->verify = $message;
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
                $query = "SELECT $c_campos FROM {$this->table1} 
                WHERE ".implode(' AND ', $c_condiciones).";"; 

            }else{
                $query = "SELECT $c_campos FROM {$this->table2};";
            }
            
            $consultar = $conexion->query($query)->fetch();
            return $consultar;
            
        } catch (Exception $e) {
            exit("ERROR: {$e->getMessage()}");
        }
    }

    public function update($registro){
        $conexion = parent::connect();
        try {
            $query = "UPDATE {$this->table1} SET account_pass=:account_pass,
             update_date=:update_date WHERE email=:email;";
            $actualizar = $conexion->prepare($query)->execute($registro);
            echo "Registro actualizado correctamente.";
        } catch (Exception $e) {
            exit("ERROR: {$e->getMessage()}");
        }
    }

    public function delete($accion, $eliminar){}

}


?>
