<?php include 'models.php'?>
<div id="materia_menu_container" class="materia_menu_container">

    <?php
        $pmaterias = $pagina == 'materias'? 'selected': '';
        $palgorithm = $pagina == 'algorithm'? 'selected': '';
        $pdesign = $pagina == 'design'? 'selected': '';
        $pcoding = $pagina == 'coding'? 'selected': '';
        $pdatabase = $pagina == 'database'? 'selected': '';
        $pnetworks = $pagina == 'networks'? 'selected': '';

        make_materia_item($pmaterias, '' , '', 'Todas las materias', '?p=materias');
        make_materia_item($palgorithm, '' , 'user', 'Algoritmo', '?p=algorithm');
        make_materia_item($pdesign, '' , 'user', 'Diseño Grafico', '?p=design');
        make_materia_item($pcoding, '' , 'user', 'Programación', '?p=coding');
        make_materia_item($pdatabase , '' , 'user', 'Base de datos', '?p=database');
        make_materia_item($pnetworks, '' , 'user', 'Hardware y redes', '?p=networks');
    ?>

    <div class="icon_menus" id="icon_menus">
        <?php
            make_functional_icon('menu','header','', 'bars');
            make_functional_icon('menu','materias', '', 'grip-vertical');
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
