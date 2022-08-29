<?php
    function make_materia_item($class, $icon, $text, $link){
        ?>
            <a href="?p=<?= $link ?>"  class="materia_category_container <?php echo $class ?>">
                <label class="materia_icon">
                    <i class="fas fa-<?= $icon ?>"></i>
                </label>
                <div class="label_container">
                    <label class="materia_label"><?php echo $text ?></label>
                </div>
            </a>
        <?php
    }
?>