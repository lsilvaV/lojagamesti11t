<?php 
    include("../model/conexao.php"); 
    include("../model/bancoCliente.php");
    include("../view/header.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if(alterarCliente($conexao, $codCli, $codigoUsuFK, $nome, $cpf, $fone, $datanasc)){
        echo("Alteração feita com sucesso");

    }else{
        echo("Alteração não feita");

    }

    include("../view/footer.php");

?>