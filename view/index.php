<?php
    session_start();
    if(!$_SESSION["emailUsuario"]){
        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Você não tem acesso a esta página. </div>";
        header("Location:../view/logar.php");
    }

    include("header.php"); 
?>

<img src="img/mainloja.gif" width="100%"/>


<?php 
    include("footer.php"); 
?>