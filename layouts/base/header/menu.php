<?php 
    switch ($pagina) {
        case 'materias': 
        case 'materia':
        case 'algorithm':
        case 'design':
        case 'coding':
        case 'database':
        case 'networks':
            $materias = 'materias'; 
        break;
    }
    $inicioS = $pagina == 'inicio' ? 'selected': '';
    $inicioMS = $pagina == 'inicio' ? 'menu_selected': '';
    $contactoS = $pagina == 'contacto' ? 'selected': '';
    $contactoMS = $pagina == 'contacto' ? 'menu_selected': '';

    include 'menus/materia_menu.php';
?> 
<div class="menus">
    <?php
        include 'menus/default_menu.php';
        include 'menus/materia_menu.php'
    ?>
</div>
