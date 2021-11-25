<?php
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoJogo.php");  

?>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col"> Código </th>
            <th scope="col"> Jogo </th>
            <th scope="col"> Console </th>
            <th scope="col"> Preço </th>
            <th scope="col"> Deletar </th>
            <th scope="col"> Alterar</th>

        </tr>

    </thead>

    <?php
        $jogos = listaJogo($conexao);

        foreach($jogos as $jogo):
    ?>

    <tbody>
        <tr>
            <th scope="row"> <?=$jogo['codJog']?> </th>
            <td> <?=$jogo['nomeJog']?> </td>
            <td> <?=$jogo['consoleJog']?> </td>
            <td> <?=$jogo['precoJog']?> </td>
            <td>
                <form action="../controller/deletarJogo.php" method="POST">
                    <input type="hidden" name="deletarJog" value="<?=$jogo['codJog']?>">
                    <button type="submit" class="btn-danger"> X </button>
                    
                </form>    
            
            </td>

            <td>
                <form action="../view/formalterarJogo.php" method="POST">
                    <input type="hidden" name="alterarJog" value="<?=$jogo['codJog']?>">
                    <button type="submit" class="btn-success"> Alterar </button>
                
                </form>    
            
            </td>

        </tr>

    <?php
        endforeach;
    ?>

    </tbody>

</table>


<?php include_once("footer.php"); ?>