<?php

    function make_content($materia){
        switch ($materia) {
            case 'materia':
            case 'algorithm':
                include 'contents/algorithm.php';
            break;
            case 'design':
                include 'contents/design.php';
            break;
            case 'coding':
                include 'contents/coding.php';
            break;
            case 'database':
                include 'contents/database.php';
            break;
            case 'networks':
                include 'contents/networks.php';
            break;
        }
    }
?>