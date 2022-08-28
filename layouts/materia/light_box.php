<?php 
    function make_light_box(){
        ?>
            <div id="lightbox" class="lightbox">
                <div class="lightbox__container">
                    <!-- Selected video -->
                    <iframe id="lightbox_main_video"  class="lightbox__main__video" 
                            src="" loading="lazy" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                    <!-- Rest of the videos -->
                    <div id="carrousel" class="carrousel"></div>
                    <!-- Video navigation -->
                    <div id="before_image" class="directional_left">
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div id="next_image" class="directional_right">
                        <i class="fas fa-angle-right"></i>
                    </div>
                    <div id="close_lightbox" class="lightbox__close">
                        <i class="fas fa-angle-double-right"></i>
                    </div>
                </div>
            </div>
        <?php
    }
?>