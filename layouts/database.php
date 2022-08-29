<?php
    if(isset($email)){
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        require_once './crud/subjects_modelo.php';
        include 'materias/circle_btn.php';

        $theresAnAccount = !isset($email) ? '?p=session' : '?p=materia';
        $subject = new Subject_modelo();
        $results = $subject->consult();

        make_materia(
            $results[3]['image'], $results[3]['tool'], $results[3]['title'], 
            $results[3]['description'], $pagina, 
            '', $results[3]['description'], $results[3]['creation_date'],
            'quizz', 'Hacer test', 'clipboard-list', 'https://es.liveworksheets.com/tf3156579ty',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>