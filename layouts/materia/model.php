<?php
    function make_materia($f_image_src, $f_title, $f_phrase, $introductory_video, $e_title,
     $e_pagina, $t_account, $t_id, $t_video, $t_title, $t_cre_date,  
     $q_type, $q_text, $q_icon, $q_link, $g_type, $g_text, $g_icon, $g_link){

        make_front_page($f_image_src, $f_title, $f_phrase);
        
        make_excerpt($e_title, $e_pagina);

?> 
            <div class="materia_resources"> 
                <?php
                    make_thumbnail_container('materia', 'materia', $t_account, $t_id,
                    $f_image_src,$t_video, $t_title,
                    $t_cre_date, '',''); 

                    make_btn_link('', $q_type, $q_text, $q_icon, $q_link);
                ?>  
            </div> 

            <div class="materia_container">
                <?php   
                    make_btn_link('', $g_type, $g_text, $g_icon, $g_link); 
                ?>
            </div> 

<?php         
        make_light_box();
    }
?>