<style>
    a:link 
    { 
    text-decoration:none; 
</style>
<?php
$mensagem = '';
if(isset($_GET['status'])){
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<center><div class="container alert alert-success">Ação executada com sucesso!</div></center>';
            break;

            case 'error':
                $mensagem = '';
                break;
    }
}

    $resultados = '';
    foreach($aulas as $aulas){
        $resultados .= '<tr class="text-dark">
                            <td>'.$aulas->idAulas.'</td>
                            <td>'.$aulas->numero.'</td>
                            <td>'.$aulas->nomeAluno.'</td>
                            <td>'.$aulas->tipo.'</td>
                            <td>'.date('d/m/Y',strtotime($aulas->dataaula)).'</td>
                            <td>'.$aulas->dia.'</td>
                            <td>'.$aulas->horario.'</td>
                            <td>
                            <a href="editaraula.php?idAulas='.$aulas->idAulas.'"> <button type="button" class="btn btn-primary">Editar</button> </a>
                            <a href="excluiraula.php?idAulas='.$aulas->idAulas.'"> <button type="button" class="btn btn-danger">Excluir</button> </a>
                            </td>
                            </tr>';
    }


    $resultados = strlen($resultados) ? $resultados : '<tr class="text-dark">
                                                        <td colspan="8" class="text-dark text-center">
                                                            Nenhuma aula cadastrada.
                                                        </td>
                                                        </tr>';

                                                        
unset($_GET['pagina']);
unset($_GET['status']);

$gets = http_build_query($_GET);


$paginacao = '';
$paginas = $obPagination->getPages();

foreach($paginas as $key=>$pagina){
    $class = $pagina['atual'] ? 'btn-primary' : 'btn-light';
    $paginacao .= '<a href="?pagina='.$pagina['pagina'].'&'.$gets.'">
                    <button type="button" class="btn '.$class.'">'.$pagina['pagina'].'</button>
                    </a>';
}

?>

<main>
<br>
<div class="container">
<section>
<a class="text-light" href="index.php">
    <button class="btn btn-warning text-light"> Voltar </button>
</a>
<a class="text-light" href="cadastraraula.php">
    <button class="btn btn-success"> Cadastrar Aulas </button>
</a>
<br><br>
    <form method="get">
        <div class="row my-3">

            <div class="col">
                <label> Buscar aula por nome do aluno </label>
                <input type="text" name="busca" class="form-control" value="<?=$busca?>">
            </div>

            <div class="col">
                <label> Buscar aula por dia da semana </label>
                <input type="text" name="busca2" class="form-control" value="<?=$busca2?>">
            </div>

            <div class="col d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
</form>
</section>
<section>
    <table class="table text-light mt-3">
    <div class="container">
    <thead>
        <tr class="text-danger">
            <th>ID</th>
            <th>Número da Aula</th>
            <th>Nome do Aluno</th>
            <th>Tipo da Aula</th>
            <th>Data da Aula</th>
            <th>Dia da Semana</th>
            <th>Hora da Aula</th>
            <th>Ações</th>
    </tr>
    </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
</div>
    </table>
</section>
<center>
<?=$paginacao?>
</center>
<section>
<center>
    <div>

    </div>
</center>
</section>
</div>
</main>