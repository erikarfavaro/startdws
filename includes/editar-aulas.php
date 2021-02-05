<main>
<style type="text/css"> 
a:link 
{ 
 text-decoration:none; 
} 
</style>
<br>
<section>
<div class="container fluid">
    <a class="text-light" href="./indexaulas.php">
        <button class="btn btn-warning text-light"> Voltar </a>
    </section>
</div>
<div class="text-danger container fluid">
<h3 class="mt-3"><?=TITLE?></h3>
</div>

<div class="container fluid">
    <form method="post">

        <div class="form-group">
        <label> Número da Aula </label>
        <input type="number" required="true" class="form-control" name="numero" value="<?=$obAula->numero?>">
        </div>

        <div class="form-group">
        <label> Nome do Aluno </label>
        <input type="text" required="true" class="form-control" name="nomeAluno" value="<?=$obAula->nomeAluno?>"> 
        </div>

        
        <div class="form-group">
        <label> Tipo da Aula </label>
        <input type="text" required="true" class="form-control" name="tipo" value="<?=$obAula->tipo?>"> 
        </div>

        <div class="form-group">
        <label> Data da Aula </label>
        <input type="date" required="true" class="form-control" name="dataaula" value="<?=$obAula->dataaula?>">
        </div>

        <div class="form-group">
        <label> Dia da Semana </label>
        <input type="dia" required="true" class="form-control" name="dataaula" value="<?=$obAula->dia?>">
        </div>

        <div class="form-group">
        <label> Horário da Aula </label>
        <input type="time" required="true" class="form-control" name="horario" value="<?=$obAula->horario?>">
        </div>

        <br>
        <div class="form-group">
        <button type="submit" class="btn btn-success"> Editar </button>
        </div>
    </form>
</div>
</main>