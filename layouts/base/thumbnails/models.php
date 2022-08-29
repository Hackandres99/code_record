<?php
    function make_thumbnail_container($pagina, $materia, $img,
     $video, $title, $creation_date, $description, $tag, $link){
        ?>
            <div class="thumbnail_container <?= $pagina ?>">
                <?php 
                    make_thumbnail($pagina, $materia, $img, $video);
                    make_thumbnail_title($title);
                    make_thumbnail_text($pagina, $creation_date, $description);
                    make_thumbnail_tag($pagina, $tag);
                    make_thumbnail_button($pagina, $link);
                ?>
            </div>
        <?php
    }
    function make_thumbnail($pagina, $materia, $img, $video){
        ?>
            <div class="thumbnail <?php echo $materia ?>">
                <img class="thumbnail_img" 
                        src="<?php echo $img ?>" 
                        alt="<?php echo $video ?>">
                        
                <?php if($pagina == 'materia'){ ?> 
                    <i class="fab fa-youtube video"></i> 
                <?php } ?>
            </div>
        <?php
    }

    function make_thumbnail_title($title){
        ?>
            <h2 class="thumbnail_title">
                <?php echo $title ?>
            </h2>
        <?php
    }

    function make_thumbnail_text($pagina, $fecha, $description){
        ?>
            <p class="thumbnail_text">
                <?php 
                    echo $pagina == 'materia' ? 
                    $fecha : $description
                ?> 
            </p>
        <?php
    }

    function make_thumbnail_tag($pagina, $tag){
        if($pagina == 'materias' or $pagina == 'inicio'){ 
            ?> 
                <ul class="thumbnail_tag">
                    <li><?php echo $tag ?></li>
                </ul> 
            <?php 
        }
    }

    function make_thumbnail_button($pagina, $link){ 
        if($pagina == 'materias'){
            ?> 
                <a href="?p=<?php echo $link ?>" 
                class="thumbnail_btn_contianer">
                    <button class="thumbnail_btn">Ver más</button>
                </a> 
            <?php 
        }
    }
?>