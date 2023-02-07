<?php
    if(isset($email)){
        include 'base/front_page/model.php';
        include 'base/thumbnails/models.php';
        include 'materias/circle_btn.php';

        include 'materia/model.php';
        include 'materia/acordion.php';
        include 'materia/syllabus.php';
        include 'materia/community.php';
        include 'materia/resources.php';
        include 'materia/tests.php';

        require_once './crud/subjects_modelo.php';
        require_once './crud/themes_modelo.php';
        require_once './crud/videos_modelo.php';

        require_once './crud/threads_modelo.php';
        require_once './crud/comments_modelo.php';
        require_once './crud/anwsers_modelo.php';

        require_once './crud/tests_modelo.php';
        require_once './crud/questions_modelo.php';
        require_once './crud/options_modelo.php';
        require_once './crud/results_modelo.php';

        require_once './crud/resources_modelo.php';

        $subject = new Subject_modelo();
        $subject_rs = $subject->consult(
            ['id', 'title', 'description', 'tool', 'image', 'creation_date'], 
            ['link =' => "'$pagina'"]);
        foreach($subject_rs as $key => $subject){
        
            $theme = new Theme_modelo();
            $theme_rs = $theme->consult(
                ['id','title', 'description'],
                ['id_subject =' => $subject['id']]
            );
            $video = new Video_modelo();
            $video_src = '';
            if($theme_rs[0]['id'] !== null){
                $vs = $video->consult(['src'],['id_theme =' => $theme_rs[0]['id']]);
                $video_src =  $vs[0]['src'];
            }

            $thread = new Thread_modelo();
            $comment = new Comment_modelo();
            $anwser = new Anwsers_modelo();

            $test = new Tests_modelo();
            $test_rs = $test->consult(
                ['id', 'title', 'description'], 
                ['id_subject = ' => $subject['id']]
            );
            $question = new Questions_modelo();
            $option = new Options_modelo();
            $result = new Result_modelo();

            $resource = new Resource_modelo();
            $resource_rs = $resource->consult(
                ['id','title', 'description', 'content', 'src', 'tag', 'upload_date'], 
                ['id_subject =' => $subject['id']]
            );
        
            make_materia(
                $subject['image'], $subject['tool'], $subject['title'],
                $theme_rs, $video, $thread, 
                $comment, $anwser, $test_rs, 
                $question, $option, $result, 
                $resource_rs, $email, $video_src, 
                $subject['description'], $subject['creation_date']
            );

            make_btn_link('yes', '', $visit_num, '', '');
        }
    } else {
        header('Location: ?p=session');
    }
?>