<?php
    function make_form_group($type, $name, $text){
        ?>
            <div class="form_group">
                <input type="<?php echo $type ?>" name="<?php echo $name?>" 
                class="form_input" id="<?php echo $name?>" required>
                <span class="form_bar"></span>
                <label class="form_label"><?php echo $text?></label>
            </div>
        <?php
    }
?>