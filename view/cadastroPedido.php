
<?php
    session_start();
    include("header.php");
    include("../model/conexao.php"); 
    include("../model/bancoPedido.php");
    include("../model/bancoFuncionario.php");
    include("../model/bancoCliente.php");
    include("../model/bancoJogo.php");

    $codUsuFK = $_SESSION["codigoUsuario"];
    $funcionario = listaBuscaFunUsu($conexao, $codUsuFK);
?>

<div class="container row g-3">
    <div class="col-md-3">
        <label for="inputFun" class="form-label"> Código </label>
        <input type="text" readonly value="<?php echo($funcionario["codFun"])?>" class="form-control" id="inputFun">
    </div>

    <div class="col-md-8">
        <label for="inputNomeFun" class="form-label"> Funcionário </label>
        <input type="text" readonly value="<?php echo($funcionario["nomeFun"])?>" class="form-control" id="inputNomeFun">
    </div>

    <!-- Código do Cliente -->
    <!-- Código do Cliente -->
    <!-- Código do Cliente -->

    <?php
        $codCliente = isset($_POST["codCliente"])?$_POST["codCliente"]:0;
        $cliente = isset($codCliente)?listaClienteCod($conexao, $codCliente):"";
        $_SESSION["codigoCliente"] = isset($_POST["codCliente"])?$_POST["codCliente"]:"0";
        $_SESSION["nomeCliente"] = isset($cliente["nomeCli"])?$cliente["nomeCli"]:"";
 
    ?>

    <div class="col-md-2">
        <label for="inputCli" class="form-label"> Código </label>
        <form method="POST" action="cadastroPedido.php">
            <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input type="text" value="<?php echo($_SESSION["codigoCliente"]); ?>" class="form-control" id="inputCli" required name="codCliente">

                <button type="submit" class="btn btn-dark"> 
                    Buscar 
                </button>

            </div>

        </form>

    </div>


    <div class="col-md-9">
        <label for="inputNomeCli" class="form-label"> Cliente </label>
        <input type="text" value="<?=$_SESSION['nomeCliente']?>" readonly class="form-control" id="inputNomeCli">
    </div>

    <!-- Código do Jogo -->
    <!-- Código do Jogo -->
    <!-- Código do Jogo -->

    <?php
        $codJogo= isset($_POST["codJogo"])?$_POST["codJogo"]:"0";

    ?>

    <div class="col-md-2">
        <label for="inputJog" class="form-label"> Código </label>
        <form method="POST" action="cadastroPedido.php">
            <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                <input type="text" value="<?=$codJogo?>" class="form-control" id="inputJog" required name="codJogo">
                <input type="hidden" value="<?=$_SESSION['codigoCliente']?>" name="codCliente">
                <input type="hidden" value="<?=$_SESSION['nomeCliente']?>" name="nomeCliente">

                <button type="submit" class="btn btn-dark"> 
                    Buscar 
                </button>

            </div>

        </form>

    <?php
        $jogo = isset($codJogo)?listaJogoCod($conexao, $codJogo):"";
        $_SESSION["codigoJogo"] = isset($jogo["codJogo"])?$jogo["codJogo"]:"0";
        $_SESSION["nomeJogo"] = isset($jogo["nomeJog"])?$jogo["nomeJog"]:"";
        $_SESSION["precoJogo"] = isset($jogo["precoJog"])?$jogo["precoJog"]:"";
    ?>

    </div>

    <div class="col-md-9">
        <label for="inputNomeJog" class="form-label"> Jogo </label>
        <input type="text" value="<?=$_SESSION["nomeJogo"]?>" readonly class="form-control" id="inputNomeJog">
    </div>

    <div class="col-11">
        <label for="inputValorU" class="form-label"> Valor Unitário </label>
        <input type="text" class="form-control" value="<?=$_SESSION["precoJogo"]?>" readonly id="inputValorU">
    </div>

    <form method="POST" action="../controller/inserirPedido.php">
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input type="hidden" value="<?=$codJogo?>" name="codJogFK">
            <input type="hidden" value="<?=$_SESSION['codigoCliente']?>" name="codCliFK">
            <input type="hidden" value="<?php echo($funcionario["codFun"])?>" name="codFunFK">
            <input type="hidden" value="<?=$_SESSION['precoJogo']?>" name="valorUnit">

            <div class="col-12">
                <button type="submit" class="btn btn-primary"> Confirmar </button>
            </div>

        </div>

    </form>
    
</div>

<?php include("footer.php"); ?>