<?php
    function make_materia(
    $f_image, $f_title, $f_phrase,
    $e_pagina, $e_themes, $e_videos,
    $t_video, $t_title, $t_cre_date){

        make_front_page($f_image, $f_title, $f_phrase);
?> 
        <div class="materia_resources"> 
            <?php
                make_thumbnail_container('materia', 'materia', $f_image, $t_video, $t_title,
                $t_cre_date, '', '', ''); 

                make_excerpt($e_pagina, $e_themes, $e_videos);
            ?>  
        </div> 

<?php         
        make_light_box();
    }
?>