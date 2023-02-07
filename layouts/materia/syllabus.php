<?php
    function make_syllabus($themes, $video){
        ?>
            <section class="acordion_section_container selected" id="syllabus_section">
                <?php 
                    foreach ($themes as $key => $theme) {
                        ?>
                            <div class="acordion_item">
                                <div class="acordion_item_header">
                                    <h3 class="acordion_item_title"><?= $key+1 ?>. <?= $theme['title'] ?></h3>
                                    <label class="acordion_item_description"> <?=  $theme['description'] ?> </label>
                                </div>
                                <div class="acordion_item_body">
                                    <ul class="acordion_item_body_content">
                                        <?php
                                            $videos = $video->consult(['id','title', 'duration', 'src', 'upload_date'], ['id_theme =' => $theme['id']]);
                                            foreach ($videos as $keyv => $vd) {
                                                ?>
                                                    <li class="acordion_item_video_container">
                                                        <p class="acordion_video_title">
                                                            <?= $keyv+1 ?>- <?= $vd['title'] ?>
                                                        </p>
                                                        <p class="acordion_video_duration">
                                                            <?= substr($vd['duration'], 3, strlen($vd['duration'])) ?>
                                                        </p>
                                                        <p class="acordion_video_src"> <?= $vd['src'] ?>?autoplay=true</p>
                                                        <p class="acordion_video_upload-date"><?= $vd['upload_date'] ?></p>
                                                    </li>
                                                    <p class="acordion_video_id"><?= $vd['id'] ?></p>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </section>
        <?php
    }
?>