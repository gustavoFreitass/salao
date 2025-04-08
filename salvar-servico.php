<?php 
    session_start();
    switch(@$_REQUEST['acao']){
        case 'editar':
                $servico = $_POST["servico"];
                $descricao = $_POST["descricao"];
                $preco = $_POST["preco"];
                
                $sql = "UPDATE servicos SET 
                        servico ='{$servico}', 
                        descricao ='{$descricao}', 
                        preco ='{$preco}'  
                        WHERE ID=".$_REQUEST["id"];
                $res = $conn -> query($sql);

                if($res == true){
                    echo "<script>alert('Editado com sucesso')</script>";
                    echo "<script>location.href='dashboard.php'</script>";
                } else{
                    echo "<script>alert('Não foi possível editar')</script>";
                    echo "<script>location.href='dashboard.php'</script>";
                }
                break;

            case 'excluir' :
                $sql = "DELETE FROM servicos WHERE id =".$_REQUEST["id"];
                $res = $conn -> query($sql);
                if($res == true){
                    echo "<script>alert('Excluído com sucesso')</script>";
                    echo "<script>location.href='dashboard.php'</script>";
                } else{
                    echo "<script>alert('Não foi possível excluir')</script>";
                    echo "<script>location.href='dashboard.php'</script>";
                }
                break;
    }