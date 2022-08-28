<?php 
    $pmaterias = $pagina == 'materias'? 'materia_selected': '';
    $pmateriasM = $pagina == 'materias'? 'menu_selected': '';

    $palgorithm = $pagina == 'algorithm'? 'materia_selected': '';
    $palgorithmM = $pagina == 'algorithm'? 'menu_selected': '';

    $pdesign = $pagina == 'design'? 'materia_selected': '';
    $pdesignM = $pagina == 'design'? 'menu_selected': '';

    $pcoding = $pagina == 'coding'? 'materia_selected': '';
    $pcodingM = $pagina == 'coding'? 'menu_selected': '';

    $pdatabase = $pagina == 'database'? 'materia_selected': '';
    $pdatabaseM = $pagina == 'database'? 'menu_selected': '';

    $pnetworks = $pagina == 'networks'? 'materia_selected': '';
    $pnetworksM = $pagina == 'networks'? 'menu_selected': '';


    $materia_links = ['materias', 'algorithm', 'design',
    'coding', 'database', 'networks'];

    $link_classes = [$pmaterias, $palgorithm, $pdesign,
    $pcoding, $pdatabase, $pnetworks];

    $item_classes = [$pmateriasM, $palgorithmM, $pdesignM,
    $pcodingM, $pdatabaseM, $pnetworksM];

    $materia_icons = ['grip-vertical', 'square', 'square',
    'square', 'square', 'square'];

    $materia_text = ['Todas las materias', 'Algoritmo', 'Diseño Grafico',
     'Progrmación', 'Base de datos', 'Hardware y Redes'];
?>

<ul class="materias_menu materias" id="materias_menu">
    <?php
        for ($i=0; $i < 6; $i++) { 
            make_link($materia_links[$i], $link_classes[$i],
             $item_classes[$i],$materia_icons[$i],$materia_text[$i]);
        }  
    ?>
</ul>
