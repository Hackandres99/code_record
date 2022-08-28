<?php
    if(isset($email)){
        include 'materias/circle_btn.php';
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        require_once './phpCrud/thumbnails_modelo.php';

        $theresAnAccount = !isset($email) ? '?p=session' : '?p=materia';
        $thumbnail = new Thumbnail_modelo();
        $results = $thumbnail->consult();

        
        make_materia(
            $results[1]['image_src'], 'materia numero 2',
            $results[1]['title'], $results[1]['intro_video'],
            $results[1]['theme'], $pagina, $theresAnAccount, 
            $results[1]['id'], $results[1]['video_src'], 
            $results[1]['theme'], $results[1]['creation_date'],
            'quizz', 'Hacer actividad', 'clipboard-list', 'https://docs.google.com/forms/d/e/1FAIpQLSdbzlhlSJSDgLD46L9uq3hTkqhHrda_cG-MDb_ihCkCCdTuFQ/viewform?usp=sf_link',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>