<?php 
    
    include 'form_group.php';
    
    if(!empty($_POST['input_email']) && !empty($_POST['input_password'])){
        $password = password_hash($_POST['input_password'], PASSWORD_BCRYPT);
        switch ($pagina) {
            case 'registrarse':
                $register_user = [
                    'email' => $_POST['input_email'],
                    'account_pass' => $password
                ];
                $register_visit = [
                    'email' => $_POST['input_email']
                ];
                $signlog->insert($register_user, $register_visit, '');
    
                $student_fields = ['email', 'account_pass'];
                $student_conditions = ['email =' => "'{$_POST['input_email']}'"];
                $student_results = $signlog->consult($student_fields, $student_conditions);
    
                if(password_verify($_POST['input_password'], $student_results['account_pass'])){
                    $_SESSION['student_email'] = $student_results['email'];
                    header('Location: ?p=unidades');
                }
            break;

            case 'recuperar':
                date_default_timezone_set('America/Guayaquil');
                $update_user = [
                    'email' => $_POST['input_email'],
                    'account_pass' => $password,
                    'update_date' => date("Y-m-d H:i:s")
                ];
                $signlog->update($update_user);
                header('Location: ?p=session');
            break;

            default:
                $student_fields = ['email', 'account_pass'];
                $student_conditions = ['email =' => "'{$_POST['input_email']}'"];
                $student_results = $signlog->consult($student_fields, $student_conditions);

                if(password_verify($_POST['input_password'], $student_results['account_pass'])){

                    $register_visit = [
                        'email' => $_POST['input_email']
                    ];
                    $signlog->insert(null, $register_visit, 'visit');

                    $_SESSION['student_email'] = $student_results['email'];
                    header('Location: ?p=unidades');
                }else{
                    $signlog->setVerify('Sus credenciales no coinciden');
                }
            break;
        }
    }  
    
?>
<form action="" method="post" class="form">
    <h2 class="form_title <?= $pagina ?>"> 
        <?php 
        switch ($pagina) {
            case 'registrarse':
                echo 'Registro';
            break;

            case 'recuperar':
                echo 'Ingrese su correo y una contraseña nueva para recuperar su cuenta';
            break;
            
            default:
                if($signlog->getVerify() != ''){
                    echo $signlog->getVerify();
                }else{
                    echo 'Inicio de sesión';
                }
            break;
        }        
        ?>
    </h2>
    <?php
        make_form_group(
            'email',
            'input_email',
            'Correo'
        );
        make_form_group(
            'password', 
            'input_password', 
            'Contraseña'
        );
        if($pagina == 'registrarse' or $pagina == 'recuperar'){
            make_form_group(
                'password',
                'input_conf-pass',
                'Confirmar contraseña'
            );
        }
    ?>
    <button type="submit" class="form_btn" id="btn_log">
        <?php 
        switch ($pagina) {
            case 'registrarse':
                echo 'Registrarse';
            break;
            case 'recuperar':
                 echo 'Actualizar';
            break;
            
            default:
                echo 'Ingresar';
            break;
        }
        ?>
    </button>
    <?php 
        if($pagina == 'session'){
            ?>  <a href="?p=recuperar" class="form_link">
                    ¿Olvidó cómo acceder a su cuenta?</a>

                <a href="?p=registrarse" class="form_btn">
                    Registrese
                </a>
            <?php
        }
    ?>
    
</form>
