<?php
require_once "Estudiante_modelo.php";
$estudiante = new Estudiante_modelo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
    <h1>Crud de estudiantes</h1>
    
    <h3>C: Insertar</h3>
    <?php
        $alumno = [
            'nombre' => 'Javier',
            'paterno' => 'Alvarez',
            'materno' => 'Satian',
            'email' => 'rodrigo.alvarezs@ug.edu.ec'
        ];
        // $estudiante->insertar($alumno);
    ?>

    <h3>R: Leer/Consultar</h3>
    <?php
        $campos = ['nombre','paterno','materno','edad'];
        $condicion = ['paterno LIKE' => "'%e%'"];
        $resultados = $estudiante->consultar($campos, $condicion);
        foreach($resultados AS $rs){
            echo "<p>El estduaiante {$rs['nombre']} {$rs['paterno']} 
            {$rs['materno']} tiene {$rs['edad']} años</p></br>";
        }
    ?>

    <h3>U: Actualizar</h3>
    <?php
        $alumno = [
            'nombre' => 'Rodrigo',
            'paterno' => 'Medina',
            'materno' => 'Suarez',
            'email' => 'rodrigo.alvarezs@ug.edu.ec'
        ];
        // $estudiante->actualizar($alumno);
    ?>
    <h3>D: Eliminar</h3>
    <?php
    $alumno = ['email' => 'rodrigo.alvarezs@ug.edu.ec'];
    // $estudiante->eliminar("", $alumno);
    ?>
</body>
</html>