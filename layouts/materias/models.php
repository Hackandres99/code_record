<?php
    function make_materia_item($class, $type , $icon, $text, $link){
        ?>
            <a href="<?= $link ?>"  class="materia_category_container <?php echo $class ?>">
                <label class="materia_initials">
                    <?php 
                        if($type != 'initial'){
                            ?> <i class='fas fa-grip-vertical'></i> <?php
                        } else {
                            echo $icon;
                        }
                    ?>
                </label>
                <div class="label_container">
                    <label class="materia_label"><?php echo $text ?></label>
                </div>
            </a>
        <?php
    }
?>