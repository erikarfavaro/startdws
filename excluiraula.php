<?php

require __DIR__.'/vendor/autoload.php';

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

if(isset($_POST['excluir'])){
    $obAula->excluir();

    header('location: indexaulas.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/excluir-aula.php';
include __DIR__.'/includes/footer.php';

?>