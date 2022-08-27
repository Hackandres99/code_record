<?php 
    require_once './phpCrud/thumbnails_modelo.php';
    $thumbnail = new Thumbnail_modelo();
    $pIsUnidades =  $pagina != 'unidades' ? '': 'unidades';
    $pIsUnidad = $pagina != 'unidad' ? '': 'unidad';
    $theresAnAccount = !isset($email) ? '?p=session' : '?p=unidad';

    $results = $thumbnail->consult();

    foreach ($results as $rs) {
        make_thumbnail_container($pIsUnidades, $pIsUnidad, $theresAnAccount, $rs['id'], $rs['image_src'],
        $rs['video_src'], $rs['title'], $rs['creation_date'], $rs['excerpt'], $rs['tag']);
    }
?>
