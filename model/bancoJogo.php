<?php

function inserirJogo($conexao, $jogo, $tamanho, $preco, $requisitos, $console, $classificacao, $avaliacao){
    $query="insert into tbjogo(nomeJog, tamanhoJog, precoJog, requisitosJog, consoleJog, classificacaoJog, avaliacaoJog)
     
            values('{$jogo}','{$tamanho}','{$preco}','{$requisitos}','{$console}','{$classificacao}','{$avaliacao}')";
    
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

function listaJogo($conexao){
    $query = "select * from tbjogo";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

function listaJogoCod($conexao, $codJogo){
    $query = "select * from tbjogo where codJog={$codJogo}";
    $resultados = mysqli_query($conexao, $query);
    $res = mysqli_fetch_array($resultados);
    return $res;

}

function deletarJogo($conexao, $deletarJog){
    $query = "delete from tbjogo where codJog = $deletarJog";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function alterarJogo($conexao, $codJog, $nomeJog, $tamanhoJog, $precoJog, $requisitosJog, $consoleJog, $classificacaoJog, $avaliacaoJog){
    $query = "update tbjogo set 
    nomeJog = '{$nomeJog}', 
    tamanhoJog = '{$tamanhoJog}', 
    precoJog = '{$precoJog}', 
    requisitosJog = '{$requisitosJog}', 
    consoleJog = '{$consoleJog}', 
    classificacaoJog = '{$classificacaoJog}', 
    avaliacaoJog = '{$avaliacaoJog}' where codJog = $codJog";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

?>

