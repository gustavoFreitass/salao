<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="index.css" />
</head>
<body>
  <div class="login">
    <div class="login-container">
      <div class="card">
        <div class="card-header">
          <h3>Faça seu Login</h3>
        </div>
        <div class="card-body">
          <form id="loginForm" action="login.php" method="POST">
            <div class="input-group">
              <label for="usuario">Usuário</label>
              <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite seu usuário" />
            </div>
            <div class="input-group">
              <label for="senha">Senha</label>
              <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" />
            </div>
            <div class="input-group center">
              <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </form>
          <div class="footer center">
            <button onclick="location.href ='cadastro-usuario.php'" class="btn btn-success">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('.form-control').forEach(input => {
      input.addEventListener('focus', function () {
        this.style.transition = 'box-shadow 0.3s ease, transform 0.3s ease, border-color 0.3s ease';
        this.style.boxShadow = '0 0 10px var(--roxo-claro)';
        this.style.transform = 'scale(1.05)';
        this.style.borderColor = 'var(--roxo-claro)';
      });

      input.addEventListener('blur', function () {
        this.style.transition = 'box-shadow 0.3s ease, transform 0.3s ease, border-color 0.3s ease';
        this.style.boxShadow = 'none';
        this.style.transform = 'scale(1)';
        this.style.borderColor = '#ccc';
      });
    });

    const form = document.getElementById('loginForm');
    form.addEventListener('submit', function (e) {
      const submitButton = form.querySelector('button[type="submit"]');
      submitButton.innerHTML = 'Carregando...';
      submitButton.disabled = true;
      submitButton.style.transition = 'background-color 0.3s ease, transform 0.3s ease';
      submitButton.style.backgroundColor = '#7fa8c8';
      submitButton.style.transform = 'scale(0.95)';
      setTimeout(() => {
        submitButton.innerHTML = 'Entrar';
        submitButton.disabled = false;
        submitButton.style.backgroundColor = '#b8a1d1';
        submitButton.style.transform = 'scale(1)';
      }, 2000);
    });
  </script>
</body>
</html>
