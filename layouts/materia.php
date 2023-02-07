<?php 
    if(isset($email)){
        switch ($pagina) {
            case 'coding':
                include 'coding.php';
            break;
            default:
                include 'coding.php';
            break;
        } 
    } else {
        header('Location: ?p=session');
    }
?>



        