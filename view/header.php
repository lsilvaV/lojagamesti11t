<!doctype html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="../model/style.css">

    <title> Projeto PHP </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../view/index.php"> Loja de Jogos </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Usuário </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="../view/cadastroUsuario.php"> Cadastro </a> </li>

                            <li> <a class="dropdown-item" href="../view/listaUsuario.php"> Visualizar </a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li> <a class="dropdown-item" href="../view/listaUsuarioCod.php"> Busca por código </a> </li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Jogos </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="../view/cadastroJogo.php"> Cadastro </a> </li>

                            <li> <a class="dropdown-item" href="../view/listaJogo.php"> Visualizar </a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li> <a class="dropdown-item" href="../view/listaJogoCod.php"> Busca por código </a> </li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Cliente </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="../view/cadastroCliente.php"> Cadastro </a> </li>

                            <li> <a class="dropdown-item" href="../view/listaCliente.php"> Visualizar </a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li> <a class="dropdown-item" href="../view/listaClienteCod.php"> Busca por código </a> </li>

                            <li> <a class="dropdown-item" href="../view/listaClienteNome.php"> Busca por nome </a> </li>
                            

                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Funcionário </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="../view/cadastroFuncionario.php"> Cadastro </a> </li>

                            <li> <a class="dropdown-item" href="../view/listaFuncionario.php"> Visualizar </a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li> <a class="dropdown-item" href="../view/listaFuncionarioCod.php"> Busca por código </a> </li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pedido </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="../view/cadastroPedido.php"> Cadastro </a> </li>

                            <li> <a class="dropdown-item" href="#"> Visualizar </a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li> <a class="dropdown-item" href="#"> Busca por código </a> </li>

                        </ul>

                    </li>

                </ul>

                <form class="d-flex" action="../controller/sair.php">
                    <button class="btn btn-outline-info" type="submit"> Sair </button>

                </form>

            </div>

        </div>

    </nav>
