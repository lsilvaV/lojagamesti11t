<?php
    include("../view/header.php"); 
    include("../model/conexao.php"); 
    include("../model/bancoUsuario.php");
?>

<form action="../controller/alterarUsuario.php" method="POST">
        <?php
            $CodUsu = $_POST["alterarUsu"];
            
            $usuario = listaUsuarioCod($conexao, $CodUsu);

        ?>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label">Código do Usuário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="codigo" value="<?=$usuario['codUsu']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Email: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="email" value="<?=$usuario['emailUsu']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Senha: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="senha" value="<?=$usuario['senhaUsu']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> PIN: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="pin" value="<?=$usuario['pinUsu']?>">
        </div>


        <button type="submit" class="btn btn-dark"> Alterar </button>

    </form>

<?php include("../view/footer.php"); ?>