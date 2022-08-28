<?php 
    switch ($pagina) {
        case 'materias':
        case 'materia':
        case 'algorithm':
        case 'design':
        case 'coding':
        case 'database':
        case 'networks':
            make_link('materias', 'selected', 'menu_selected',
            'chalkboard-teacher','Materias'); 
        break;
        default: // other pages
            make_link('materias', '', '',
            'chalkboard-teacher', 'Materias');
        break;
    } 
?>