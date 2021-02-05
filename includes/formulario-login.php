<?php

    $alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Login - Aministração </title>
        <link rel="icon" href="./img/favicon.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>

                    .login-form {
                        width: 340px;
                        margin: 50px auto;
                        font-size: 15px;
                    }
                    .login-form form {
                        margin-bottom: 15px;
                        background: #f7f7f7;
                        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                        padding: 30px;
                    }
                    .login-form h3 {
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
                    }
        </style>
</head>
<body>
<div class="login-form">
    <form method="post">
        <a href="./index.html"><img class="displayed" src="./img/logo.png" width="180" height="180"></a>
        <h3 class="text-center">Efetue seu login.</h3>
        <?=$alertaLogin?>   
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="acao" value="logar" class="btn btn-block">Entrar</button>
        </div>   
    </form>
</div>
</body>
</html>
