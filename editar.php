<?php 

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar aluno');

use \App\Entity\Aluno;
use \App\Session\Login;

Login::requireLogin();

if(!isset($_GET['idAluno']) or !is_numeric($_GET['idAluno'])){
    header('location: index.php?status=error');
    exit;
}

$obAluno = Aluno::editAluno($_GET['idAluno']);


if(!$obAluno instanceof Aluno){
    header('location: index.php?status=error');
    exit;
}


//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['cpf'],$_POST['pacote'],$_POST['modo'])){
    $obAluno->nome = $_POST['nome'];
    $obAluno->cpf = $_POST['cpf'];
    $obAluno->endereco = $_POST['endereco'];
    $obAluno->pacote = $_POST['pacote'];
    $obAluno->modo = $_POST['modo'];
    $obAluno->atualizar();

    header('location: index.php?status=success');
    exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/editar-aluno.php';
include __DIR__.'/includes/footer.php';
