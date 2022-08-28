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
            $results[4]['image_src'], 'materia numero 5',
            $results[4]['title'], $results[4]['intro_video'], 
            $results[4]['theme'], $pagina, $theresAnAccount, 
            $results[4]['id'], $results[4]['video_src'], 
            $results[4]['theme'], $results[4]['creation_date'],
            'quizz', 'Hacer actividad', 'clipboard-list', 'https://quizizz.com/',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>