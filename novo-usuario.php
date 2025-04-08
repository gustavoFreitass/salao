<?php 
    session_start();
    include('config.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = md5($_POST["senha"]);

    $sql = "INSERT INTO usuarios(nome, email, usuario, senha) VALUES('{$nome}', '{$email}', '{$usuario}', '{$senha}')";

    $res = $conn -> query($sql);

    if($res == true){
        echo "<script>alert('Cadastrado com sucesso')</script>";
        echo "<script>location.href='index.php'</script>";
    } else{
        echo "<script>alert('Não foi possível cadastrar')</script>";
        echo "<script>location.href='cadastro-usuario.php'</script>";
    }
