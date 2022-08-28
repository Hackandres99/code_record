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
            $results[0]['image_src'], 'materia numero 1',
            $results[0]['title'],$results[0]['intro_video'],
            $results[0]['theme'], $pagina, $theresAnAccount, 
            $results[0]['id'], $results[0]['video_src'], 
            $results[0]['theme'], $results[0]['creation_date'],
            'quizz', 'Hacer actividad', 'clipboard-list', 'https://es.liveworksheets.com/tf3156579ty',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }

?>