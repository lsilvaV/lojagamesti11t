<?php 
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoPedido.php");  
    
?>

<div class="p-5">
    <form action="listaPedidoCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCod" class="col-sm-2 col-form-label"> Digite o código do pedido: </label>

            <div class="col-sm-3">
                <input type="number" required name="CodPed" class="form-control" id="inputCod">

            </div>

            <div class="col-sm-3">
                <input class="btn btn-dark" type="submit" value="Buscar">

            </div>

        </div>
  
    </form>

</div>


<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col"> Código do Pedido </th>
            <th scope="col"> Código do Cliente </th>
            <th scope="col"> Código do Funcionário </th>
            <th scope="col"> Código do Jogo </th>
            <th scope="col"> Valor Unitário </th>
            <th scope="col"> Alterar</th>

        </tr>

    </thead>

    <?php
        $CodPed = isset($_GET['CodPed'])?$_GET['CodPed']:"0";

        if($CodPed){
            $pedido = listaPedidoCod($conexao, $CodPed);
            if($pedido){

    ?>

    <tbody>
    <tr>
            <th scope="row"> <?=$pedido['codPed']?> </th>
            <td> <?=$pedido['codCliFK']?> </td>
            <td> <?=$pedido['codFunFK']?> </td>
            <td> <?=$pedido['codJogFK']?> </td>
            <td> <?=$pedido['valorUnit']?> </td>
            <td>
                <form action="../controller/deletarPedido.php" method="POST">
                    <input type="hidden" name="deletarPed" value="<?=$pedido['codPed']?>">
                    <button type="submit" class="btn-danger"> X </button>
                    
                </form>    
            
            </td>

        </tr>

    <?php
        }
        
    }

    ?>

    </tbody>

</table>


<?php
    include_once("footer.php"); 

?>