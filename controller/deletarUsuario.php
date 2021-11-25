<?php 
    include("../model/conexao.php"); 
    include("../model/bancoUsuario.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(deletarUsuario($conexao, $deletarUsu)){
        echo("Usuário deletado com sucesso");

    }else{
        echo("Usuário não deletado");

    }

    include("../view/footer.php");

?>