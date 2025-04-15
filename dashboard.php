<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistema de Salão</title>
  <link rel="stylesheet" href="dashboard.css"/>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <a href="dashboard.php" class="navbar-brand">Salão</a>
    <div class="nav-right">
      <div class="hamburger" onclick="toggleMenu()">☰</div>
    </div>
    <ul class="nav-menu" id="navMenu">
      <li><a href="cadastro-servico.php"><i class="fas fa-plus-circle"></i> Cadastro de Serviço</a></li>
      <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
    </ul>
  </nav>

  <div class="container">
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

  <div class="container">
    <?php
      include("config.php");
      $sql = "SELECT * FROM servicos";
      $res = $conn->query($sql);
      $qtd = $res->num_rows;

      if($qtd > 0){
          echo "<div class='card-wrapper'>";
          while($row = $res->fetch_object()){
              echo "<div class='card' id='card-" . $row->id . "'>";
              echo "<div class='card-header'>" . htmlspecialchars($row->servico) . "</div>";
              echo "<div class='card-body'>";
              echo "<p><strong>Descrição:</strong> " . htmlspecialchars($row->descricao) . "</p>";
              echo "<p><strong>Preço:</strong> R$ " . number_format($row->preco, 2, ',', '.') . "</p>";
              echo "<p><strong>Data:</strong> " . htmlspecialchars($row->data_) . "</p>";
              echo "</div>";
              echo "<div class='card-footer'>
                      <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                      <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}\" class='btn btn-danger'>Excluir</button>
                   </div>";
              echo "</div>";
          }
          echo "</div>";
      } else{
          echo "<p class='alert alert-danger animate-message'>Não foram encontrados serviços cadastrados!</p>";
      }
    ?>
  </div>
  

  <script>
    function toggleMenu() {
      const menu = document.getElementById('navMenu');
      menu.classList.toggle('show');
    }
  </script>
  <footer class="footer">
    <div class="footer-content">
        <p><strong>Sistema de Salão</strong> &copy; <?php echo date("Y"); ?> - Todos os direitos reservados.</p>
        <p>Contato: contato@salaoexemplo.com</p>
    </div>
    </footer>

</body>
</html>
