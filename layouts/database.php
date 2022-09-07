<?php
    // if(isset($email)){
    //     include 'base/front_page/model.php';
    //     include 'materia/excerpt.php';
    //     include 'base/thumbnails/models.php';
    //     include 'materia/light_box.php';
    //     include 'materia/model.php';
    //     include 'materias/circle_btn.php';
    //     require_once './crud/subjects_modelo.php';
    //     require_once './crud/themes_modelo.php';
    //     require_once './crud/videos_modelo.php';

    //     $subject = new Subject_modelo();
    //     $subject_rs = $subject->consult();

    //     $theme = new Theme_modelo();
    //     $theme_rs = $theme->consult(
    //                     ['id','title', 'description'],
    //                     ['id_subject =' => $subject_rs[3]['id']]
    //                 );

    //     $video = new Video_modelo();
    //     $video_src = '';
    //     if($theme_rs[0]['id'] !== null){
    //         $vs = $video->consult(['src'],['id_theme =' => $theme_rs[0]['id']]);
    //         $video_src =  $vs[0]['src'];
    //     }

    //     make_materia(
    //         $subject_rs[3]['image'], $subject_rs[3]['tool'], $subject_rs[3]['title'], 
    //         $pagina, $theme_rs, $video,
    //         $video_src, $subject_rs[3]['description'], $subject_rs[3]['creation_date'],
    //     );
    //     make_btn_link('yes', '', $visit_num, '', '');
    // } else {
    //     header('Location: ?p=session');
    // }

    // if(isset($email)){
        include 'base/front_page/model.php';
        include 'materia/excerpt.php';
        include 'base/thumbnails/models.php';
        include 'materia/light_box.php';
        include 'materia/model.php';
        include 'materias/circle_btn.php';

        require_once './crud/subjects_modelo.php';
        require_once './crud/themes_modelo.php';
        require_once './crud/videos_modelo.php';
        require_once './crud/threads_modelo.php';

        $subject = new Subject_modelo();
        $subject_rs = $subject->consult();

        $theme = new Theme_modelo();
        $theme_rs = $theme->consult(
                        ['id','title', 'description'],
                        ['id_subject =' => $subject_rs[2]['id']]
                    );

        $video = new Video_modelo();
        $video_src = '';
        if($theme_rs[0]['id'] !== null){
            $vs = $video->consult(['src'],['id_theme =' => $theme_rs[0]['id']]);
            $video_src =  $vs[0]['src'];
        }

        $thread = new Thread_modelo();
        $thread_rs = $thread->consult(
            ['id', 'title', 'comment', 'user_email', 'creation_date'],
            ['id_subject =' => $subject_rs[2]['id']]
        );
        if(!empty($_POST['thread_title']) && !empty($_POST['thread_comment'])){
            $record_thread = [
                'student_email' => $email,
                'id_subject' => 2,
                'title' => $_POST['thread_title'],
                'comment' => $_POST['thread_comment']
            ];
            $thread->insert($record_thread, null, null);
        }

        make_materia(
            $subject_rs[3]['image'], $subject_rs[3]['tool'], $subject_rs[3]['title'], 
            $pagina, $theme_rs, $video, $thread_rs, $email,
            $video_src, $subject_rs[3]['description'], $subject_rs[3]['creation_date'],
        );
        make_btn_link('yes', '', $visit_num, '', '');
    // } else {
        // header('Location: ?p=session');
    // }
?>