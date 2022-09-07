<?php 
    $materia_links = ['materias', 'algorithm',
    'coding', 'database'];

    $materia_icons = ['shapes', 'bezier-curve',
    'code', 'server'];

    $materia_texts = ['Todas las materias', 'Algoritmo',
     'Programación', 'Base de datos'];

    // $materia_links = ['materias', 'algorithm', 'design',
    // 'coding', 'database', 'networks'];

    // $materia_icons = ['shapes', 'bezier-curve', 'palette',
    // 'code', 'server', 'globe'];

    // $materia_texts = ['Todas las materias', 'Algoritmo', 'Diseño Grafico',
    //  'Programación', 'Base de datos', 'Hardware y Redes'];
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
