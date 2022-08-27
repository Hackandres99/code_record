<div class="menu_btns">
    <?php 
    switch ($pagina) {
        case 'inicio':
        case 'contacto':
        case 'session':
        case 'registrarse':
            make_functional_icon('menu','header',
            'dif_page', 'bars');
        break;
        case 'unidades':
            make_functional_icon('','icon_search',
            'dif_page search', 'search');
    }
    ?>
</div>