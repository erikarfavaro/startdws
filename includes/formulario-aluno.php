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
    <a class="text-light" href="index.php">
        <button class="btn btn-success"> Voltar </a>
    </section>
</div>
<div class="text-danger container fluid">
<h3 class="mt-3"><?=TITLE?></h3>
</div>

<div class="container fluid">
<form method="post">

<div class="form-group">
    <label> Nome </label>
    <input type="text" required="true" class="form-control" name="nome">

<label> CPF </label>
    <input type="text" required="true" class="form-control" name="cpf">

<label> Endereço </label>
<input type="text" required="true" class="form-control" name="endereco">

<label> Pacote </label>
    <select  class="form-control" name="pacote">
    <option selected disabled> Selecione uma opção </option>
    <option value="25"> 25 horas/aula </option>
    <option value="37,5"> 37,5 horas/aula </option>
    <option value="50"> 50 horas/aula </option>
    <option value="50-2"> 50 horas/aula em 2 dias </option>
    <option value="75"> 75 horas/aula </option>
    </select>

</div>


<div class="form-group">
<label> Link do Contrato </label>
<input type="text" required="true" class="form-control" name="contrato">
</div>

<div class="form-group">
    <label> Modo </label> 
    <br>
    <div>
        <div class="form-check form-check-inline">
            <input type="radio" name="modo" value="p" checked> Presencial
        </div>
    </div>

    <div>
        <div class="form-check form-check-inline">
            <input type="radio" name="modo" value="o"> Online
        </div>
    </div>

</div>
<br>
<div class="form-group">
    <button type="submit" class="btn btn-success"> Enviar </button>
</div>
</form>
</div>
</main>