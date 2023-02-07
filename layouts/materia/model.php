<?php
    function make_materia(
    $f_image, $f_title, $f_phrase, 
    $themes, $video, $thread, 
    $comment, $anwser, $tests, 
    $question, $option, $result, 
    $resources, $email, $t_video, 
    $t_title, $t_cre_date
    ){

        make_front_page($f_image, $f_title, $f_phrase);
?> 
        <div class="materia_resources"> 
            <div class="materia_resource_view">
                <?php
                    make_thumbnail_container(
                    'materia', 'materia', $f_image, 
                    $t_video, $t_title, $t_cre_date, 
                    '', '', ''
                    ); 

                    make_acordion(
                    $themes, $video, $thread, 
                    $comment, $anwser, $tests, 
                    $question, $option, $result, 
                    $resources, $email
                    );
                ?>   
            </div>
            <div class="materia_resource_view">
                <?php 
                    make_community($thread, $comment, $anwser, $email, 'show');
                    ?>
                        <div class="external_resource_container">
                            <div class="resource_section_header">
                                <span class="resource_section_bar"></span>
                                <div class="resource_section_text">
                                    <i class="far fa-sticky-note"></i> 
                                    Recursos
                                </div>
                            </div>
                            <?php make_resources($resources, 'show');  ?>
                        </div>
                    <?php
                    
                ?>
            </div>
            
        </div> 
<?php         
    }
?>