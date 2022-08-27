<?php 
    switch ($pagina) {
        case 'unidades': 
        case 'unidad':
        case 'unidad1':
        case 'unidad2':
        case 'unidad3':
        case 'unidad4':
        case 'unidad5':
        case 'unidad6':
            $unidades = 'unidades'; 
        break;
    }
    $inicioS = $pagina == 'inicio' ? 'selected': '';
    $inicioMS = $pagina == 'inicio' ? 'menu_selected': '';
    $contactoS = $pagina == 'contacto' ? 'selected': '';
    $contactoMS = $pagina == 'contacto' ? 'menu_selected': '';
?> 
<div class="menus">
    <?php
        include 'menus/default_menu.php';
        include 'menus/unidad_menu.php';
        include 'menus/resource_menu.php'
    ?>
</div>
