<?php
    function make_resources($resources, $show){
        ?>
            <section class="acordion_section_container <?= $show ?>" id="resources_section">
                <?php 
                        foreach ($resources as $key => $rsr) {
                            ?>
                                <div class="acordion_item">
                                    <div class="acordion_item_header">
                                        <h3 class="acordion_item_title"><?= $key+1 ?>. <?= $rsr['title'] ?></h3>
                                        <label class="acordion_item_description"> <?=  $rsr['description'] ?> </label>
                                    </div>
                                    <div class="acordion_item_body">
                                        <div class="acordion_item_body_content">
                                            <div class="acordion_item_resource">
                                                <p class="acordion_item_content">
                                                    <?=  $rsr['content'] ?>
                                                </p>  
                                                <a class="acordion_item_src" href="<?=  $rsr['src'] ?>" target="_blank">
                                                    <label class="acordion_item_tag">
                                                        <i class="fas fa-external-link-alt"></i>
                                                        <?=  $rsr['tag'] ?>
                                                    </label>
                                                    <label class="acordion_item_upload_date">
                                                        <?= substr($rsr['upload_date'], 0, 10) ?>
                                                    </label>
                                                </a>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                ?>
            </section>
        <?php
    }
?>