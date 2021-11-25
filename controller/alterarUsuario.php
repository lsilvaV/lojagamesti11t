<?php 
    include("../model/conexao.php"); 
    include("../model/bancoUsuario.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(alterarUsuario($conexao, $codigo, $email, $senha, $pin)){
        echo("Alteração feita com sucesso");

    }else{
        echo("Alteração não feita");

    }

    include("../view/footer.php");

?>