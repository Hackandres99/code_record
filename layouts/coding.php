<?php
    if(isset($email)){
        include 'materias/circle_btn.php';
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        require_once './crud/subjects_modelo.php';

        $subject = new Subject_modelo();
        $results = $subject->consult();

        make_materia(
            $results[2]['image'], $results[2]['tool'], $results[2]['title'], 
            $results[2]['description'], $pagina, 
            '', $results[2]['description'], $results[2]['creation_date'],
            'quizz', 'Hacer test', 'clipboard-list', 'https://es.liveworksheets.com/tf3156579ty',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>