<?php require_once("valida-sentinela.php"); ?><!-- Validação de session -->
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
    <title>O Olho - Cadastrando Noticia</title>
</head>

<body>
    <?php
    require_once('global.php');
    try {
        $noticia = new Noticia();
        $categoria = new Categoria();
        $reporter = new Reporter();
        $statusnoticia = new StatusNoticia();

        $listanoticia = $noticia->listar();
        $listacategoria = $categoria->listar();
        $listareporter = $reporter->listar();
        $listastatus = $statusnoticia->listar();
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

    <form name="cadastroNoticia" id="cadastroNoticia" action="cadastrar-noticia.php" method="POST" enctype="multipart/form-data" class="mx-5 my-4">
        <div class="row">
            <!-- Inicio - Dados noticia  -->
            <div class="col mt-3">
                <label>Categoria da Notícia:</label>
                <select type="text" class="form-control" name="categoria" required>
                    <?php foreach ($listacategoria as $linha) { ?>
                        <option value=<?php echo $linha['idCategoria'] ?>>
                            <?php echo $linha['descCategoria'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="col mt-3">
                <label>Status da Notícia:</label>
                <select type="text" class="form-control" name="statusnoticia" required>
                    <?php foreach ($listastatus as $linha) { ?>
                        <option value=<?php echo $linha['idStatusNoticia'] ?>>
                            <?php echo $linha['descStatusNoticia'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row col mt-3">
            <label>Nome do Reporter:</label>
            <select type="text" class="form-control" name="reporter" required>
                <?php foreach ($listareporter as $linha) { ?>
                    <option value=<?php echo $linha['idReporter'] ?>>
                        <?php echo $linha['nomeReporter'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="row">
            <div class="col mt-2">
                <label>Título da Notícia:</label>
                <input type="text" class="form-control" name="txttituloNoticia" placeholder="&quot;Michael Jackson não morreu e vai jogar no Vasco!!&quot;" required><br>
            </div> <!-- Existe um problema ao cadastrar muitos caracteres sem espaço,isso fica nitido na index -->
            <div class="col mt-2">
                <label>Sub-título da Notícia:</label>
                <input type="text" class="form-control" name="txtsubTituloNoticia" placeholder="Um rumor que se espalha na Internet." required><br>
            </div>
        </div>

        <div class="col row mt-2">
            <label>Texto da Notícia:</label>
            <textarea style="resize: none;" name="txtnoticia" class="form-control" cols="30" rows="10" required></textarea><br>
        </div>

        <div class="row">
            <div class="col-5 mt-2 mr-5">
                <label>Data de Publicação da Notícia:</label>
                <input type="date" class="form-control" name="dtpublicacaoNoticia" required>
            </div>
            <div class="mt-2 ml-5">
                <label>Foto da Notícia:</label>
                <input type="file" class="form-control-file" accept="image/*" name="imagem" required><br><br>
            </div>
        </div> <!-- Fim - Dados da noticia -->

        <input type="submit" class="btn btn-dark mb-5" value="Registrar">
        <input type="reset" class="btn btn-dark mb-5" value="Limpar">

        <div class="table-responsive">
            <!-- Inicio - Lista de noticias cadastradas -->
            <table class="table" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Título da Notícia</th>
                        <th scope="col">Sub-título da Notícia</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Reporter</th>
                        <th scope="col">Data de Publicação da Notícia</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listanoticia as $linha) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo ($linha['idNoticia']) ?>
                            </th>
                            <td>
                                <img src='<?php echo $linha['fotoNoticia'] ?>' width='100' heigth='100'>
                            </td>
                            <td><?php echo $linha['tituloNoticia'] ?></td>
                            <td><?php echo $linha['subTituloNoticia'] ?></td>
                            <td><?php echo $linha['descCategoria'] ?></td>
                            <td><?php echo $linha['nomeReporter'] ?></td>
                            <td><?php echo $linha['dataPublicacaoNoticia'] ?></td>
                            <td><?php echo $linha['descStatusNoticia'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> <!-- Fim - Lista de noticias cadastradas -->
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