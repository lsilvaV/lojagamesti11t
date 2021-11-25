<?php
    include_once("header.php");
    include_once("../model/conexao.php");
    include_once("../model/bancoUsuario.php");  

?>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col"> Código </th>
            <th scope="col"> Email </th>
            <th scope="col"> Senha </th>
            <th scope="col"> PIN </th>
            <th scope="col"> Deletar </th>
            <th scope="col"> Alterar </th>
            

        </tr>

    </thead>

    <?php
        $usuarios = listaUsuario($conexao);

        foreach($usuarios as $usuario):
    ?>

    <tbody>
        <tr>
            <th scope="row"> <?=$usuario['codUsu']?> </th>
            <td> <?=$usuario['emailUsu']?> </td>
            <td> <?=$usuario['senhaUsu']?> </td>
            <td> <?=$usuario['pinUsu']?> </td>

            <td>
                <form action="../controller/deletarUsuario.php" method="POST">
                    <input type="hidden" name="deletarUsu" value="<?=$usuario['codUsu']?>">
                    <button type="submit" class="btn-danger"> X </button>
                    
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
        endforeach;
    ?>

    </tbody>

</table>


<?php include_once("footer.php"); ?>