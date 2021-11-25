<?php
    function inserirUsuario($conexao, $emailUsuario, $senhaUsuario, $pinUsuario){
        $option = ['cost' >= 8];
        $senhacrypto = password_hash($senhaUsuario, PASSWORD_BCRYPT, $option);

        $query="insert into tbusuario(emailUsu, senhaUsu, pinUsu)values('{$emailUsuario}','{$senhacrypto}','{$pinUsuario}')";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    function listaUsuario($conexao){
        $query = "select * from tbusuario";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    function listaUsuarioCod($conexao, $codUsuario){
        $query = "select * from tbusuario where codUsu={$codUsuario}";
        $resultados = mysqli_query($conexao, $query);
        $res = mysqli_fetch_array($resultados);
        return $res;
    
    }

    function deletarUsuario($conexao, $deletarUsu){
        $query = "delete from tbusuario where codUsu = $deletarUsu";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    }

    function alterarUsuario($conexao, $codUsu, $emailUsu, $senhaUsu, $pinUsu){
        $option = ['cost' >= 8];
        $senhacrypto = password_hash($senhaUsu, PASSWORD_BCRYPT, $option);

        $query = "update tbusuario set 
        emailUsu = '{$emailUsu}', 
        senhaUsu = '{$senhacrypto}',
        pinUsu = '{$pinUsu}' where codUsu = $codUsu";  
    
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    function buscarAcesso($conexao, $email, $senha){
        $query = "select * from tbusuario where emailUsu = '{$email}'";
        $resultados = mysqli_query($conexao, $query);

        if(mysqli_num_rows($resultados) > 0){
            $linha = mysqli_fetch_assoc($resultados);

            if(password_verify($senha, $linha["senhaUsu"])){
                $_SESSION["emailUsuario"] = $linha["emailUsu"];
                $_SESSION["codigoUsuario"] = $linha["codUsu"];

                return $linha["emailUsu"];

            }else{
                return "Senha não confere";
            }
        }else{
            return "Email não cadastrado";
        }
    }

    function sairSistema(){
        session_destroy();
        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Sua sessão foi fechada </div>";
        header("Location:../view/logar.php");
    }

?>
