<?php require_once("valida-sentinela.php"); ?> <!-- Validação de session -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"><!-- Chamando o css do Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/style.css"> <!-- Chamando o meu CSS -->
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script> <!-- Chamando o jquery -->
    <script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Chamando o javascript do bootstrap -->
    <link rel="apple-touch-icon" sizes="180x180" href="../imagens/favicon/apple-touch-icon.png"> <!-- Inicio - Icon  -->
    <link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="../imagens/favicon/site.webmanifest">
    <link rel="mask-icon" href="../imagens/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> <!-- Fim - Icon -->
    <title>O Olho - Acesso do Adiministrador</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Navbar - Barra de navegação do Site -->
            <img src="../imagens/logotipo.png" height="50" width="70"> <!-- Imagem do site na navbar-->
            <a href="index-area-restrita.php">
                <button type="button" class="btn btn-outline-secondary active">
                    Voltar para a home
                </button>
            </a>
            <label for="Aviso"><b>Você está acessando a área do Administrador.</b></label>
            <a href=" ../logout.php" class="btn btn-dark active" role="button" aria-pressed="true ">Sair</a>
        </div> <!-- Navbar Fim -->
    </nav>

    <div align="center" class="container" style="margin-top: 200px; margin-bottom: 200px;">
        <div class="row">
            <div class="col-sm">
                <a href="adm-cadastro-categoria.php">
                    <button class="btn btn-outline-dark">
                        Cadastrar Categoria
                    </button>
                </a>
            </div>

            <div class="col-sm">
                <a href="adm-cadastro-reporter.php">
                    <button class="btn btn-outline-dark">
                        Cadastrar Reporter
                    </button>
                </a>
            </div>

            <div class="col-sm">
                <a href="adm-cadastro-noticia.php">
                    <button class="btn btn-outline-dark">
                        Cadastrar Noticia
                    </button>
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-light" style="background-color: #d6d8db;">
        <div class="table-responsive-md ml-5">
            <table class="table table-secondary  ml-5">
                <tbody>
                    <tr>
                        <td>
                            <p class="ml-5">
                                <b>
                                    <h5>ETEC de Guaianazes</h5>
                                </b> <br><br>
                                Rua: Feliciano de Mendonça, 290 - Guaianazes<br>
                                São Paulo - SP<br>
                                (11) 255X-XXXX<br><br>
                                &copy; Todos os direitos reservados - 2021.
                            </p>
                        </td>
                        <td>
                            <p class="mr-5">
                                <b>
                                    <h5>Desenvolvedores do Site</h5>
                                </b> <br><br>
                                Guilherme Souza Costas<br>
                                Helder D. R. Alvarenga
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </nav>
</body>

</html>