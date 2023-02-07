<?php 
    switch ($pagina) {
        case 'materias':
        case 'materia':
        case 'coding':
            make_link('materias', 'selected', 'menu_selected',
            'shapes','Materias'); 
        break;
        default: // other pages
            make_link('materias', '', '',
            'shapes', 'Materias');
        break;
    } 
?>