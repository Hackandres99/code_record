<?php
    function make_thumbnail_container($pagina, $pIsMateria, $theresAnAccount, $id, $img_src,
     $video_src, $title, $creation_date, $excerpt, $tag){
        ?>
            <div class="thumbnail_container <?= $pagina?>">
                <?php 
                    make_thumbnail($pagina, $pIsMateria, $img_src, $video_src);
                    make_thumbnail_title($title);
                    make_thumbnail_text($pagina, $creation_date, $excerpt);
                    make_thumbnail_tag($pagina, $tag);
                    make_thumbnail_button($pagina, $theresAnAccount, $id);
                ?>
            </div>
        <?php
    }
    function make_thumbnail($pagina, $pIsMateria, $img_src, $video_src){
        ?>
            <div class="thumbnail <?php echo $pIsMateria ?>">
                <img class="thumbnail_img" 
                        src="<?php echo $img_src ?>" 
                        alt="<?php echo $video_src ?>">
                        
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

    function make_thumbnail_text($pagina, $fecha, $excerpt){
        ?>
            <p class="thumbnail_text">
                <?php 
                    echo $pagina == 'materia' ? 
                    $fecha : $excerpt
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

    function make_thumbnail_button($pagina, $theresAnAccount, $t_id){ 
        if($pagina != 'materia'){ 
            if($theresAnAccount == '?p=materia'){
                switch ($t_id) {
                    case 2:
                        $theresAnAccount = '?p=design';
                    break;
                    case 3:
                        $theresAnAccount = '?p=coding';
                    break;
                    case 4:
                        $theresAnAccount = '?p=database';
                    break;
                    case 5:
                        $theresAnAccount = '?p=networks';
                    break;
                    default:
                        $theresAnAccount = '?p=materia';
                    break;
                }
            }
            if($pagina != 'inicio'){
                ?> 
                    <a href=" <?php echo $theresAnAccount ?>">
                        <button class="thumbnail_btn">Ver más</button>
                    </a> 
                <?php 
            }
        }
    }
?>