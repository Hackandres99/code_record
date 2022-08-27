<?php
    if(isset($email)){
        include 'unidades/button_resources.php';
        include 'unidades/circle_btn.php';
        include 'base/front_page/model.php';
        include 'unidad/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'unidad/light_box.php';
        include 'unidad/model.php';
        require_once './phpCrud/thumbnails_modelo.php';

        $theresAnAccount = !isset($email) ? '?p=session' : '?p=unidad';
        $thumbnail = new Thumbnail_modelo();
        $results = $thumbnail->consult();

        make_unidad(
            $results[5]['image_src'], 'Unidad numero 6',
            $results[5]['title'], $results[5]['intro_video'],
            $results[5]['theme'], $pagina, $theresAnAccount, 
            $results[5]['id'], $results[5]['video_src'], 
            $results[5]['theme'], $results[5]['creation_date'],
            'quizz', 'Hacer actividad', 'clipboard-list', 'https://quizizz.com/',
            'geo', 'Ir a geogebra', 'subscript', 'https://www.geogebra.org/'
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
?>