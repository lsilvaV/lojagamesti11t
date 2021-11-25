<?php
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoJogo.php");  
    
?>

<div class="p-5">
    <form action="listaJogoCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCod" class="col-sm-2 col-form-label"> Digite o código do jogo: </label>

            <div class="col-sm-3">
                <input type="number" required name="CodJog" class="form-control" id="inputCod">

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
            <th scope="col"> Código </th>
            <th scope="col"> Jogo </th>
            <th scope="col"> Console </th>
            <th scope="col"> Preço </th>
            <th scope="col"> Deletar </th>
            <th scope="col"> Alterar </th>

        </tr>

    </thead>

    <?php
        $CodJog = isset($_GET['CodJog'])?$_GET['CodJog']:"0";

        if($CodJog){
            $jogo = listaJogoCod($conexao, $CodJog);
            if($jogo){

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
                    <button type="submit" class="btn-danger"> Deletar </button>
                    
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
        }
        
    }

    ?>

    </tbody>

</table>


<?php
    include_once("footer.php"); 

?>