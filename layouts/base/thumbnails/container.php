<?php 
    require_once './phpCrud/thumbnails_modelo.php';
    $thumbnail = new Thumbnail_modelo();
    $pIsMaterias =  $pagina != 'materias' ? '': 'materias';
    $pIsMateria = $pagina != 'materia' ? '': 'materia';
    $theresAnAccount = !isset($email) ? '?p=session' : '?p=materia';

    $results = $thumbnail->consult();

    foreach ($results as $rs) {
        make_thumbnail_container($pIsMaterias, $pIsMateria, $theresAnAccount, $rs['id'], $rs['image_src'],
        $rs['video_src'], $rs['title'], $rs['creation_date'], $rs['excerpt'], $rs['tag']);
    }
?>
