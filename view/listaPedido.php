<?php
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoPedido.php");  

?>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col"> Código do Pedido </th>
            <th scope="col"> Código do Cliente </th>
            <th scope="col"> Código do Funcionário </th>
            <th scope="col"> Código do Jogo </th>
            <th scope="col"> Valor Unitário </th>
            <th scope="col"> Deletar </th>

        </tr>

    </thead>

    <?php
        $pedidos = listaPedido($conexao);

        foreach($pedidos as $pedido):
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
        endforeach;
    ?>

    </tbody>

</table>


<?php include_once("footer.php"); ?>