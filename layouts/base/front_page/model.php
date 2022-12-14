<?php
    function make_front_page($image_src, $title, $phrase){
        ?>
            <div class="front_page_container">
                <img class="front_page_img" 
                    src="<?= $image_src ?>"
                    alt="banner">
                <div class="front_page_cover">
                    <h1 class="front_page_title materias"><?= $title ?></h1>
                    <div class="front_page_phrase_container">
                        <p class="front_page_phrase">
                            <?= $phrase ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php
    }
?>