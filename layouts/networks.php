<?php
    if(isset($email)){
        include 'materias/circle_btn.php';
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        require_once './crud/subjects_modelo.php';

        $theresAnAccount = !isset($email) ? '?p=session' : '?p=materia';
        $subject = new Subject_modelo();
        $results = $subject->consult();

        make_materia(
            $results[4]['image'], $results[4]['tool'], $results[4]['title'], 
            $results[4]['description'], $pagina, 
            '', $results[4]['description'], $results[4]['creation_date'],
            'quizz', 'Hacer test', 'clipboard-list', 'https://es.liveworksheets.com/tf3156579ty',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>