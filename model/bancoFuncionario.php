<?php

function inserirFuncionario($conexao, $codUsuFK, $nomeFun, $funcaoFun, $foneFun, $datanasFun){
    $query="insert into tbfuncionario(codUsuFK, nomeFun, funcaoFun, foneFun, datanasFun)
     
            values('{$codUsuFK}','{$nomeFun}','{$funcaoFun}','{$foneFun}','{$datanasFun}')";
    
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}


function listaFuncionario($conexao){
    $query = "select * from tbfuncionario";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}



function listaFuncionarioCod($conexao, $codFuncionario){
    $query = "select * from tbfuncionario where codFun={$codFuncionario}";
    $resultados = mysqli_query($conexao, $query);
    $res = mysqli_fetch_array($resultados);
    return $res;

}

/*

function listaClienteNome($conexao, $NomeCli){
    $query = "select * from tbcliente where nomeCli like '%{$NomeCli}%'";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

*/


function deletarFuncionario($conexao, $deletarFun){
    $query = "delete from tbfuncionario where codFun = $deletarFun";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}


function alterarFuncionario($conexao, $codFun, $codUsuFK, $nomeFun, $funcaoFun, $foneFun, $datanasFun){
    $query = "update tbfuncionario set 
    codUsuFK = '{$codUsuFK}', 
    nomeFun = '{$nomeFun}', 
    funcaoFun = '{$funcaoFun}', 
    foneFun = '{$funcaoFun}', 
    datanasFun = '{$datanasFun}' where codFun = $codFun";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

function listaBuscaFunUsu($conexao, $codUsuFK){
    $query = "select * from tbfuncionario where codUsuFK = '{$codUsuFK}'";
    $resultados = mysqli_query($conexao, $query);
    $res = mysqli_fetch_array($resultados);
    return $res;
}

?>

