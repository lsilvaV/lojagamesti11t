<?php
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoUsuario.php");  
    
?>

<div class="p-5">
    <form action="listaUsuarioCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputUsu" class="col-sm-2 col-form-label"> Digite o código do Usuário: </label>

            <div class="col-sm-3">
                <input type="number" required name="CodUsu" class="form-control" id="inputUsu">

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
            <th scope="col"> Email </th>
            <th scope="col"> Senha </th>
            <th scope="col"> Deletar </th>
            <th scope="col"> Alterar </th>

        </tr>

    </thead>

    <?php
        $CodUsu = isset($_GET['CodUsu'])?$_GET['CodUsu']:"0";

        if($CodUsu > 0){
            $usuario = listaUsuarioCod($conexao, $CodUsu);
            if($usuario){
    ?>

    <tbody>
        <tr>
            <th scope="row"> <?=$usuario['codUsu']?> </th>
            <td> <?=$usuario['emailUsu']?> </td>
            <td> <?=$usuario['senhaUsu']?> </td>
            <td>
            <form action="../controller/deletarUsuario.php" method="POST">
                    <input type="hidden" name="deletarUsu" value="<?=$usuario['codUsu']?>">
                    <button type="submit" class="btn-danger"> Deletar </button>
                    
                </form>    
            
            </td>

            <td>
                <form action="../view/formalterarUsuario.php" method="POST">
                    <input type="hidden" name="alterarUsu" value="<?=$usuario['codUsu']?>">
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