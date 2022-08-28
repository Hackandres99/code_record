<?php 
    function make_excerpt($title, $pagina){
        ?>
            <div class="acordion">
                <div class="acordion_item">
                    <h3 class="acordion_item_title"><?= $title ?></h3>
                    <div class="acordion_item_body">
                        <div class="acordion_item_body_content">
                            <?php include 'contents.php'; make_content($pagina) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
?>