<?php 
    function make_excerpt($pagina, $themes, $videos, $thread, $email){
        ?>
            <div class="acordion">

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
                                                $video_rs = $videos->consult(['title', 'duration', 'src'], ['id_theme =' => $theme['id']]);
                                                foreach ($video_rs as $keyv => $vs) {
                                                    ?>
                                                        <li class="acordion_item_video_container">
                                                            <p class="acordion_video_title">
                                                                <?= $keyv+1 ?>- <?= $vs['title'] ?>
                                                            </p>
                                                            <p class="acordion_video_duration">
                                                                <?= substr($vs['duration'], 3, strlen($vs['duration'])) ?>
                                                            </p>
                                                            <video class="acordion_video_src " src="<?= $vs['src'] ?>"></video>
                                                        </li>
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
                <section class="acordion_section_container" id="community_section">
                    <form action="" method="post" class="form_thread">
                        <div class="thread_user_description">
                            <i class="fas fa-user"></i>
                            <div class="thread_title_container">
                                <label for="thread_title" class="form_thread_email"><?= $email ?></label>
                                <input type="text" class="form_thread_title" name="thread_title" placeholder="¿Quieres preguntar algo?" required>
                            </div>
                        </div>
                        <textarea type="text" class="form_thread_comment" name="thread_comment" placeholder="Cuéntanos qué quieres publicar" required></textarea>
                        <input type="submit" value="Publicar" class="form_thread_btn">
                    </form>

                </section>
                <section class="acordion_section_container" id="resources_section">

                </section>
                <section class="acordion_section_container" id="tests_section">

                    <div class="acordion_item">
                        <div class="acordion_item_header">
                            <h3 class="acordion_item_title">1. Titulo de Evaluación</h3>
                            <label class="acordion_item_description">Descripción de la primera evaluación</label>
                        </div>
                        <div class="acordion_item_body">
                            <div class="acordion_item_body_content">
                                <div class="start_test_btn"><button>Comenzar evaluación</button></div>

                                    <!-- Info Box -->
                                    <div class="info_test_box">
                                        <div class="info_test_title"><span>Some Rules of this Quiz</span></div>
                                        <div class="info-list">
                                            <div class="info_test">1. You will have only <span>15 seconds</span> per each question.</div>
                                            <div class="info_test">2. Once you select your answer, it can't be undone.</div>
                                            <div class="info_test">3. You can't select any option once time goes off.</div>
                                            <div class="info_test">4. You can't exit from the Quiz while you're playing.</div>
                                            <div class="info_test">5. You'll get points on the basis of your correct answers.</div>
                                        </div>
                                        <div class="test_buttons">
                                            <button class="quit_test_btn">Salir del test</button>
                                            <button class="restart_test_btn">Continuar</button>
                                        </div>
                                    </div>

                                    <!-- Quiz Box -->
                                    <div class="test_quiz_box">
                                        <div class="header_quizz">
                                            <div class="quiz_box_title">Siglas de lenguajes de programación</div>
                                            <div class="quiz_box_timer">
                                                <div class="time_left_txt">Tiempo restante</div>
                                                <div class="timer_sec">15</div>
                                            </div>
                                            <div class="time_line"></div>
                                        </div>
                                        <section class="section_test">
                                            <div class="que_text">
                                                <!-- Here I've inserted question from JavaScript -->
                                            </div>
                                            <div class="option_list">
                                                <!-- Here I've inserted options from JavaScript -->
                                            </div>
                                        </section>

                                        <!-- footer of Quiz Box -->
                                        <div class="footer_quizz">
                                            <div class="total_que">
                                                <!-- Here I've inserted Question Count Number from JavaScript -->
                                            </div>
                                            <button class="next_btn">Siguiente</button>
                                        </div>
                                    </div>

                                    <!-- Result Box -->
                                    <div class="result_test_box">
                                        <div class="icon">
                                            <i class="fas fa-crown"></i>
                                        </div>
                                        <div class="complete_text">Bienvenido, ¿desea realizar la evaluación?</div>
                                        <div class="score_text">
                                            <!-- Here I've inserted Score Result from JavaScript -->
                                        </div>
                                        <div class="test_buttons">
                                            <button class="restart_test_btn">Realizar Evaluación</button>
                                            <button class="quit_test_btn">Salir</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        <?php
    }
?>