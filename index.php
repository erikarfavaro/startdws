<style type="text/css"> 
a:link 
{ 
 text-decoration:none; 
} 
</style>
<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Aluno;
use \App\Db\Pagination;
use \App\Session\Login;

Login::requireLogin();

$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

$filtroModo = filter_input(INPUT_GET, 'modo', FILTER_SANITIZE_STRING);
$filtroModo = in_array($filtroModo,['p','o']) ? $filtroModo : '';

$condicoes = [
    strlen($busca) ? 'nome LIKE "%'.str_replace(' ','%',$busca).'%"' : null,
    strlen($filtroModo) ? 'modo = "'.$filtroModo.'"' : null

];

$condicoes = array_filter($condicoes);

$where = implode(' AND ', $condicoes);

$quantidadeAlunos = Aluno::getQuantidadeAlunos($where);

$obPagination = new Pagination($quantidadeAlunos, $_GET['pagina'] ?? 1, 5);

$aluno = Aluno::getAluno($where,null,$obPagination->getLimit());


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';












