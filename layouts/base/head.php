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
            case 'materias': 
                include 'head/materias.php'; 
            break;

            case 'materia': case 'algorithm': 
            case 'design': case 'coding': 
            case 'database': case 'networks':
                include 'head/materia.php'; 
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