<?php
    error_reporting(0);
    require_once './phpCrud/signlog_in_modelo.php';
    session_start();
    $signlog = new Signlog_in_modelo();

    /* enumerate records from visit table */
    $enum = ['count(*)'];
    $enum_result = $signlog->consult($enum);
    $visit_num = $enum_result['count(*)'] != 1 ?
    $enum_result['count(*)'].' visitas':
    $enum_result['count(*)'].' visita';
    /* End enumerate visits */

   if(isset($_SESSION['student_email'])){
       $email_field = ['email'];
       $email_condition = ['email =' => "'{$_SESSION['student_email']}'"];  
       $email_result = $signlog->consult($email_field, $email_condition);

       if(count($email_result) > 0){
           $email = $email_result['email'];
       }
   }
?>
<!DOCTYPE html>
<html lang="es">
    <?php 
        $pagina = isset($_GET['p']) ?
         strtolower($_GET['p']) :
          'inicio';

        include 'layouts/base/head.php'; 
    ?>
    <body>

        <div class="container_all">
            <?php
                include 'layouts/base/header.php';
                switch ($pagina) {
                    case 'unidades':
                    case 'unidad':
                    case 'unidad1':
                    case 'unidad2':
                    case 'unidad3':
                    case 'unidad4':
                    case 'unidad5':
                    case 'unidad6':
                        include 'layouts/unidades/menu.php';
                    break;
                }
            ?> 

            <div id="container" class="container 
                <?php 
                    switch ($pagina) {
                        case 'unidades': 
                        case 'unidad':
                        case 'unidad1':
                        case 'unidad2':
                        case 'unidad3':
                        case 'unidad4':
                        case 'unidad5':
                        case 'unidad6':
                            echo 'unidades'; 
                        break;

                        case 'session': case 'registrarse': 
                        case 'recuperar': echo 'session'; 
                        break;
                    } 
                ?> 
            "> 
                <?php
                    switch ($pagina) {
                        case 'session': case 'registrarse': 
                        case 'recuperar': include 'layouts/session/form.php'; 
                        break;

                        default: 
                            include 'layouts/'. $pagina .'.php';
                        break;
                    }
                    include 'layouts/base/footer.php';
                ?> 
            </div> 
            
        </div> 

        <?php
            include 'layouts/base/btn_up.php';
            
            include 'layouts/base/scripts.php'; 
         ?>

    </body>
</html>