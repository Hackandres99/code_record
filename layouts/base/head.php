<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    user-scalable=no, 
    initial-scale=1.0, 
    maximum-scale=1.0, 
    minimum-scale=1.0">
    <title>
        Tecnofor - <?php echo $pagina ?>
    </title> 
    <?php switch ($pagina) {
            case 'unidades': 
                include 'head/unidades.php'; 
            break;

            case 'unidad': case 'unidad1': case 'unidad2': 
            case 'unidad3': case 'unidad4': 
            case 'unidad5': case 'unidad6':
                include 'head/unidad.php'; 
            break;

            case 'contacto': 
                include 'head/contacto.php'; 
            break;

            case 'session': case 'registrarse': case 'recuperar':
                ?>  
                    <link rel="stylesheet" href="/css/session.css"> 
                <?php 
            break;

            default: 
                include 'head/inicio.php'; 
            break; 
        } 
        include 'head/index.php' 
    ?> 
</head>