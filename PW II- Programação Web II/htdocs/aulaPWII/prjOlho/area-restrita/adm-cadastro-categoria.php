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
    <title>O Olho - Cadastrando Categoria   </title>
</head>

<body>
    <?php
    require_once('global.php');
    try {
        $categoria = new Categoria();

        $listacategoria = $categoria->listar();
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

    <form name="cadastroCategoria" id="cadastroCategoria" action="cadastrar-categoria.php" method="POST" class="margin-Total">
        <div class="row">
            <div class="col">
                <!-- Inicio - Cadastro da categoria -->
                <label>Nome da Categoria:</label>
                <input type="text" class="form-control" name="txtnomeCategoria" placeholder="Fake News" required><br>
            </div>
        </div> <!-- Fim - Cadastro da categoria  -->

        <input type="submit" class="btn btn-dark mb-5" value="Registrar">
        <input type="reset" class="btn btn-dark mb-5" value="Limpar">

        <div class="table-responsive">
            <!-- Inicio - Lista de categorias cadastradas -->
            <table class="table" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody id='resultado'>
                    <?php foreach ($listacategoria as $linha) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo ($linha['idCategoria']) ?>
                            </th>
                            <td><?php echo $linha['descCategoria'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> <!-- Fim - Lista de categorias cadastradas -->

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