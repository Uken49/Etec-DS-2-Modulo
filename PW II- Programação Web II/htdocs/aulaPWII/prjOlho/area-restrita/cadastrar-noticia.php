<?php
    require_once ('global.php');

    //Tente executar
    try {
        header("Location: adm-cadastro-noticia.php");
        
        $noticia = new Noticia();
        
        $noticia->nomeimagem = $_FILES['imagem']['name'];
        $arquivo = $_FILES['imagem']['tmp_name'];

        $noticia->caminhoimagem = "../imagens/noticias/";


        move_uploaded_file($arquivo, 
                        $noticia->caminhoimagem . $noticia->nomeimagem);
        
        $noticia->caminhoimagem = $noticia->caminhoimagem . $noticia->nomeimagem;

        $noticia ->setTituloNoticia($_POST['txttituloNoticia']);
        $noticia ->setSubTituloNoticia($_POST['txtsubTituloNoticia']);
        $noticia ->setTextoNoticia($_POST['txtnoticia']);
        $noticia ->setDataPublicacaoNoticia($_POST['dtpublicacaoNoticia']);
        $noticia ->setIdCategoria($_POST['categoria']);
        $noticia ->setIdReporter($_POST['reporter']);
        $noticia ->setIdStatusNoticia($_POST['statusnoticia']);

        
        echo $noticia->cadastrar($noticia);
    }
    //Caso dê errado:
    catch(Exception $e){
        //Informar o erro
        echo '<pre>';
            print_r($e);
        echo '<pre>';
        //Outra forma de informar o erro
        echo $e->getMessage();
    }
?>