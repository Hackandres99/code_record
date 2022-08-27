<?php 
    function make_btn_link($b_fixed, $b_type, $b_text, $b_icon, $b_link)
    {
        if($b_fixed == 'yes'){
            ?>
                <div class="button_container">
                    <div class="circle_btn">
                        <div class="icon visits">
                            <div class="tooltip"><?= $b_text ?></div>
                            <span><i class="fas fa-users"></i></span>
                        </div> 
                    </div>
                </div>
            <?php
        } else{
            ?>
                <a href="<?= $b_link ?>" target="_blank" class="circle_btn content">
                    <div class="icon <?= $b_type ?>">
                        <div class="tooltip"><?= $b_text ?></div>
                        <span><i class="fas fa-<?= $b_icon ?>"></i></span>
                    </div> 
                </a>
            <?php
        }
    }
?>


