<?php 
    function make_acordion(
    $themes, $video, $thread, 
    $comment, $anwser, $tests, 
    $question, $option, $result, 
    $resources, $email){
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
                    <?php 
                        make_syllabus($themes, $video);
                        make_community($thread, $comment, $anwser, $email, '');
                        make_resources($resources,'');
                        make_tests($tests, $question, $option, $result, $email); 
                    ?>
                </div>
            </div>

        <?php
    }
?>