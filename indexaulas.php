<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Aulas;
use \App\Db\Pagination;
use \App\Session\Login;

Login::requireLogin();

$aulas = Aulas::getAulas();

$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

$busca2 = filter_input(INPUT_GET, 'busca2', FILTER_SANITIZE_STRING);

$condicoes = [
    strlen($busca) ? 'nomeAluno LIKE "%'.str_replace(' ','%',$busca).'%"' : null,
];

$condicoes = array_filter($condicoes);

$where = implode(' AND ', $condicoes);

$condicoes2 = [
    strlen($busca2) ? 'dia LIKE "%'.str_replace(' ','%',$busca2).'%"' : null,
];

$condicoes2 = array_filter($condicoes2);

$where2 = implode(' AND ', $condicoes2);

$quantidadeAulas = Aulas::getQuantidadeAulas($where);
$quantidadeAulas = Aulas::getQuantidadeAulas($where2);

$obPagination = new Pagination($quantidadeAulas, $_GET['pagina'] ?? 1, 5);

$aulas = Aulas::getAulas($where,null,$obPagination->getLimit());
$aulas = Aulas::getAulas2($where2,null,$obPagination->getLimit());

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagemaula.php';
include __DIR__.'/includes/footer.php';

?>