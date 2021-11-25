<?php
    if(!$_SESSION["emailUsuario"]){
        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Você não tem acesso a esta página. </div>";
        header("Location:../view/logar.php");
    }

    include("../model/conexao.php"); 
    include("../model/bancoUsuario.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(inserirUsuario($conexao, $emailUsuario, $senhaUsuario, $pinUsuario)){
        echo("Usuário cadastrado com sucesso");

    }else{
        echo("Usuário não cadastrado");

    }

    include("../view/footer.php");

?>