<?php

require_once "BD.php";

class Thumbnail_modelo extends BD{

    private $bd;
    private $image_src;
    private $video_src;
    private $title;
    private $creation_date;
    private $excerpt;
    private $tag;
    private $table = 'thumbnails';

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
                WHERE ".implode('AND', $c_condiciones).";"; 

            }else{
                $query = "SELECT $c_campos FROM {$this->table};";
            }
            // echo "Consulta exitosa.";
            return $consultar = $conexion->query($query)->fetchAll();

        } catch (Exception $e) {
            exit("ERROR: {$e->getMessage()}");
        } 
    }

    public function insert($registro, $registro2, $operation){}
    
    public function update($registro){}

    public function delete($accion, $eliminar){}

}


?>
