<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Aula');

use \App\Entity\Aulas;
use \App\Session\Login;

Login::requireLogin();

if(!isset($_GET['idAulas']) or !is_numeric($_GET['idAulas'])){
    header('location: indexaulas.php?status=error');
    exit;
}

$obAula = Aulas::editAulas($_GET['idAulas']);

if(!$obAula instanceof Aulas){
    header('location: indexaulas.php?status=error');
    exit;
}


if(isset($_POST['numero'],$_POST['dataaula'],$_POST['horario'],$_POST['nomeAluno'],$_POST['tipo'] )){
    $obAula->numero = $_POST['numero'];
    $obAula->nomeAluno = $_POST['nomeAluno'];
    $obAula->dataaula = $_POST['date("d/m/Y",strtotime($aulas->dataaula))'];
    $obAula->horario = $_POST['horario'];
    $obAula->tipo = $_POST['tipo'];
    $obAula->dia = $_POST['dia'];
    $obAula->atualizar();

    echo"<pre>";
    print_r($obAula);
    echo "</pre>";

    header('location: indexaulas.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/editar-aulas.php';
include __DIR__.'/includes/footer.php';

?>