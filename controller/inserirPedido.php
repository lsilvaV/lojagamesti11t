<?php 
    include("../model/conexao.php"); 
    include("../model/bancoPedido.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(inserirPedido($conexao, $codCliFK, $codFunFK, $codJogFK, $valorUnit)){
        echo("Pedido cadastrado com sucesso");

    }else{
        echo("Pedido não cadastrado");

    }

    include("../view/footer.php");

?>