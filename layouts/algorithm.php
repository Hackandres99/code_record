<?php
    if(isset($email)){
        include 'materias/circle_btn.php';
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        require_once './crud/subjects_modelo.php';
        require_once './crud/themes_modelo.php';
        require_once './crud/videos_modelo.php';

        $subject = new Subject_modelo();
        $subject_rs = $subject->consult();

        $theme = new Theme_modelo();
        $theme_rs = $theme->consult(
                        ['id', 'title', 'description'],
                        ['id_subject =' => $subject_rs[0]['id']]
                    );

        $video = new Video_modelo();
        $video_src = '';
        if($theme_rs[0]['id'] !== null){
            $vs = $video->consult(['src'],['id_theme =' => $theme_rs[0]['id']]);
            $video_src =  $vs[0]['src'];
        }

        make_materia(
            $subject_rs[0]['image'], $subject_rs[0]['tool'], $subject_rs[0]['title'], 
            $pagina, $theme_rs, $video,
            $video_src, $subject_rs[0]['description'], $subject_rs[0]['creation_date']
        );
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }


?>