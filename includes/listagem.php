<style type="text/css"> 
a
{ 
 text-decoration:none; 
 color:black;
} 

a:hover
{ 
 text-decoration:none; 
 color: red;
} 

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
foreach ($aluno as $aluno) {
    $resultados .= '<tr class=" text-dark">
                        <td>'.$aluno->idAluno.'</td>
                        <td>'.$aluno->nome.'</td>
                        <td>'.$aluno->cpf.'</td>
                        <td>'.$aluno->endereco.'</td>
                        <td>'.($aluno->pacote == '50-2' ? '50 horas 2 dias por semana' : $aluno->pacote).' </td>
                        <td>'.($aluno->modo == 'o' ? 'Online' : 'Presencial').'</td>
                        <td><a href="'.$aluno->contrato.'">Clique Aqui</a> </td><br>
                        <td>

                        <a href="editar.php?idAluno='.$aluno->idAluno.'"> <button type="button" class="btn btn-primary">Editar</button></a>
                        <a href="excluir.php?idAluno='.$aluno->idAluno.'"> <button type="button" class="btn btn-danger">Excluir</button></a>
                        </td>
                        </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr class="text-dark">
                                                    <td colspan="8" class="text-dark text-center">
                                                         Nenhum aluno cadastrado.
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
<?=$mensagem?>
<div class="container">
<section>
<a class="text-light" href="cadastraraluno.php">
    <button class="btn btn-success"> Cadastrar Alunos </button>
</a>
<a class="text-light" href="registrar.php">
    <button class="btn btn-warning text-light"> Cadastrar Administradores </button>
</a>

<a class="text-light" href="indexaulas.php">
    <button class="btn btn-primary text-light"> Consultar Aulas </button>
</a>
<br><br>
    <form method="get">
        <div class="row my-3">

            <div class="col">
                <label> Buscar aluno por nome </label>
                <input type="text" name="busca" class="form-control" value="<?=$busca?>">
            </div>

            <div class="col">
                <label> Modo de Aula </label>
                <select name="modo" class="form-control">
                    <option value="">Escolha o modo</option>
                    <option value="p" <?=$filtroModo=='p' ? 'selected' : ''?>>Presencial</option>
                    <option value="o" <?=$filtroModo=='o' ? 'selected' : ''?>>Online</option>
</select>
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
            <th>Nome</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Pacote de Aulas (Horas/Aula)</th>
            <th>Modo de Aula</th>
            <th>Contrato</th>
            <th>Ações</th>
    </tr>
    </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
</div>
    </table>
</section>
<section>
<center>
    <div>
    <?=$paginacao?>
    </div>
</center>
</section>
</div>
</main>