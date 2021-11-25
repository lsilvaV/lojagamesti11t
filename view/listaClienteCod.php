<?php 
    if(!$_SESSION["emailUsuario"]){
        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Você não tem acesso a esta página. </div>";
        header("Location:../view/logar.php");
    }

    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoCliente.php");  
    
?>

<div class="p-5">
    <form action="listaClienteCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCod" class="col-sm-2 col-form-label"> Digite o código do cliente: </label>

            <div class="col-sm-3">
                <input type="number" required name="CodCli" class="form-control" id="inputCod">

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
            <th scope="col"> CPF </th>
            <th scope="col"> Telefone </th>
            <th scope="col"> Data de Nascimento </th>
            <th scope="col"> Deletar </th>
            <th scope="col"> Alterar</th>

        </tr>

    </thead>

    <?php
        $CodCli = isset($_GET['CodCli'])?$_GET['CodCli']:"0";

        if($CodCli){
            $cliente = listaClienteCod($conexao, $CodCli);
            if($cliente){

    ?>

    <tbody>
    <tr>
            <th scope="row"> <?=$cliente['codCli']?> </th>
            <td> <?=$cliente['codUsuFK']?> </td>
            <td> <?=$cliente['nomeCli']?> </td>
            <td> <?=$cliente['cpfCli']?> </td>
            <td> <?=$cliente['foneCli']?> </td>
            <td> <?=$cliente['datanasCli']?> </td>
            <td>
                <form action="../controller/deletarCliente.php" method="POST">
                    <input type="hidden" name="deletarCli" value="<?=$cliente['codCli']?>">
                    <button type="submit" class="btn-danger"> X </button>
                    
                </form>    
            
            </td>

            <td>
                <form action="../view/formalterarCliente.php" method="POST">
                    <input type="hidden" name="alterarCli" value="<?=$cliente['codCli']?>">
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