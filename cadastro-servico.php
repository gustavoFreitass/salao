<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Serviço</title>
    <link rel="stylesheet" href="cadastro-servico.css">
</head>
<body>
    <div class="cadastro">
        <div class="form-container">
            <h3>Cadastro de Serviço</h3>
            <form action="novo-servico.php" method="POST">
                <div class="form-group">
                    <label for="servico">Nome do Serviço</label>
                    <input type="text" name="servico" id="servico" placeholder="Ex: Corte Feminino">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição do Serviço</label>
                    <input type="text" name="descricao" id="descricao" placeholder="Ex: Corte com hidratação">
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" placeholder="Ex: R$ 49,90">
                </div>
                <div class="form-actions">
                    <button type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function () {
                this.style.transition = 'box-shadow 0.3s ease, transform 0.3s ease, border-color 0.3s ease';
                this.style.boxShadow = '0 0 10px #cba4e4';
                this.style.transform = 'scale(1.03)';
                this.style.borderColor = '#cba4e4';
            });

            input.addEventListener('blur', function () {
                this.style.boxShadow = 'none';
                this.style.transform = 'scale(1)';
                this.style.borderColor = '#ccc';
            });
        });
    </script>
</body>
</html>
