<?php 
    if(isset($email)){
        include 'unidades/search_box.php'; 
        include 'base/front_page/index.php'; 
        include 'base/thumbnails.php';
        include 'unidades/button_resources.php';
        include 'unidades/circle_btn.php';
        
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
    
?>
<!-- Add button visits -->

