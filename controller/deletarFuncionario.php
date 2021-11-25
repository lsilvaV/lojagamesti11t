<?php 
    include("../model/conexao.php"); 
    include("../model/bancoFuncionario.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(deletarFuncionario($conexao, $deletarFun)){
        echo("Funcionário deletado com sucesso");

    }else{
        echo("Funcionário  não deletado");

    }

    include("../view/footer.php");

?>