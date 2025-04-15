<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="cadastro-usuario.css" />
</head>
<body>
  <div class="cadastro">
    <div class="form-container">
      <h2>Cadastro de Usuário</h2>
      <form action="novo-usuario.php" method="POST" id="cadastroForm">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Salvar</button>
      </form>
    </div>
  </div>

  <script>
    const form = document.getElementById("cadastroForm");
    const button = form.querySelector("button");

    form.addEventListener("submit", function () {
      button.innerText = "Salvando...";
      button.disabled = true;
    });
  </script>
</body>
</html>
