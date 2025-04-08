<link href="css/bootstrap.min.css" rel="stylesheet">
<?php 
    $sql = "SELECT * FROM servicos WHERE id=".$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res -> fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id;?>">
    <div class = "mb-3">
        <label for="">Serviço</label>
        <input type="text" name="servico" value="<?php print $row -> servico;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Descrição</label>
        <input type="text" name="descricao" value="<?php print $row -> descricao;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Preço</label>
        <input type="text" name="preco" value="<?php print $row -> preco;?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>