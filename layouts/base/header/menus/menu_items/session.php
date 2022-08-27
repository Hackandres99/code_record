<?php 
    if(!isset($email)){
        switch ($pagina) {
            case 'registrarse':
                make_link('','session', 'selected',
                'menu_selected', 'user', 'Iniciar Sesión');
            break;
            case 'session':
                make_link('','registrarse', 'selected',
                'menu_selected', 'user', 'Registrarse');
            break;
            default: // other pages
                make_link('','session', '',
                '', 'user', 'Iniciar Sesión');
            break;
        }
    }else{
        make_session_link($email);
    } 
?>