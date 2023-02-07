<?php 
    $materia_links = ['materias', 'coding'];

    $materia_icons = ['shapes',
    'code'];

    $materia_texts = ['Todas las materias',
     'Programación'];
?>

<ul class="materias_menu materias" id="materias_menu">
    <?php
        foreach ($materia_links as $key => $link) {
            if($pagina == $link){

                make_link($link, 'materia_selected', 'menu_selected',
                $materia_icons[$key], $materia_texts[$key]);

            } else{

                make_link($link, '', '',
                $materia_icons[$key], $materia_texts[$key]);
                
            }
        } 
    ?>
</ul>
