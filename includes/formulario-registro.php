<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Administradores </title>
        <link rel="icon" href="./img/favicon.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>

            .register-form {
                width: 340px;
                margin: 50px auto;
                font-size: 15px;
            }
            .register form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .register-form h3 {
                margin: 0 0 15px;
                color: #a7182a;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
                background-color: #3c418b;
                color: white;
            }

            img.displayed {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            a.texto {
                color: #3c418b;

                body{
                    font-family: Arial, sans-serif;
                    color: #555;
                }
</style>
<script>
        function validarSenha(){
            senha = document.f1.senha.value
            senha2 = document.f1.senha2.value
        
            if (senha == senha2)
                alert("Cadastrado com sucesso!")
            else
                alert("As senhas não são iguais.")
        }
</script>
</head>
<body>
<div class="register-form">
    <form method="post" name="f1">
        <a href="./indexaulas.php"><img class="displayed" src="./img/logo.png" width="180" height="180"></a>
        <h3 class="text-center">Cadastre novos administradores</h3>  
        <br><br>
        <div class="form-group">
            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>     
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        </div>   
        <div class="form-group">
            <input type="password" name="senha2" class="form-control" placeholder="Confirme a Senha" required>
        </div>   
        <br>
        <div class="form-group">
            <button type="submit" onclick="return validarSenha()" name="acao" value="registrar" class="btn btn-block">Cadastrar</button>
        </div>   
    </form>

</div>
</body>
</html>
