<?php 
    include("../model/conexao.php"); 
    include("../model/bancoJogo.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(deletarJogo($conexao, $deletarJog)){
        echo("Jogo deletado com sucesso");

    }else{
        echo("Jogo não deletado");

    }

    include("../view/footer.php");

?>