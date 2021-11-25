<?php 
    include("../model/conexao.php"); 
    include("../model/bancoFuncionario.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(alterarFuncionario($conexao, $codFun, $codigoUsuFK, $nome, $funcao, $fone, $datanasc)){
        echo("Alteração feita com sucesso");

    }else{
        echo("Alteração não feita");

    }

    include("../view/footer.php");

?>