<?php
    include("header.php");
    include("../model/conexao.php"); 
    include("../model/bancoCliente.php");
    include("../model/bancoUsuario.php");  

?>

<div class="p-5">
    <form action="../view/cadastroCliente.php" method="POST">
        <div class="row mb-3">
            <label for="inputUsu" class="col-sm-2 col-form-label"> Digite o código do Usuário: </label>

            <div class="col-sm-3">
                <input type="number" required name="CodUsu" class="form-control" id="inputUsu">

            </div>

            <div class="col-sm-3">
                <input class="btn btn-dark" type="submit" value="Buscar">

            </div>

        </div>
  
    </form>

</div>

    <?php
        $CodUsuario = isset($_POST['CodUsu'])?$_POST['CodUsu']:0;

        $usuario = listaUsuarioCod($conexao, $CodUsuario);

        if($usuario){

    ?>

<form action="../controller/inserirCliente.php" method="POST">
        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Código do usuário: </label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="codUsuFK" readonly value="<?=$CodUsuario?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Nome do cliente: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nomeCli">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> CPF do cliente: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="cpfCli">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Celular do cliente: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="foneCli">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Data de nascimento do cliente: </label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="datanasCli">
        </div>

        <button type="submit" class="btn btn-dark"> Salvar </button>

    </form>

    <?php 
        }

    ?>

<?php include("footer.php"); ?>