<?php 
    include("header.php"); 
?>

<form action="../controller/inserirJogo.php" method="POST">
        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="jogo">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Tamanho do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="tamanho">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Preço do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="preco">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Requisitos do Jogo: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="requisitos">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Console: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="console">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Classificação etária: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="classificacao">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Avaliação da crítica: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="avaliacao">
        </div>

        <button type="submit" class="btn btn-dark"> Salvar </button>

    </form>

<?php include("footer.php"); ?>