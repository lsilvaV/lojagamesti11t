<?php
    include("../view/header.php"); 
    include("../model/conexao.php"); 
    include("../model/bancoCliente.php");
?>

<form action="../controller/alterarCliente.php" method="POST">
        <?php
            $CodCli = $_POST["alterarCli"];
            $cliente = listaClienteCod($conexao, $CodCli);

            $CodUsu = $cliente['codUsuFK'];
            $usuario = listaClienteUsuario($conexao, $CodUsu);

        ?>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Código do Cliente </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="codCli" readonly value="<?=$cliente['codCli']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Código do Usuário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="codigoUsuFK" readonly value="<?=$cliente['codUsuFK']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Email do Usuário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="emailUsuFK" readonly value="<?=$usuario['emailUsu']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Nome do cliente: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nome" value="<?=$cliente['nomeCli']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> CPF do cliente: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="cpf" value="<?=$cliente['cpfCli']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Telefone do cliente: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="fone" value="<?=$cliente['foneCli']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Data de nascimento do cliente: </label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="datanasc" value="<?=$cliente['datanasCli']?>">
        </div>


        <button type="submit" class="btn btn-dark"> Alterar </button>

    </form>

<?php include("../view/footer.php"); ?>