<script src="/js/base/header.js"></script>
<script src="/js/base/button-up.js"></script>
<script src="/js/base/front_page.js"></script>
<?php 
    switch ($pagina) {

        case 'materias': 
            include 'scripts/materias.php'; 
        break;
        
        case 'materia': case 'algorithm': 
        case 'design': case 'coding': 
        case 'database': case 'netowrks': 
            include 'scripts/materia.php'; 
        break;
    }
?>