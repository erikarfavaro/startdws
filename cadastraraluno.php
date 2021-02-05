<?php 

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar aluno');

use \App\Entity\Aluno;
use \App\Session\Login;

Login::requireLogin();

if(isset($_POST['nome'],$_POST['cpf'],$_POST['pacote'],$_POST['modo'])){
    $obAluno = new Aluno;
    $obAluno->nome = $_POST['nome'];
    $obAluno->cpf = $_POST['cpf'];
    $obAluno->endereco = $_POST['endereco'];
    $obAluno->pacote = $_POST['pacote'];
    $obAluno->modo = $_POST['modo'];
    $obAluno->contrato = $_POST['contrato'];
    $obAluno->cadastrar();

    header('location: index.php?status=success');
    exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-aluno.php';
include __DIR__.'/includes/footer.php';















?>