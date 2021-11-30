<?php
    function inserirPedido($conexao, $codCliFK, $codFunFK, $codJogFK, $valorUnit){
        $query="insert into tbpedido(codCliFK, codFunFK, codJogFK, valorUnit)
         
                values('{$codCliFK}','{$codFunFK}','{$codJogFK}','{$valorUnit}')";
        
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    function listaPedido($conexao){
        $query = "select * from tbpedido";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    function listaPedidoCod($conexao, $codPedido){
        $query = "select * from tbpedido where codPed={$codPedido}";
        $resultados = mysqli_query($conexao, $query);
        $res = mysqli_fetch_array($resultados);
        return $res;
    
    }

    /*
    function alterarPedido($conexao, $codPed, $codCliFK, $codFunFK, $codJogFK, $valorUnit){
        $query = "update tbpedido set 
        codCliFK = '{$codCliFK}', 
        codFunFK = '{$codFunFK}', 
        codJogFK = '{$codJogFK}', 
        valorUnit = '{$valorUnit}' where codPed = $codPed";
    
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }
    */

    function deletarPedido($conexao, $deletarPed){
        $query = "delete from tbpedido where codPed = $deletarPed";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    }
    
?>