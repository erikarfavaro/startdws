<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Aula');

use \App\Entity\Aulas;
use \App\Session\Login;

Login::requireLogin();

if(isset($_POST['numero'],$_POST['dia'],$_POST['tipo'],$_POST['dataaula'],$_POST['horario'],$_POST['nomeAluno'] )){
    $obAula = new Aulas;
    $obAula->numero = $_POST['numero'];
    $obAula->nomeAluno = $_POST['nomeAluno'];
    $obAula->dataaula = $_POST['dataaula'];
    $obAula->dia = $_POST['dia'];
    $obAula->horario = $_POST['horario'];
    $obAula->tipo = $_POST['tipo'];
    $obAula->cadastrar();

    header('location: indexaulas.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-aulas.php';
include __DIR__.'/includes/footer.php';

?>