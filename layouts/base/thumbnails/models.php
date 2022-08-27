<?php
    function make_thumbnail_container($pagina, $pIsUnidad, $theresAnAccount, $id, $img_src,
     $video_src, $title, $creation_date, $excerpt, $tag){
        ?>
            <div class="thumbnail_container <?= $pagina?>">
                <?php 
                    make_thumbnail($pagina, $pIsUnidad, $img_src, $video_src);
                    make_thumbnail_title($title);
                    make_thumbnail_text($pagina, $creation_date, $excerpt);
                    make_thumbnail_tag($pagina, $tag);
                    make_thumbnail_button($pagina, $theresAnAccount, $id);
                ?>
            </div>
        <?php
    }
    function make_thumbnail($pagina, $pIsUnidad, $img_src, $video_src){
        ?>
            <div class="thumbnail <?php echo $pIsUnidad ?>">
                <img class="thumbnail_img" 
                        src="<?php echo $img_src ?>" 
                        alt="<?php echo $video_src ?>">
                        
                <?php if($pagina == 'unidad'){ ?> 
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
                    echo $pagina == 'unidad' ? 
                    $fecha : $excerpt
                ?> 
            </p>
        <?php
    }

    function make_thumbnail_tag($pagina, $tag){
        if($pagina == 'unidades' or $pagina == 'inicio'){ 
            ?> 
                <ul class="thumbnail_tag">
                    <li><?php echo $tag ?></li>
                </ul> 
            <?php 
        }
    }

    function make_thumbnail_button($pagina, $theresAnAccount, $t_id){ 
        if($pagina != 'unidad'){ 
            if($theresAnAccount == '?p=unidad'){
                switch ($t_id) {
                    case 2:
                        $theresAnAccount = '?p=unidad2';
                    break;
                    case 3:
                        $theresAnAccount = '?p=unidad3';
                    break;
                    case 4:
                        $theresAnAccount = '?p=unidad4';
                    break;
                    case 5:
                        $theresAnAccount = '?p=unidad5';
                    break;
                    case 6:
                        $theresAnAccount = '?p=unidad6';
                    break;
                    default:
                        $theresAnAccount = '?p=unidad';
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