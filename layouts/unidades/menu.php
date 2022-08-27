<?php include 'models.php'?>
<div id="unidad_menu_container" class="unidad_menu_container">

    <?php
        make_unidad_item('selected', '' , '', 'Todas las unidades', '?p=unidades');
        for ($i=1; $i < 7; $i++) { 
            make_unidad_item('', 'initial' , 'U'.$i, 'Unidad '.$i, '?p=unidad'.$i);
        }
    ?>
            <div class="icon_menus" id="icon_menus">
                <?php
                    make_functional_icon('menu','header','', 'bars');
                    make_functional_icon('menu','unidades', '', 'grip-vertical');
                    make_functional_icon('menu','resources','', 'archive');
                ?>
            </div>

            <div class="visit_lateral">
                <label class="visit_icon">
                    <i class='fas fa-users'></i>
                </label>
                <div class="visit_text_container">
                    <label class="visit_text"><?= $visit_num ?></label>
                </div>
            </div>
    
    <!-- Unidad menu -->
    <!-- <div class="menu_icon">
        <i class='fas fa-book-open'></i>
    </div> -->
    
    <!-- <div class="menu_icon">
        <i class='fas fa-dumbbell'></i>
    </div> -->

</div>
