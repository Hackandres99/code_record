<?php 
    if(isset($email)){
        switch ($pagina) {
            case 'deign':
                include 'deign.php';
            break;
            case 'coding':
                include 'coding.php';
            break;
            case 'database': 
                include 'database.php';
            break;
            case 'networks':
                include 'networks.php';
            break;
            default:
                include 'algorithm.php';
            break;
        } 
    } else {
        header('Location: ?p=session');
    }
?>



        