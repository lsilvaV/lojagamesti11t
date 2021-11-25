<?php
    session_start();
    $email = isset($_SESSION["emailUsuario"])?$_SESSION["emailUsuario"]:null;

    if($email != null){
        include("../view/header.php"); 
    }

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<form action="../controller/inserirUsuario.php" method="POST">
        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Email do Usuário: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="emailUsuario">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> Senha do Usuário: </label>
            <input type="password" class="form-control" id="formGroupExampleInput" name="senhaUsuario">
        </div>

        <div class="mb-3 col-md-3">
            <label for="formGroupExampleInput" class="form-label"> PIN do Usuário: </label>
            <input type="password" class="form-control" id="formGroupExampleInput" name="pinUsuario">
        </div>

        <button type="submit" class="btn btn-dark"> Salvar </button>

    </form>

<?php 
    if($email != null){
        include("../view/footer.php"); 
    } 
?>