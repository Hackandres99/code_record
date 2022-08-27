<?php
    function make_front_page($image_src, $title, $phrase){
        ?>
            <div class="front_page_container">
                <img class="front_page_img" 
                    src="<?= $image_src ?>"
                    alt="banner">
                <div class="front_page_cover">
                    <h1 class="front_page_title unidades"><?= $title ?></h1>
                    <p class="front_page_phrase">
                        <?= $phrase ?>
                    </p>
                </div>
            </div>
        <?php
    }
?>