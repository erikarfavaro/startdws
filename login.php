<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

$alertaLogin = '';

if(isset($_POST['acao']) && $_POST['acao'] == 'logar'){



    $obUsuario = Usuario::getUsuarioEmail($_POST['email']);


    if(!$obUsuario instanceof Usuario || !password_verify($_POST['senha'],$obUsuario->senha)){
        $alertaLogin = 'E-mail ou senha inválidos.';
    }

    Login::login($obUsuario);
}

include __DIR__.'/includes/formulario-login.php';