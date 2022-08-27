<?php 
    switch ($pagina) {
        case 'unidades':
            make_link('','unidad', 'selected', 'menu_selected',
            'chalkboard-teacher','Unidad#1'); 
        break;
        case 'unidad':
            make_link('','unidad2', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidad#2');
        break;
        case 'unidad1':
            make_link('','unidad2', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidad#2');
        break;
        case 'unidad2':
            make_link('','unidad3', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidad#3');
        break;
        case 'unidad3':
            make_link('','unidad4', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidad#4');
        break;
        case 'unidad4':
            make_link('','unidad5', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidad#5');
        break;
        case 'unidad5':
            make_link('','unidad6', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidad#6');
        break;
        case 'unidad6':
            make_link('','unidades', 'selected', 'menu_selected',
            'chalkboard-teacher', 'Unidades');
        break;
        default: // other pages
            make_link('','unidades', '', '',
            'chalkboard-teacher', 'Unidades');
        break;
    } 
?>