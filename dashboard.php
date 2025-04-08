<?php 
    session_start();
    if(empty($_SESSION)){
        echo "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Salão</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #f2f2f2;
        }
        .sair{
            align-items: right;
            justify-content: ;
            display: flex;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <a class="navbar-brand d-none d-lg-inline-block" href="dashboard.php">Salão</a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="cadastro-servico.php" class="nav-link m-2 menu-item nav-active">Cadastro de Serviço</a>
                    </li>
                    <li class="nav-item">
                        <?php 
                            echo "<a href='logout.php' class='btn btn-danger'>Sair</a>"; 
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php 
                include_once 'config.php';
                switch(@$_REQUEST["page"]){
                    case "salvar":
                        include("salvar-servico.php");
                        break;
                    case "editar":
                        include("editar-servico.php");
                        break;
                }
            ?>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM  servicos";
                    $res = $conn -> query($sql);
                    $qtd = $res -> num_rows;

                    if($qtd > 0){
                        echo "<table class='table table-hover table-striped table-bordered'>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Serviço</th>";
                        echo "<th>Descrição</th>";
                        echo "<th>Preço</th>";
                        echo "<th>Data de Alteração</th>";
                        echo "<th>Ações</th>";
                        echo "</tr>";
                        while($row = $res -> fetch_object()){
                            echo "<tr>";
                            echo "<td>" . $row -> id . "</td>";
                            echo "<td>" . $row -> servico . "</td>";
                            echo "<td>" . $row -> descricao . "</td>";
                            echo "<td>" . $row -> preco . "</td>";
                            echo "<td>" . $row -> data_ . "</td>";
                            echo "<td>
                                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class = 'btn btn-success'>Editar</button>

                                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class = 'btn btn-danger'>Excluir</button>
                                 </td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else{
                        echo"<p class='alert alert-danger'>Não foram encontrados usuários cadastrados!</p>";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>