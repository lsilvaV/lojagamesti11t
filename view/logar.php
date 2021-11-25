<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/css/style.css">
    <title> Login </title>
</head>

<body>

<div class="container">

    <?php
        session_start();
        $msg = isset($_SESSION["msg"])?$_SESSION["msg"] : "";
    
    ?>

    <form class="formLogin" action="../controller/credenciais.php" method="POST">

        <?php
            echo($msg);
    
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Email: </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Senha: </label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary"> Entrar </button>
        <a class="btn btn-dark" href="../view/cadastroUsuario.php" role="button"> Cadastrar </a>

    </form>
    
</div>

</body>

</html>