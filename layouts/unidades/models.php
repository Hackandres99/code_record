<?php
    function make_unidad_item($class, $type , $icon, $text, $link){
        ?>
            <a href="<?= $link ?>"  class="unidad_category_container <?php echo $class ?>">
                <label class="unidad_initials">
                    <?php 
                        if($type != 'initial'){
                            ?> <i class='fas fa-grip-vertical'></i> <?php
                        } else {
                            echo $icon;
                        }
                    ?>
                </label>
                <div class="label_container">
                    <label class="unidad_label"><?php echo $text ?></label>
                </div>
            </a>
        <?php
    }
?>