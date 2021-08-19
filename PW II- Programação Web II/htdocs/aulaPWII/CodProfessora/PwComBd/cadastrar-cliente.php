<?php 

    require_once 'global.php';

    try{
        header("Location: index.php");

        $cliente = new Cliente();
        $cliente->setNomeCliente($_POST['txtNome']);
        $cliente->setEmailCliente($_POST['txtEmail']);
        $cliente->setIdTipoCliente($_POST['tipocliente']);

        echo $cliente->cadastrar($cliente);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>