<?php
    require_once('global.php');

    //Tente executar
    try {
        header("Location: adm-cadastro-categoria.php");

        $categoria = new Categoria();
        $categoria->setDescCategoria($_POST['txtnomeCategoria']);
        echo $categoria->cadastrar($categoria);
    }
    //Caso dê errado:
    catch (Exception $e) {
        //Informar o erro
        echo '<pre>';
        print_r($e);
        echo '<pre>';
        //Outra forma de informar o erro
        echo $e->getMessage();
    }
?>