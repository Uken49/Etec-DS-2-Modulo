<?php require_once("valida-sentinela.php"); ?>
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
    <title>O Olho - Cadastrando Reporter</title>
    <!-- Validação de session -->
</head>

<body>
    <?php
    require_once('global.php');
    try {
        $reporter = new Reporter();

        $listareporter = $reporter->listar();
    } catch (Exception $e) {
        echo '<pre>';
        print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Navbar - Barra de navegação do Site -->
            <img src="../imagens/logotipo.png" height="50" width="70"> <!-- Imagem do site na navbar-->
            <a href="area-adm.php">
                <button type="button" class="btn btn-danger active">
                    Voltar
                </button>
            </a>
            <a href="index-area-restrita.php">
                <button type="button" class="btn btn-secondary active">
                    Voltar para a home
                </button>
            </a>
            <label for="Aviso"><b>Você está acessando a área do Administrador.</b></label>
            <a href=" ../logout.php" class="btn btn-dark active" role="button" aria-pressed="true ">Sair</a>
        </div> <!-- Navbar Fim -->
    </nav>

    <form name="cadastroReporter" id="cadastroReporter" action="cadastrar-reporter.php" method="POST" class="margin-Total">
        <div class="row">
            <div class="col mt-2">
                <!-- Inicio - Dados do reporter -->
                <label>Nome do Reporter:</label>
                <input type="text" class="form-control" name="txtnomeReporter" placeholder="José Firmino dos Santos" required><br>
            </div>
            <div class="col mt-2">
                <label>CPF do Reporter (coloque os pontos e o traço):</label>
                <input type="text" class="form-control" name="cpfReporter" placeholder="111.222.333-96" required><br>
            </div>
        </div>

        <div class="col row mt-2">
            <label>Email do Reporter:</label>
            <input type="email" class="form-control" name="emailreporter" placeholder="emailexemplo@endereco.com" required><br>
        </div> <!-- Fim - Dados do reporter  -->

        <br><br>
        <input type="submit" class="btn btn-dark mb-5" value="Registrar">
        <input type="reset" class="btn btn-dark mb-5" value="Limpar">

        <div class="table-responsive">
            <!-- Inicio - Lista de reporteres cadastrados -->
            <table class="table" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do Reporter</th>
                        <th scope="col">CPF do Reporter</th>
                        <th scope="col">Email do Reporter</th>
                    </tr>
                </thead>
                <tbody id='resultado'>
                    <?php foreach ($listareporter as $linha) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo ($linha['idReporter']) ?>
                            </th>
                            <td><?php echo $linha['nomeReporter'] ?></td>
                            <td><?php echo $linha['cpfReporter'] ?></td>
                            <td><?php echo $linha['emailReporter'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> <!-- Fim - Lista de reporteres cadastrados -->
    </form>


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