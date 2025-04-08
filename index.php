<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #f2f2f2;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Faça seu Login</h3>
                        </div>
                        <div class="card-body">
                        <form action="login.php" method="POST">
                                <div>
                                    <div class="mb-3"></div>
                                    <label for="">Usuário</label>
                                    <input type="text" name="usuario" class="form-control">
                                </div>
                                <div>
                                    <div class="mb-3">
                                    <label for="">Senha</label>
                                    <input type="password" name="senha" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                            <div>
                                <div class="mb-3">
                                    <button onclick="location.href ='cadastro-usuario.php'" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>