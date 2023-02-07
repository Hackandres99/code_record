<?php
    function make_community($thread, $comment, $anwser, $email, $show){
        ?>
            <section class="acordion_section_container <?= $show ?>" id="community_section">
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
                                        if(!empty($comment)){
                                            $comments = $comment->consult(
                                                ['id', 'comment', 'user_mention', 'user_email', 'creation_date'], 
                                                ['id_thread =' => $trd['id']]);
                                        } 
                                    ?>
                                    <label class="thread_icon_description"> <?= count($comments) ?> Comentarios </label>
                                </label>

                                <div class="comments_section">
                                    <?php
                                        foreach ($comments as $key => $comm) {
                                            ?>
                                                <!-- Comments -->
                                                <div class="comment_container">
                                                    <div class="thread_user_container">
                                                        <i class="fas fa-user"></i>
                                                        <div class="thread_description">
                                                            <p class="thread_user_email"> <?= substr($comm['user_email'], 0, strlen($comm['user_email']) - 10)  ?> </p>
                                                            <p class="thread_creation_date"> <?= $comm['creation_date'] ?> </p>
                                                        </div>
                                                    </div>
                                                    <p class="thread_comment"> Para <?= substr($comm['user_mention'], 0, strlen($comm['user_mention']) - 10)  ?> | <?= $comm['comment'] ?> </p>

                                                    <label class="thread_icon">
                                                        <i class="far fa-comments"></i> 
                                                        <?php
                                                            if(!empty($anwser)){
                                                                $anwsers = $anwser->consult(
                                                                    ['anwser', 'user_mention', 'user_email', 'creation_date'], 
                                                                    ['id_comment =' => $comm['id']]);
                                                            } 
                                                        ?>
                                                        <label class="thread_icon_description"> Responder (<?= count($anwsers) ?>) </label>
                                                    </label>

                                                    <div class="anwsers_section">
                                                        <?php
                                                            foreach ($anwsers as $key => $aws) {
                                                                ?>
                                                                    <!-- Anwsers -->
                                                                    <div class="thread_user_container">
                                                                        <i class="fas fa-user"></i>
                                                                        <div class="thread_description">
                                                                            <p class="thread_user_email"> <?= substr($aws['user_email'], 0, strlen($aws['user_email']) - 10)  ?> </p>
                                                                            <p class="thread_creation_date"> <?= $aws['creation_date'] ?> </p>
                                                                        </div>
                                                                    </div>
                                                                    <p class="thread_comment"> Para <?= substr($aws['user_mention'], 0, strlen($aws['user_mention']) - 10)  ?> | <?= $aws['anwser'] ?> </p>
                                                                <?php
                                                            }

                                                            if(!empty($_POST['anwser_box'])){
                                                                $record_anwser = [
                                                                    'user_email' => $email,
                                                                    'id_comment' => $_POST['id_comment'],
                                                                    'user_mention' => $comm['user_email'],
                                                                    'anwser' => $_POST['anwser_box']
                                                                ];
                                                                $anwser->insert($record_anwser, null, null);
                                                                unset($_POST['id_comment'] ,$_POST['anwser_box']);
                                                                header('Location: ?p=redirect');
                                                            }
                                                        ?>

                                                        <form action="" method="post" class="form_anwser_container">
                                                            <div class="thread_user_description">
                                                                <i class="fas fa-user"></i>
                                                                <div class="thread_title_container">
                                                                    <label for="thread_title" class="form_thread_email"> <?= substr($email, 0, strlen($email) - 10)  ?> </label>
                                                                    <input type="hidden" name="id_comment" value="<?= $comm['id'] ?>">
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
                                            $comment->insert($record_comment, null, null);
                                            unset($_POST['comment_box']);
                                            header('Location: ?p=redirect');
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
                            'id_video' => (int)$_POST['id_video'],
                            'title' => $_POST['thread_title'],
                            'comment' => $_POST['thread_comment']
                        ];
                        $thread->insert($record_thread, null, null);
                        unset($_POST['thread_title'], $_POST['thread_comment']);
                        header('Location: ?p=redirect');
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
        <?php
    }
?>