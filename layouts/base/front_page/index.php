<?php
    $front_img = $pagina == 'inicio'?
    '/img/front_pages/inicio.jpeg':
    '/img/front_pages/unidades.jpg';

    $page = $pagina != 'inicio'?
     'unidades': 'inicio';
     
?>
<div class="front_page_container">

    <img class="front_page_img" 
        src="<?= $front_img ?>"
           alt="banner">

    <div class="front_page_cover">
    <?php
        if($pagina == 'inicio'){
            ?>
                <div class="front_page_logos">
                    <img class="img" src="/img/inicio/UG.png" alt="UG logo">
                    <img class="img" src="/img/inicio/FHR.png" alt="FHR logo">
                    <img class="img" src="/img/inicio/philosophy.png" alt="philosophy logo">
                </div>
            <?php
        }
    ?>
    <h1 class="front_page_title <?= $page ?>">
            <?php   
                if($pagina == 'inicio'){
                    echo 'Diseño Pedagógico Digital Basado En Los Recursos Tecnológicos Educativos
                    Para Fortalecer El Aprendizaje De La Asignatura De Matemáticas de Primer Año de Bachillerato.';
                }else{
                    echo 'Encuentra tu tema de interes.';
                }
            ?>
        </h1>
        <p class="front_page_phrase">
            Nunca te rindas. A veces la última llave es la que abre la puerta.
        </p>
    </div>
    
</div>

