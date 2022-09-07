<?php 
    require_once './crud/subjects_modelo.php';
    $subject = new Subject_modelo();

    $materias =  $pagina == 'materias' ? 'materias': '';
    $materia = $pagina == 'materia' ? 'materia': '';

    $results = $subject->consult();

    foreach ($results as $key => $rs) {
        if($key != 4 and $key != 1){
            make_thumbnail_container($materias, $materia, $rs['image'], 
            '', $rs['title'], $rs['creation_date'], $rs['description'], 
            $rs['tool'], $rs['link']);
        }
    }
?>
