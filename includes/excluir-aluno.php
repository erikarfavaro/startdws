<style>
    a:link 
{ 
 text-decoration:none; 
}
</style>

<main>
<br>
<div class="container fluid">
<h3 class="text-danger mt-3">Excluir Aluno</h3>
<br>
<form method="post">
<div class="form-group">
    <p> Realmente deseja excluir os registros de <strong><?=$obAluno->nome?></strong>?</p>
</div>

<div class="form-group">
<a class="text-light" href="index.php">
    <button type="button" class="btn btn-primary"> Cancelar </a>
</div>
<br>
<div class="form-group">
    <button type="submit" name="excluir" class="btn btn-danger"> Excluir </button>
</div>

</form>
</div>
</main>