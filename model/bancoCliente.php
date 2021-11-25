<?php

function inserirCliente($conexao, $codUsuFK, $nomeCli, $cpfCli, $foneCli, $datanasCli){
    $query="insert into tbcliente(codUsuFK, nomeCli, cpfCli, foneCli, datanasCli)
     
            values('{$codUsuFK}','{$nomeCli}','{$cpfCli}','{$foneCli}','{$datanasCli}')";
    
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}


function listaCliente($conexao){
    $query = "select * from tbcliente";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

function listaClienteCod($conexao, $codCliente){
    $query = "select * from tbcliente where codCli={$codCliente}";
    $resultados = mysqli_query($conexao, $query);
    $res = mysqli_fetch_array($resultados);
    return $res;

}

function listaClienteUsuario($conexao, $codUsuario){
    $query = "select * from tbusuario where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao, $query);
    $res = mysqli_fetch_array($resultados);
    return $res;

}

function listaClienteNome($conexao, $NomeCli){
    $query = "select * from tbcliente where nomeCli like '%{$NomeCli}%'";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}


function deletarCliente($conexao, $deletarCli){
    $query = "delete from tbcliente where codCli = $deletarCli";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}


function alterarCliente($conexao, $codCli, $codUsuFK, $nomeCli, $cpfCli, $foneCli, $datanasCli){
    $query = "update tbcliente set 
    codUsuFK = '{$codUsuFK}', 
    nomeCli = '{$nomeCli}', 
    cpfCli = '{$cpfCli}', 
    foneCli = '{$foneCli}', 
    datanasCli = '{$datanasCli}' where codCli = $codCli";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}


?>

