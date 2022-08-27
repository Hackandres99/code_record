<?php 
    if(isset($email)){
        switch ($pagina) {
            case 'unidad2':
                include 'unidad2.php';
            break;
            case 'unidad3':
                include 'unidad3.php';
            break;
            case 'unidad4': 
                include 'unidad4.php';
            break;
            case 'unidad5':
                include 'unidad5.php';
            break;
            case 'unidad6':
                include 'unidad6.php';
            break;
            default:
                include 'unidad1.php';
            break;
        } 
    } else {
        header('Location: ?p=session');
    }
?>



        