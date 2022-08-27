<?php

    function make_content($unidad){
        switch ($unidad) {
            case 'unidad':
            case 'unidad1':
                include 'contents/unidad1.php';
            break;
            case 'unidad2':
                include 'contents/unidad2.php';
            break;
            case 'unidad3':
                include 'contents/unidad3.php';
            break;
            case 'unidad4':
                include 'contents/unidad4.php';
            break;
            case 'unidad5':
                include 'contents/unidad5.php';
            break;
            case 'unidad6':
                include 'contents/unidad6.php';
            break;
        }
    }
?>