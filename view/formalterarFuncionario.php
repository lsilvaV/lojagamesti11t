<?php
    include("../view/header.php"); 
    include("../model/conexao.php"); 
    include("../model/bancoFuncionario.php");
?>

<form action="../controller/alterarFuncionario.php" method="POST">
        <?php
            $CodFun = $_POST["alterarFun"];
            
            $funcionario = listaFuncionarioCod($conexao, $CodFun);

        ?>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Código do funcionário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="codFun" value="<?=$funcionario['codFun']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label">Código do Usuário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="codigoUsuFK" value="<?=$funcionario['codUsuFK']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Nome do funcionário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nome" value="<?=$funcionario['nomeFun']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Função do funcionário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="funcao" value="<?=$funcionario['funcaoFun']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Telefone do funcionário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="fone" value="<?=$funcionario['foneFun']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Data de nascimento do funcionário: </label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="datanasc" value="<?=$funcionario['datanasFun']?>">
        </div>


        <button type="submit" class="btn btn-dark"> Alterar </button>

    </form>

<?php include("../view/footer.php"); ?>