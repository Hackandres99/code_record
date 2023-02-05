<?php 
    function make_excerpt($pagina, $themes, $videos, $thread, $comments, $anwsers, $tests, $questions, $options, $results, $email){
        ?>
            <div class="section_boxes">
                <div class="sections">
                    
                    <div class="acordion_section" id="syllabus_btn">
                        <span class="acordion_section_bar"></span>
                        <li class="acordion_section_text">
                            <i class="fas fa-sort-amount-down"></i> 
                            Temario
                        </li>
                    </div>

                    <div class="acordion_section" id="community_btn">
                        <span class="acordion_section_bar"></span>
                        <li class="acordion_section_text">
                            <i class="fas fa-user-friends"></i> 
                            Comunidad
                        </li>
                    </div>

                    <div class="acordion_section" id="resources_btn">
                        <span class="acordion_section_bar"></span>
                        <li class="acordion_section_text">
                            <i class="far fa-sticky-note"></i> 
                            Recursos
                        </li>
                    </div>

                    <div class="acordion_section" id="tests_btn">
                        <span class="acordion_section_bar"></span>
                        <li class="acordion_section_text">
                            <i class="far fa-file-alt"></i> 
                            Evaluaciones
                        </li>
                    </div>

                </div>
                
                <div class="acordion">

                    <!-- Syllabus -->
                    <section class="acordion_section_container selected" id="syllabus_section">
                        <?php 
                            foreach ($themes as $key => $theme) {
                                ?>
                                    <div class="acordion_item">
                                        <div class="acordion_item_header">
                                            <h3 class="acordion_item_title"><?= $key+1 ?>. <?= $theme['title'] ?></h3>
                                            <label class="acordion_item_description"> <?=  $theme['description'] ?> </label>
                                        </div>
                                        <div class="acordion_item_body">
                                            <ul class="acordion_item_body_content">
                                                <?php
                                                    $video_rs = $videos->consult(['id','title', 'duration', 'src', 'upload_date'], ['id_theme =' => $theme['id']]);
                                                    foreach ($video_rs as $keyv => $vs) {
                                                        ?>
                                                            <li class="acordion_item_video_container">
                                                                <p class="acordion_video_title">
                                                                    <?= $keyv+1 ?>- <?= $vs['title'] ?>
                                                                </p>
                                                                <p class="acordion_video_duration">
                                                                    <?= substr($vs['duration'], 3, strlen($vs['duration'])) ?>
                                                                </p>
                                                                <p class="acordion_video_src"> <?= $vs['src'] ?>?autoplay=true</p>
                                                                <p class="acordion_video_upload-date"><?= $vs['upload_date'] ?></p>
                                                            </li>
                                                            <p class="acordion_video_id"><?= $vs['id'] ?></p>
                                                        <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </section>
                    
                    <!-- Community -->
                    <section class="acordion_section_container" id="community_section">

                        <?php
                            $threads = $thread->consult(
                                ['id','title', 'comment', 'user_email', 'id_video','creation_date']
                            );

                            foreach ($threads as $trd) {
                                ?>
                                    <!-- Threads -->
                                    <div class="thread_container" data-id-video="<?= $trd['id_video'] ?>">
                                        <h3 class="thread_title"> <?= $trd['title'] ?> </h3>
                                        <div class="thread_user_container">
                                            <i class="fas fa-user"></i>
                                            <div class="thread_description">
                                                <p class="thread_user_email"> <?= substr($trd['user_email'], 0, strlen($trd['user_email']) - 10)  ?> </p>
                                                <p class="thread_creation_date"> <?= $trd['creation_date'] ?> </p>
                                            </div>
                                        </div>
                                        <p class="thread_comment"> <?= $trd['comment'] ?> </p>

                                        <label class="thread_icon">
                                            <i class="far fa-comments"></i> 
                                            <?php
                                                if(!empty($comments)){
                                                    $comment_rs = $comments->consult(
                                                        ['id', 'comment', 'user_mention', 'user_email', 'creation_date'], 
                                                        ['id_thread =' => $trd['id']]);
                                                } 
                                            ?>
                                            <label class="thread_icon_description"> <?= count($comment_rs) ?> Comentarios </label>
                                        </label>

                                        <div class="comments_section">
                                            <?php
                                                foreach ($comment_rs as $key => $comment) {
                                                    ?>
                                                        <!-- Comments -->
                                                        <div class="comment_container">
                                                            <div class="thread_user_container">
                                                                <i class="fas fa-user"></i>
                                                                <div class="thread_description">
                                                                    <p class="thread_user_email"> <?= substr($comment['user_email'], 0, strlen($comment['user_email']) - 10)  ?> </p>
                                                                    <p class="thread_creation_date"> <?= $comment['creation_date'] ?> </p>
                                                                </div>
                                                            </div>
                                                            <p class="thread_comment"> Para <?= substr($comment['user_mention'], 0, strlen($comment['user_mention']) - 10)  ?> | <?= $comment['comment'] ?> </p>

                                                            <label class="thread_icon">
                                                                <i class="far fa-comments"></i> 
                                                                <?php
                                                                    if(!empty($anwsers)){
                                                                        $anwser_rs = $anwsers->consult(
                                                                            ['anwser', 'user_mention', 'user_email', 'creation_date'], 
                                                                            ['id_comment =' => $comment['id']]);
                                                                    } 
                                                                ?>
                                                                <label class="thread_icon_description"> Responder (<?= count($anwser_rs) ?>) </label>
                                                            </label>

                                                            <div class="anwsers_section">
                                                                <?php
                                                                    foreach ($anwser_rs as $key => $anwser) {
                                                                        ?>
                                                                            <!-- Anwsers -->
                                                                            <div class="thread_user_container">
                                                                                <i class="fas fa-user"></i>
                                                                                <div class="thread_description">
                                                                                    <p class="thread_user_email"> <?= substr($anwser['user_email'], 0, strlen($anwser['user_email']) - 10)  ?> </p>
                                                                                    <p class="thread_creation_date"> <?= $anwser['creation_date'] ?> </p>
                                                                                </div>
                                                                            </div>
                                                                            <p class="thread_comment"> Para <?= substr($anwser['user_mention'], 0, strlen($anwser['user_mention']) - 10)  ?> | <?= $anwser['anwser'] ?> </p>
                                                                        <?php
                                                                    }

                                                                    if(!empty($_POST['anwser_box'])){
                                                                        $record_anwser = [
                                                                            'user_email' => $email,
                                                                            'id_comment' => $_POST['id_comment'],
                                                                            'user_mention' => $comment['user_email'],
                                                                            'anwser' => $_POST['anwser_box']
                                                                        ];
                                                                        $anwsers->insert($record_anwser, null, null);
                                                                        unset($_POST['id_comment'] ,$_POST['anwser_box']);
                                                                        header('Location: ?p=redirect_comments');
                                                                    }
                                                                ?>

                                                                <form action="" method="post" class="form_anwser_container">
                                                                    <div class="thread_user_description">
                                                                        <i class="fas fa-user"></i>
                                                                        <div class="thread_title_container">
                                                                            <label for="thread_title" class="form_thread_email"> <?= substr($email, 0, strlen($email) - 10)  ?> </label>
                                                                            <input type="hidden" name="id_comment" value="<?= $comment['id'] ?>">
                                                                            <textarea type="text" class="form_comment" name="anwser_box" placeholder="Escribe una respuesta" required></textarea>
                                                                        </div>
                                                                    </div>
                                                    
                                                                    <input type="submit" value="Publicar" class="thread_btn">
                                                                </form>
                                                            </div>

                                                        </div>
                                                    <?php
                                                }
                                        
                                                if(!empty($_POST['comment_box'])){
                                                    $record_comment = [
                                                        'user_email' => $email,
                                                        'id_thread' => $_POST['id_thread'],
                                                        'user_mention' => $trd['user_email'],
                                                        'comment' => $_POST['comment_box']
                                                    ];
                                                    $comments->insert($record_comment, null, null);
                                                    unset($_POST['comment_box']);
                                                    header('Location: ?p=redirect_comments');
                                                }
                                            ?>

                                            <form action="" method="post" class="form_comment_container">
                                                <div class="thread_user_description">
                                                    <i class="fas fa-user"></i>
                                                    <div class="thread_title_container">
                                                        <label for="thread_title" class="form_thread_email"> <?= substr($email, 0, strlen($email) - 10)  ?> </label>
                                                        <input type="hidden" name="id_thread" value="<?= $trd['id'] ?>">
                                                        <textarea type="text" class="form_comment" name="comment_box" placeholder="Escribe una respuesta" required></textarea>
                                                    </div>
                                                </div>
                                
                                                <input type="submit" value="Publicar" class="thread_btn">
                                            </form>
                                        </div>
                                
                                    </div>
                                <?php
                            }
                    
                            if(!empty($_POST['thread_title']) && !empty($_POST['thread_comment'])){
                                $record_thread = [
                                    'user_email' => $email,
                                    'id_video' => $_POST['id_video'],
                                    'title' => $_POST['thread_title'],
                                    'comment' => $_POST['thread_comment']
                                ];
                                $thread->insert($record_thread, null, null);
                                unset($_POST['thread_title'], $_POST['thread_comment']);
                                header('Location: ?p=redirect_comments');
                            }
                        ?>

                        <form action="" method="post" class="form_thread_container">
                            <div class="thread_user_description">
                                <i class="fas fa-user"></i>
                                <div class="thread_title_container">
                                    <label for="thread_title" class="form_thread_email"><?= substr($email, 0, strlen($email) - 10)  ?></label>
                                    <input type="hidden" class="main_video_id" name="id_video" value="">
                                    <input type="text" class="form_thread_title" name="thread_title" placeholder="¿Quieres preguntar algo?" required>
                                </div>
                            </div>
                            <textarea type="text" class="form_thread_comment" name="thread_comment" placeholder="Cuéntanos qué quieres publicar" required></textarea>
                            <input type="submit" value="Publicar" class="form_thread_btn">
                        </form>
                    
                    </section>
                    
                    <!-- Resources -->
                    <section class="acordion_section_container" id="resources_section">
                    
                    </section>
                    
                    <!-- Tests -->
                    <section class="acordion_section_container" id="tests_section">

                        <?php 
                            if(!empty($tests)){
                                $test_rs = $tests->consult(['id', 'title', 'description'], ['id_subject = ' => 18]);
                            } 
                            foreach ($test_rs as $key => $test) { 
                        ?>

                                <div class="acordion_item">
                                    <div class="acordion_item_header">
                                        <h3 class="acordion_item_title"> <?= $key+1 ?>. <?= $test['title'] ?> </h3>
                                        <label class="acordion_item_description"> <?= $test['description'] ?> </label>
                                    </div>
                                    <div class="acordion_item_body">
                                        <div class="acordion_item_body_content">

                                            <!-- Info Box -->
                                            <div class="info_test_box">
                                                <p class="info_test_title">Reglas</p>
                                                <ol class="info_list">
                                                    <li class="info_test">Tiene 25 segundos para responder cada pregunta.</li>
                                                    <li class="info_test">Obtendra puntos de las respuesta seleccionadas correctamente.</li>
                                                    <li class="info_test">
                                                        Al reiniciar la evaluación, la cual no sera puntuada, podra ver la respuesta a las preguntas al elegir cualquier opción.
                                                    </li>
                                                </ol>
                                                <div class="start_test_btn">Continuar</div>
                                            </div>

                                            <!-- Quiz Box -->
                                            <?php 
                                                if(!empty($results)){
                                                    $result_rs = $results->consult(['score', 'id_test'], ['user_email = ' => "'$email'"]);
                                                } 
                                            ?>
                                            <div class="test_quizz_box">
                                                <div class="test_header">
                                                    <div class="test_time_left">Tiempo restante:</div>
                                                    <div class="test_timer_sec">25</div>
                                                </div>
                                                <div class="test_time_line"></div>
                                                <div class="section_test" data-id-test="<?= $test['id'] ?>">
                                                    <?php 
                                                        if(!empty($questions)){
                                                            $question_rs = $questions->consult(['id', 'question', 'anwser'], ['id_test = ' => $test['id']]);
                                                            $count_rs = $questions->consult(['count(*) AS total'], ['id_test = ' => $test['id']]);
                                                        } 
                                                        foreach ($question_rs as $key => $question) {
                                                            ?>
                                                                <div class="test_box" data-id-question="<?= $key+1 ?>">
                                                                    
                                                                    <div class="test_question"><?= $key+1 ?>. <?= $question['question'] ?></div>
                                                                    <div class="test_options">
                                                                        <?php 
                                                                            if(!empty($options)){
                                                                                $option_rs = $options->consult(['id', 'anwser'], 
                                                                                ['id_question = ' => $question['id']]);
                                                                            } 
                                                                            foreach ($option_rs as $key => $option) {
                                                                                
                                                                                if($question['anwser'] == $option['anwser']){
                                                                                    ?> 
                                                                                        <div class="test_option"> 
                                                                                            <?= $option['anwser'] ?>
                                                                                            <i class="far fa-check-circle"></i> 
                                                                                        </div>
                                                                                    <?php
                                                                                } else{
                                                                                    ?> 
                                                                                        <div class="test_option"> 
                                                                                            <?= $option['anwser'] ?>
                                                                                            <i class="far fa-times-circle"></i>
                                                                                        </div>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                        }
                                                    ?>

                                                    <!-- Result Box -->
                                                    <div class="result_test_box">
                                                        <div class="aproved_test">
                                                            <i class="fas fa-crown"></i> 
                                                            Aprobaste la evaluación con:
                                                        </div>
                                                        <div class="reproved_test">
                                                            <i class="far fa-meh"></i> 
                                                            Reprobaste la evaluación con: 
                                                        </div>
                                                        <?php foreach ($result_rs as $key => $result) { ?>

                                                            <div class="score_text" data-score="<?php 
                                                                if($result['id_test'] == $test['id']){
                                                                    echo $result['score'];
                                                                } ?>">

                                                                <?php
                                                                    if($result['id_test'] == $test['id']){
                                                                        echo $result['score'];
                                                                    }
                                                                ?>

                                                            </div>

                                                        <?php } ?>
                                                        
                                                        <input class="restart_test_btn" value="Ver respuestas">
                                                            
                                                    </div>

                                                </div>

                                                <!-- Quiz Box Footer -->
                                                <div class="footer_quizz">
                                                    <div class="question_tracker">
                                                        <label class="current_question"></label> 
                                                        de 
                                                        <label class="total_questions">
                                                            <?php
                                                                foreach ($count_rs as $key => $count) {
                                                                    echo $count['total'];
                                                                }
                                                            ?>
                                                        </label> 
                                                        Preguntas
                                                    </div>
                                                    <?php
                                                        if(!empty($_POST['score'])){
                                                            $record_score = [
                                                                'score' => $_POST['score'],
                                                                'user_email' => $email,
                                                                'id_test' => $test['id']
                                                            ];
                                                            $results->insert($record_score, null, null);
                                                            unset($_POST['score'], $_POST['id_test']);
                                                            header('Location: ?p=redirect_comments');
                                                        }
                                                    ?>
                                                    <form action="" method="post">
                                                        <input type="hidden" class="score" name="score" value="">
                                                        <input type="submit" class="send_test_btn" value="Enviar" disabled>
                                                    </form>
                                                    <!-- Poner boton de siguiente y ver que las rutas de los elementos apunten donde correspondan -->
                                                    <input class="next_question_btn" value="Siguiente" disabled readonly>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                        <?php } ?>

                    </section>

                </div>
            </div>

        <?php
    }
?>