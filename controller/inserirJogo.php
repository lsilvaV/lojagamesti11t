<?php 
    include("../model/conexao.php"); 
    include("../model/bancoJogo.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(inserirJogo($conexao, $jogo, $tamanho, $preco, $requisitos, $console, $classificacao, $avaliacao)){
        echo("Jogo cadastrado com sucesso");

    }else{
        echo("Jogo não cadastrado");

    }

    include("../view/footer.php");

?>