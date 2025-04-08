<?php
    session_start();
    include("config.php");

    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    $sql = "INSERT INTO servicos (servico, descricao, preco) VALUES ('{$servico}', '{$descricao}', '{$preco}')";

    $res  = $conn -> query($sql);

    if($res == true){
        echo "<script>alert('Serviço cadastrado com sucesso')</script>";
        echo "<script>location.href='dashboard.php'</script>";
    } else{
        echo "<script>alert('Não foi possível cadastrar')</script>";
        echo "<script>location.href='cadastro-servico.php'</script>";
    }