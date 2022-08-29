<?php
    $page = $pagina != 'inicio'?
     'materias': 'inicio';
     
     include 'phrases.php'
?>
<div class="front_page_container">

    <div class="front_page_images">
        
        <?php
            $images = null;
            $archive = '/img/front_pages/';
            $dir = opendir(dirname(__DIR__, 3).$archive);
            while ($img = readdir($dir)) {
                if($img != '.' and $img != '..'){
                    ?>
                        <img class="front_page_img" src="<?= $archive.$img ?>" 
                        alt="Portada UG <?= substr($img, 0, strlen($img) -5)?>">
                    <?php
                }
            }
        ?>
    </div>

    <div class="front_page_cover">
    <h1 class="front_page_title <?= $page ?>">
            <?php   
                if($pagina == 'inicio'){
                    echo 'Clase invertida para el aprendizaje autónomo de la programación.';
                }else{
                    echo 'La tecnología es mejor cuando junta a las personas. "Matt Mullenweg"';
                }
            ?>
        </h1>
        <div class="front_page_phrase_container">
            <?php
                foreach ($learning_phrases as $phrase) {
                    ?>
                        <p class="front_page_phrase">
                            <?= $phrase ?>
                        </p>
                    <?php
                }
            ?>
        </div>
    </div>
    
</div>


