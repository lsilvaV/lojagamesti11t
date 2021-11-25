<?php 
    include("../model/conexao.php"); 
    include("../model/bancoCliente.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(deletarCliente($conexao, $deletarCli)){
        echo("Cliente deletado com sucesso");

    }else{
        echo("Cliente não deletado");

    }

    include("../view/footer.php");

?>