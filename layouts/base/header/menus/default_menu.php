<ul class="default_menu <?= $materias ?>" id="default_menu">
    <?php
        make_link('inicio', $inicioS, $inicioMS,'home','Inicio');
        include 'menu_items/materias.php';
        include 'menu_items/session.php';
    ?>
</ul>

<!-- make_link('contacto', $contactoS,
    $contactoMS, 'phone-volume','Contacto' ); -->