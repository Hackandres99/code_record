<?php
    function make_tests($tests, $question, $option, 
    $result, $email){
        ?>
            <section class="acordion_section_container" id="tests_section">
                <?php foreach ($tests as $key => $tst) { ?>

                    <div class="acordion_item">
                        <div class="acordion_item_header">
                            <h3 class="acordion_item_title"> <?= $key+1 ?>. <?= $tst['title'] ?> </h3>
                            <label class="acordion_item_description"> <?= $tst['description'] ?> </label>
                        </div>
                        <div class="acordion_item_body">
                            <div class="acordion_item_body_content">

                                <!-- Info Box -->
                                <div class="info_test_box">
                                    <p class="info_test_title">Reglas</p>
                                    <ol class="info_list">
                                        <li class="info_test">Tiene 25 segundos para responder cada pregunta.</li>
                                        <li class="info_test">El tiempo seguirá transcurriendo aun si ha salido de la evaluación, esto puede afectar a su nota final.</li>
                                        <li class="info_test">Obtendrá puntos de las respuestas seleccionadas correctamente.</li>
                                        <li class="info_test">Una vez enviada la evaluación podrá acceder a las respuestas de la misma.</li>
                                    </ol>
                                    <div class="start_test_btn">Continuar</div>
                                </div>

                                <!-- Quiz Box -->
                                <div class="test_quizz_box">
                                    <div class="test_header">
                                        <div class="test_time_left">Tiempo restante:</div>
                                        <div class="test_timer_sec">25</div>
                                    </div>
                                    <div class="test_time_line"></div>
                                    <div class="section_test" data-id-test="<?= $key+1 ?>">
                                        <?php 
                                            if(!empty($question)){
                                                $questions = $question->consult(['id', 'question', 'anwser'], ['id_test = ' => $tst['id']]);
                                                $count_rs = $question->consult(['count(*) AS total'], ['id_test = ' => $tst['id']]);
                                            } 
                                            foreach ($questions as $key => $qst) {
                                                ?>
                                                    <div class="test_box" data-id-question="<?= $key+1 ?>">
                                                        
                                                        <div class="test_question"><?= $key+1 ?>. <?= $qst['question'] ?></div>
                                                        <div class="test_options">
                                                            <?php 
                                                                if(!empty($option)){
                                                                    $options = $option->consult(['id', 'anwser'], 
                                                                    ['id_question = ' => $qst['id']]);
                                                                } 
                                                                foreach ($options as $key => $opt) {
                                                                    
                                                                    if($qst['anwser'] == $opt['anwser']){
                                                                        ?> 
                                                                            <div class="test_option"> 
                                                                                <?= $opt['anwser'] ?>
                                                                                <i class="far fa-check-circle"></i> 
                                                                            </div>
                                                                        <?php
                                                                    } else{
                                                                        ?> 
                                                                            <div class="test_option"> 
                                                                                <?= $opt['anwser'] ?>
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

                                            <?php 
                                                $results = $result->consult(
                                                    ['score'], 
                                                    [
                                                        'user_email = ' => "'$email'", 
                                                        'id_test = ' => $tst['id']
                                                    ]
                                                ); 
                                                if(!empty($results)){
                                            ?>
                                                    <div class="score_text" data-score="<?= $results[0]['score'];?>">
                                                        <?= $results[0]['score'];?>
                                                    </div>
                                            <?php 
                                                } 
                                            ?>

                                            <div class="score_text_temporal"></div>
                                            
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
                                                    'id_test' => $_POST['id_test']
                                                ];
                                                $result->insert($record_score, null, null);
                                                unset($_POST['score'], $_POST['id_test']);
                                                header('Location: ?p=redirect');
                                            }
                                        ?>
                                        <form action="" method="post">
                                            <input type="hidden" name="id_test" value="<?= $tst['id'] ?>">
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
        <?php
    }
?>