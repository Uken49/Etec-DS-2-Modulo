<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"><!-- Chamando o css do Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Chamando o meu CSS -->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script> <!-- Chamando o jquery -->
    <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Chamando o javascript do bootstrap -->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/favicon/apple-touch-icon.png"> <!-- Inicio - Icon  -->
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="imagens/favicon/site.webmanifest">
    <link rel="mask-icon" href="imagens/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> <!-- Fim - Icon -->
    <title>O Olho - Rede de notícias online</title>
</head>

<body>
    <?php
    require_once('global.php');
    try {
        $noticia = new Noticia();

        $listanoticia = $noticia->listar();
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
            <img src="imagens/logotipo.png" height="50" width="70"> <!-- Imagem do site na navbar-->

            <button type="button" class="btn btn-light" disabled>Area do Administrador</button>
            <form name="login" method="POST" action="valida-login.php">
                <label for="Usuario">Usuario:</label>
                <input type="text" name="usuarioLogin" id="usuarioLogin" required>

                <label for="Senha">Senha:</label>
                <input type="password" name="senhaLogin" id="senhaLogin" requeired>
                <input type="submit" class="btn btn-dark active" role="button" value="Logar">

            </form>
        </div> <!-- Navbar - Fim -->
    </nav>

    <!-- Inicio - Conteúdo da página -->

    <!-- Inicio - Noticias Destaques -->
    <div id="carouselExampleIndicators" class="carousel slide container mt-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $j = 0;
            foreach ($listanoticia as $linha) {
                if ($j != 3 && strcasecmp($linha['descStatusNoticia'], 'Desativado')) {
                    if ($j == 0) { ?>
                        <div class="carousel-item active">
                        <?php } else { ?>
                            <div class="carousel-item">
                            <?php } ?>
                            <div>
                                <img class="d-block w-100 imagem-style" src="imagens/<?php echo $linha['fotoNoticia'] ?>" height="300" width="300">
                            </div>
                            <div class="carousel-caption d-none d-md-block carrosel-style">
                                <strong> <?php echo $linha['tituloNoticia'] ?> </strong>
                                <p> <?php echo $linha['subTituloNoticia'] ?></p>
                            </div>
                            </div>
                    <?php $j++;
                }
            } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
        </div>
        <!-- Fim - Noticias Destaques -->

        <div class="margin-Total table-responsive-xl">
            <!-- Inicio - Noticias no corpo da pagina  -->
            <table>
                <tbody>
                    <?php $i = 0;
                    foreach ($listanoticia as $linha) {
                        $size = count($linha);
                        if ($i % 2 == 0) { ?>
                            <tr>
                            <?php }
                        if (strcasecmp($linha['descStatusNoticia'], 'Desativado')) { ?>

                                <td class="td-style">
                                    <figure>
                                        <img src='imagens/<?php echo $linha['fotoNoticia'] ?>' width='200' heigth='200'>
                                    </figure>
                                    <strong class="categoria mr-5">
                                        <?php echo $linha['descCategoria'] ?>
                                    </strong>
                                    <strong class="data-publicacao">
                                        <?php echo $linha['dataPublicacaoNoticia'] ?>
                                    </strong>
                                    <strong class="titulo">
                                        <?php echo $linha['tituloNoticia'] ?>
                                    </strong>
                                    <h5>
                                        <?php echo $linha['subTituloNoticia'] ?>
                                    </h5>
                                    <p class="texto mb-5">
                                        <?php echo $linha['textoNoticia'] ?>
                                    </p>
                                </td>
                            <?php $i++;
                        }
                        if ($i % 2 == 0 && strcasecmp($linha['descStatusNoticia'], 'Ativado')) { ?>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div> <!-- Fim - Noticias no corpo da pagina  -->

        <!-- Fim - Conteúdo da página -->

        <!-- Rodapé da página-->
        <nav class="navbar navbar-light" style="background-color: #d6d8db;">
            <div class="table-responsive-md container ml-5">
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
                                    Helder D. R. Alvarengaa
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </nav>
</body>

</html>