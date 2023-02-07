<script src="/js/base/header.js"></script>
<script src="/js/base/button-up.js"></script>
<script src="/js/base/front_page.js"></script>
<?php 
    switch ($pagina) {
        case 'inicio':
            ?> <script src="/js/excerpt.js"></script> <?php
        break;
        case 'materias': 
            include 'scripts/materias.php'; 
        break;
        
        case 'materia': case 'coding':  
            include 'scripts/materia.php'; 
        break;
    }
?>