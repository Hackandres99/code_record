<ul class="unidades_menu" id="unidades_menu">
    <?php
        make_link('','unidades', 'unidad_selected','menu_selected',
        'grip-vertical', 'Todas las unidades');

        for ($i=1; $i < 7; $i++) { 
            make_link('','unidad'.$i, '', '', 'square', 'Unidad '.$i);
        }
    ?>
</ul>