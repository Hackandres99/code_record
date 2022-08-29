<?php include 'models.php'?>
<div id="materia_menu_container" class="materia_menu_container">

    <?php
        foreach ($materia_links as $key => $link) {
            if($pagina == $link){

                make_materia_item('selected', $materia_icons[$key],
                $materia_texts[$key], $link);

            } else{

                make_materia_item('', $materia_icons[$key],
                $materia_texts[$key], $link);
                
            }
        }
    ?>

    <div class="icon_menus" id="icon_menus">
        <?php
            make_functional_icon('menu','header','', 'bars');
            make_functional_icon('menu','materias', '', 'shapes');
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

</div>
