<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

//Login::requireLogin();

if(isset($_POST['acao']) && $_POST['acao'] == 'registrar'){
    if(isset($_POST['nome'], $_POST['email'], $_POST['senha']))
        $obUsuario = new Usuario;
        $obUsuario->nome = $_POST['nome'];
        $obUsuario->email = $_POST['email'];
        $obUsuario->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $obUsuario->registrar();
        
        header('location:index.php');
        exit;
    
}


include __DIR__.'/includes/formulario-registro.php';