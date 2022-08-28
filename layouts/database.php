<?php
    if(isset($email)){
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        require_once './phpCrud/thumbnails_modelo.php';
        include 'materias/circle_btn.php';

        $theresAnAccount = !isset($email) ? '?p=session' : '?p=materia';
        $thumbnail = new Thumbnail_modelo();
        $results = $thumbnail->consult();

        make_materia(
            $results[3]['image_src'], 'materia numero 4',
            $results[3]['title'], $results[3]['intro_video'],
            $results[3]['theme'], $pagina, $theresAnAccount, 
            $results[3]['id'], $results[3]['video_src'], 
            $results[3]['theme'], $results[3]['creation_date'],
            'quizz', 'Hacer actividad', 'clipboard-list', 'https://quizizz.com/',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>