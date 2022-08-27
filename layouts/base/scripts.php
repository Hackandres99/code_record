<script src="/js/base/header.js"></script>
<script src="/js/base/button-up.js"></script>
<?php 
    switch ($pagina) {

        case 'unidades': 
            include 'scripts/unidades.php'; 
        break;
        
        case 'unidad': case 'unidad1': case 'unidad2': 
        case 'unidad3': case 'unidad4': 
        case 'unidad5': case 'unidad6': 
            include 'scripts/unidad.php'; 
        break;
    }
?>