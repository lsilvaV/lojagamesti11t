<?php 
    include("../model/conexao.php"); 
    include("../model/bancoJogo.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(alterarJogo($conexao, $codigo, $jogo, $tamanho, $preco, $requisitos, $console, $classificacao, $avaliacao)){
        echo("Alteração feita cadastrado com sucesso");

    }else{
        echo("Alteração não feita");

    }

    include("../view/footer.php");

?>