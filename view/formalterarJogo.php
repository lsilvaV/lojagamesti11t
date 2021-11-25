<?php
    include("../view/header.php"); 
    include("../model/conexao.php"); 
    include("../model/bancoJogo.php");
?>

<form action="../controller/alterarJogo.php" method="POST">
        <?php
            $CodJog = $_POST["alterarJog"];
            
            $jogo = listaJogoCod($conexao, $CodJog);

        ?>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label">Código do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="codigo" value="<?=$jogo['codJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="jogo" value="<?=$jogo['nomeJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Tamanho do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="tamanho" value="<?=$jogo['tamanhoJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Preço do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="preco" value="<?=$jogo['precoJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Requisitos do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="requisitos" value="<?=$jogo['requisitosJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Console: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="console" value="<?=$jogo['consoleJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Classificação etária: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="classificacao" value="<?=$jogo['classificacaoJog']?>">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Avaliação da crítica: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="avaliacao" value="<?=$jogo['avaliacaoJog']?>">
        </div>

        <button type="submit" class="btn btn-dark"> Alterar </button>

    </form>

<?php include("../view/footer.php"); ?>