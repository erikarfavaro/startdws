<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Aluno;
use \App\Session\Login;

Login::requireLogin();

if(!isset($_GET['idAluno']) or !is_numeric($_GET['idAluno'])){
    header('location: index.php?status=error');
    exit;
}

$obAluno = Aluno::editAluno($_GET['idAluno']);


if(!$obAluno instanceof Aluno){
    header('location: index.php');
    exit;
}

if(isset($_POST['excluir'])){

    $obAluno->excluir();

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/excluir-aluno.php';
include __DIR__.'/includes/footer.php';
