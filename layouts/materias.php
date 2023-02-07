<?php 
    if(isset($email)){ 
        include 'base/front_page/index.php'; 
        include 'base/thumbnails.php';
        include 'materias/search_box.php';
        include 'materias/circle_btn.php';
        
        make_btn_link('yes', '', $visit_num, '', '');
    } else {
        header('Location: ?p=session');
    }
    
?>

