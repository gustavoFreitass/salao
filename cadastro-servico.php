<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Serviço</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #f2f2f2;
        }
        .cadastro{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<body>
<div class="cadastro">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Cadastro de Serviço Prestado</h3>
                        </div>
                        <div class="card-body">
                        <form action="novo-servico.php" method="POST">
                                <div>
                                    <div class="mb-3"></div>
                                    <label for="">Nome do Serviço</label>
                                    <input type="text" name="servico" class="form-control">
                                </div>
                                <div>
                                    <div class="mb-3"></div>
                                    <label for="">Descrição do Serviço</label>
                                    <input type="text" name="descricao" class="form-control">
                                </div>
                                <div>
                                    <div class="mb-3"></div>
                                    <label for="">Preço</label>
                                    <input type="text" name="preco" class="form-control">
                                </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
