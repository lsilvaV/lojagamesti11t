<?php
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoFuncionario.php");  
    
?>

<div class="p-5">
    <form action="listaFuncionarioCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCod" class="col-sm-2 col-form-label"> Digite o código do funcionário: </label>

            <div class="col-sm-3">
                <input type="number" required name="CodFun" class="form-control" id="inputCod">

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
            <th scope="col"> Usuário </th>
            <th scope="col"> Nome </th>
            <th scope="col"> Função </th>
            <th scope="col"> Telefone </th>
            <th scope="col"> Data de Nascimento </th>
            <th scope="col"> Deletar </th>
            <th scope="col"> Alterar</th>

        </tr>

    </thead>

    <?php
        $CodFun = isset($_GET['CodFun'])?$_GET['CodFun']:"0";

        if($CodFun){
            $funcionario = listaFuncionarioCod($conexao, $CodFun);
            if($funcionario){

    ?>

    <tbody>
    <tr>
            <th scope="row"> <?=$funcionario['codFun']?> </th>
            <td> <?=$funcionario['codUsuFK']?> </td>
            <td> <?=$funcionario['nomeFun']?> </td>
            <td> <?=$funcionario['funcaoFun']?> </td>
            <td> <?=$funcionario['foneFun']?> </td>
            <td> <?=$funcionario['datanasFun']?> </td>
            <td>
                <form action="../controller/deletarFuncionario.php" method="POST">
                    <input type="hidden" name="deletarFun" value="<?=$funcionario['codFun']?>">
                    <button type="submit" class="btn-danger"> X </button>
                    
                </form>    
            
            </td>

            <td>
                <form action="../view/formalterarFuncionario.php" method="POST">
                    <input type="hidden" name="alterarFun" value="<?=$funcionario['codFun']?>">
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