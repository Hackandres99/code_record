<?php
    function make_link($type, $ahref, $aclass, $lclass, $icon, $name){
        if($type != 'http'){
            ?>
                <a href="?p=<?= $ahref ?>" class="menu_link <?= $aclass ?>">
                    <span class="menu_bar"></span>
                    <li class="<?= $lclass ?>">
                    <i class="fas fa-<?= $icon ?>"></i> 
                        <?= $name ?>
                    </li>
                </a>
            <?php
        } else {
            ?>
                <a href="<?= $ahref ?>" class="menu_link <?= $aclass ?>" 
                    target="_blank">
                    <span class="menu_bar"></span>
                    <li class="<?= $lclass ?>">
                    <i class="fas fa-<?= $icon ?>"></i> 
                        <?= $name ?>
                    </li>
                </a>
            <?php
        }
    }

    function make_session_link($email){
        ?>  
            <li class="menu_session_started">
                <span class="menu_bar"></span>
                <i class="fas fa-user"></i>
                <div class="session_container">
                    <label class="session_email">
                        <?php 
                            echo substr($email, 0, 15) 
                        ?>
                    </label>
                    <a href="?p=logout">
                        <div class="session_logout_container">
                            <label class="session_logout">
                                <i class="fas fa-sign-out-alt"></i>
                                Cerrar sesión
                            </label>
                        </div>
                    </a>
                </div>  
            </li> 
        <?php
    }

    function make_functional_icon($type, $id, $class, $icon){
        $type != 'menu'? '': $id = 'menu_icon_'.$id;
        ?>
            <div id="<?php echo $id ?>"
                class="menu_icon <?php echo $class ?>">
                <i class="fas fa-<?php echo $icon ?>"></i>
            </div>
        <?php
    }
?>